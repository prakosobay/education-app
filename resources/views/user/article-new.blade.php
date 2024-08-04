@extends('user.theme.default')

@section('artikel')
    <div class="container-fluid my-3">
        <a class="btn btn-success" href="{{ route('users')}}">Back</a><br/>
        <h1>Create New Article</h1> <br/>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('article.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="tags" class="form-label"><b>Category :</b></label>
                <select name="tags" id="tags" class="form-control" required>
                    @foreach ( $tags as $tag )
                        <option value="{{ $tag->id }}">{{ $tag->value }}</option>
                    @endforeach
                </select>
                @error('tags')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="title" class="form-label"><b>Title :</b></label>
                <input type="text" class="form-control" id="title" name="title" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="content" class="form-label"><b>Content :</b></label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div><br/>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
