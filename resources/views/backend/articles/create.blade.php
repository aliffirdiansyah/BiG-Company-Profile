@extends('backend.layouts.app')

@section('title', 'Buat Artikel')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Artikel Baru</h3>
            </div>

            <form action="{{ route(name: 'admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">

                    {{-- Judul --}}
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}"
                               placeholder="Masukkan judul artikel">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Konten --}}
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea name="article"
                                  id="editor"
                                  class="form-control @error('article') is-invalid @enderror"
                                  rows="6">{{ old('article') }}</textarea>
                        @error('article')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Thumbnail --}}
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file"
                               name="thumbnail"
                               class="form-control-file @error('thumbnail') is-invalid @enderror">
                        @error('thumbnail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>

                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        ckfinder: {
            uploadUrl: "{{ route('ckeditor.upload') }}"
        }
    })
    .then(editor => {
        editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
            return {
                upload: () => {
                    return loader.file.then(file => {
                        const data = new FormData();
                        data.append('upload', file);
                        data.append('_token', '{{ csrf_token() }}');

                        return fetch("{{ route('ckeditor.upload') }}", {
                            method: 'POST',
                            body: data
                        })
                        .then(response => response.json())
                        .then(result => {
                            if (!result.url) {
                                throw result;
                            }
                            return { default: result.url };
                        });
                    });
                }
            }
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>

@endpush

