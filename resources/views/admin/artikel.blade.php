@extends('admin.theme.default')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Administrator</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Posted Articles</li>
        </ol>

        <div class="row">
            <div class="col-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center">No.</th>
                            <th style="text-align:center">Tag</th>
                            <th style="text-align:center">Title</th>
                            <th style="text-align:center">Created By</th>
                            <th style="text-align:center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $articles as $article )
                            <tr>
                                <td style="text-align:center">{{ $loop->iteration }}</td>
                                <td style="text-align:left">{{ $article->tag->value }}</td>
                                <td style="text-align:left">{{ $article->title }}</td>
                                <td style="text-align:left">{{ $article->user->name }}</td>
                                <td style="text-align:center">
                                    <a href="{{ route('admin.artikelDetail', $article->id) }}" class="btn btn-sm btn-info">View</a> &nbsp;
                                    @if ( $article->is_apprv == 0)
                                        <form action="{{ route('admin.artikelApprove', $article->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-sm btn-warning">Approve</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
