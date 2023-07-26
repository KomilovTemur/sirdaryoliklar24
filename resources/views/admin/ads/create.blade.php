@extends('layouts.admin')

@section('title')
    Create ADS
@endsection

@section('content')
    <div class="col-12 col-md-6 col-lg-7">
        <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Add ADS</h4>
                </div>
                <div class="card-body">
                    {{-- TITLE TOP --}}
                    <div class="form-group">
                        <label>TITLE (Top)</label>
                        <input type="text" class="form-control" name="title_top" value="{{ old('title_top') }}">
                        @error('title_top')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Url top --}}
                    <div class="form-group">
                        <label>URL (Top)</label>
                        <input type="text" class="form-control" name="url_top" value="{{ old('url_top') }}">
                        @error('url_top')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Image TOP --}}
                    <div class="form-group">
                        <label>Image (Top)</label>
                        <input type="file" class="form-control" name="img_top" value="{{ old('img_top') }}">
                        @error('img_top')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- TITLE SIDEBAR --}}
                    <div class="form-group">
                        <label>TITLE (SIDEBAR)</label>
                        <input type="text" class="form-control" name="title_sidebar" value="{{ old('title_sidebar') }}">
                        @error('title_sidebar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Url SIDEBAR --}}
                    <div class="form-group">
                        <label>URL (SIDEBAR)</label>
                        <input type="text" class="form-control" name="url_sidebar" value="{{ old('url_sidebar') }}">
                        @error('url_sidebar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Image TOP --}}
                    <div class="form-group">
                        <label>Image (SIDEBAR)</label>
                        <input type="file" class="form-control" name="img_sidebar" value="{{ old('img_sidebar') }}">
                        @error('img_sidebar')
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



