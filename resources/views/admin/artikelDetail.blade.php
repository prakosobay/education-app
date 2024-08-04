@extends('admin.theme.default')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Administrator</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Posted Articles</li>
        </ol>

        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-6">
                        <span style="text-align:right; font-weight:bold; font-size:20px;" class="badge text-bg-success">{{ $article->tag->value }}</span><br/>
                    </div><br/>
                    <h3 style="text-align:left">{{ $article->title }}</h3>
                </div><br/>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
@endsection
