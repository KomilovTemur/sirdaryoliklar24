@extends('layouts.admin')
@section('title')
    Show Categories
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Show</h3>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary  ml-auto">Back</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>Ism_uz</th>
                                <th>Ism_ru</th>
                                <th>Slug</th>
                                <th>Created_at</th>
                            </tr>

                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name_uz }}</td>
                                <td>{{ $category->name_ru }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    @if ($category->created_at)
                                        {{ $category->created_at->format('Y-d-m,  H:m') }}
                                    @else
                                        Vaqti kiritilmagan
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
