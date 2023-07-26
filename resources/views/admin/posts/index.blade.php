@extends('layouts.admin')
@section('title')
    Posts
@endsection

@section('css')
    <!-- Data Tables CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <style>
        .crud {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            gap: 8px;
        }
    </style>
@endsection

@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Posts Table</h3>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary ml-auto">Create Posts</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    T/R
                                </th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Category name(uz)</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title_uz }}</td>
                                    <td>{!! \Str::limit($post->body_uz, 150) !!}</td>
                                    <td>{{ $post->category->name_uz ?? "Bog'lanmagan" }}</td>
                                    <td>
                                        @foreach ($post->tags as $tag)
                                            {{ $tag->name_uz }},
                                        @endforeach
                                    </td>
                                    <td>
                                        <img width="100" height="100" alt="image"
                                            src="/site/images/posts/{{ $post->image }}">
                                    </td>
                                    <td>{{ $post->created_at }}</td>
                                    <td class="crud">
                                        <a href="{{ route('admin.posts.show', $post->id) }}"
                                            class="btn btn-warning">Show</a>
                                        <a href="{{ route('admin.posts.edit', $post->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form style="display: inline"
                                            action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are You Delete?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    @endsection


    @section('js')
        <script src="assets/bundles/datatables/datatables.min.js"></script>
        <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/page/datatables.js"></script>
    @endsection
