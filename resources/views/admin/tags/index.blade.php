@extends('layouts.admin')
@section('title')
    Tags
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
                <h3>Tags Table</h3>
                <a href="{{ route('admin.tags.create') }}" class="btn btn-primary ml-auto">Create Tags</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name_uz</th>
                                <th>Name_ru</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tag->name_uz }}</td>
                                    <td>{{ $tag->name_ru }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Show</a>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Pagination --}}

            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        {{-- {{ $categories->links() }} --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
