@extends('user.theme.default')

@section('artikel')
    <!-- Post header-->
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">Posted on {{ $article->created_at->format('F j, Y') }} by {{ $article->user->name }}</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $article->tag->value }}</a>
    </header>
    <!-- Preview image figure-->
    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
    <!-- Post content-->
    <section class="mb-5">
        <p class="fs-5 mb-4">{{ $article->content }}</p>
    </section>
    {{--<section class="mb-5">
        <h2 class="fw-bolder mb-4">Comments</h2>
        @foreach($article->comments as $comment)
            <div class="d-flex mb-4">
                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                <div class="ms-3">
                    <div class="fw-bold">{{ $comment->user->name }}</div>
                    {{ $comment->content }}
                    <div class="text-muted fst-italic">{{ $comment->created_at->diffForHumans() }}</div>
                </div>
            </div>
        @endforeach
    </section>--}}
    @auth
    <!-- Comments section-->
    <section class="mb-5">
        <div class="card bg-light">
            <div class="card-body">
                <!-- Comment form-->
                <form class="mb-4" action="{{ route('comments.store', $article->id) }}" method="POST">
                    @csrf
                    <textarea id="ketik-komentar" name="content" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
                </form>
                <!-- Single comment-->
                @foreach($article->comments as $comment)
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">{{ $comment->user->name }}</div>
                            {{ $comment->content }}
                            <div class="text-muted fst-italic">{{ $comment->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endauth
@endsection
