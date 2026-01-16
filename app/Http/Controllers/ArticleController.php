<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * List artikel (admin)
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('backend.articles.index', compact('articles'));
    }

    /**
     * Form create artikel
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Simpan artikel baru
     */
    public function store(Request $request)
    {
        $request->validate([
             'title' => 'required|string|max:255',
            'article' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
        ]);

        // Upload thumbnail
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')
                ->store('articles', 'public');
        }

        $excerpt = Str::limit(
            preg_replace('/\s+/', ' ', strip_tags($request->article)),
            150
        );

        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $count = 1;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }

        Article::create([
            'title'            => $request->title,
            'slug'             => $slug,
            'excerpt'          => $excerpt,
            'article'          => $request->article,
            'thumbnail'        => $thumbnailPath,

            'meta_title'       => $request->meta_title
                                    ?: Str::limit($request->title, 55) . ' | BiG Airtech',

            'meta_description' => $request->meta_description
                                    ?: $excerpt,

            'status'           => $request->status ?? 'draft',
            'published_at'     => $request->status === 'published' ? now() : null,
        ]);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dibuat');
    }

    /**
     * Form edit artikel
     */
    public function edit(Article $article)
    {
        return view('backend.articles.edit', compact('article'));
    }

    /**
     * Update artikel
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'article'   => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'    => 'required|in:draft,published',
        ]);

        // 1️⃣ Generate excerpt bersih
        $excerpt = Str::limit(
            preg_replace('/\s+/', ' ', strip_tags($request->article)),
            150
        );

        // 2️⃣ Update slug HANYA jika judul berubah
        $slug = $article->slug;
        if ($request->title !== $article->title) {
            $baseSlug = Str::slug($request->title);
            $slug = $baseSlug;
            $count = 1;

            while (
                Article::where('slug', $slug)
                    ->where('id', '!=', $article->id)
                    ->exists()
            ) {
                $slug = $baseSlug . '-' . $count++;
            }
        }

        // 3️⃣ Thumbnail baru (hapus lama)
        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }

            $article->thumbnail = $request->file('thumbnail')
                ->store('articles', 'public');
        }

        // 4️⃣ Update data utama
        $article->update([
            'title'            => $request->title,
            'slug'             => $slug,
            'excerpt'          => $excerpt,
            'article'          => $request->article,

            'meta_title'       => $request->meta_title
                                    ?: Str::limit($request->title, 55) . ' | BiG Airtech',

            'meta_description' => $request->meta_description
                                    ?: $excerpt,

            'status'           => $request->status,

            // publish hanya sekali
            'published_at'     => $request->status === 'published'
                                    ? ($article->published_at ?? now())
                                    : null,
        ]);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Soft delete artikel
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()
            ->route('backend.articles.index')
            ->with('success', 'Artikel berhasil dihapus');
    }
}
