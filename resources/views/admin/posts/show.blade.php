@extends('layouts.admin')
@section('title')
    Show Posts
@endsection

@section('css')
    <!-- Data Tables CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
                <h3> Id  -> {{ $post->id }}</h3>
                <a href="{{ url()->previous() }}" class="btn btn-info ml-auto">Back</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <tr>
                            <th>Title (Uz)</th> <td>{{ $post->title_uz }}</td>
                        </tr>
                        <tr>
                            <th>Title (Ru)</th> <td>{{ $post->title_ru }}</td>
                        </tr>
                        <tr>
                            <th>Body (Uz)</th> <td>{!! $post->body_uz !!}</td>
                        </tr>
                        <tr>
                            <th>Body (Ru)</th> <td>{!! $post->body_ru !!}</td>
                        </tr>
                        <tr>
                            <th>Qisqacha Post Haqida (UZ)</th> <td>{{ $post->description_uz }}</td>
                        </tr>
                        <tr>
                            <th>Qisqacha Post Haqida (RU)</th> <td>{{ $post->description_ru }}</td>
                        </tr>
                        <tr>
                            <th>Category</th> <td>{{ $post->category->name_uz }}</td>
                        </tr>
                        <tr>
                            <th>Tag</th> <td>@foreach ($post->tags as $tag)
                                {{ $tag->name_uz }}
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>Image</th> <td><img src="/site/images/posts/{{ $post->image }}" alt="Img" width="190px" height="120px"></td>
                        </tr>
                        <tr>
                            <th>View</th> <td>{{ $post->view }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th> <td>{{ $post->slug }}</td>
                        </tr>
                        <tr>
                            <th>Meta title</th> <td>{{ $post->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta decription</th> <td>{{ $post->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Meta keywords</th> <td>{{ $post->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th> <td>{{ $post->created_at->format('H:m / d.m.Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

       
        </div>
    </div>
@endsection





{{-- <thead>
    <tr>
        <th class="text-center">
            T/R
        </th>
        <th>Title</th>
        <th>Body</th>
        <th>Category Id</th>
        <th>Image</th>
        <th>Created_at</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
   
        <tr>
            <td>{{ $post->title_uz }}</td>
            <td>{!! $post->body_uz !!}</td>
            <td>{{ $post->category_id }}</td>
            <td>
                <img width="130" height="110" alt="image" src="/site/images/posts/{{ $post->image }}">
            </td>
            <td>{{ $post->created_at }}</td>
       
        </tr>
</tbody> --}}