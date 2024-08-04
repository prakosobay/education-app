@extends('user.theme.default')
@section('artikel')
    <header class="mb-4">
        <h1 class="fw-bolder mb-1">Selamat Datang, guest</h1>
        <p>Artike-artikel yang dapat anda baca, silakan login untuk membuat artikel</p>
        @auth
            <button type="button" class="btn btn-success" onclick="window.location='{{ url('/article/new') }}'">Create New Article</button>
        @endauth
        <button type="button" class="btn btn-success" onclick="window.location='{{ url('/login') }}'">Login</button>
    </header>
    @foreach($articles as $article)
        <div class="card">
            <div class="card-body mb-3" onclick="window.location='{{ url('/article/'.$article->id) }}'" style="cursor: pointer;">
                <h5 class="card-title">{{ $article->title }}</h5>
                <span class="badge text-bg-primary">{{ $article->created_at->diffForHumans() }}</span>
                <p class="card-text">
                    {{ Str::limit($article->content, 100) }}
                    <a href="{{ url('/article/'.$article->id) }}">... read more</a>
                </p>
            </div>
            <div class="card-footer">
                by {{ $article -> user -> name }} &nbsp;|&nbsp;<span class="badge text-bg-warning">{{ $article->tag->value }}</span>
            </div>
        </div>
    @endforeach
@endsection
