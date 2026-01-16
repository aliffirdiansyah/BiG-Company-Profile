@extends('backend.layouts.app')

@section('title', 'Article List')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Articles</h3>
            <div class="card-tools">
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-sm">Create New Article</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Excerpt</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->excerpt }}</td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
