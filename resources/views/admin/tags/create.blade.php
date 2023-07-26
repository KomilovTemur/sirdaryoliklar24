@extends('layouts.admin')

@section('title')
    Create Tags
@endsection

@section('content')
    <div class="col-12 col-md-6 col-lg-7">
        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Add Tags</h4>
                </div>
                <div class="card-body">
                    {{-- Add Category Name --}}
                    <div class="form-group">
                        <label>Name(Uz)</label>
                        <input type="text" class="form-control" name="name_uz">
                        @error('name_uz')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Name(RU)</label>
                        <input type="text" class="form-control" name="name_ru">
                        @error('name_ru')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Slug --}}
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                </div>
        </form>
    </div>
@endsection
