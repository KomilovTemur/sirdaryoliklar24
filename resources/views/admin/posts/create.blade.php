@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('title')
    Create Posts
@endsection

@section('content')
    <div class="col-12 col-md-6 col-lg-7">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Add Posts</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Category Id</label>
                        <input type="text" class="form-control" name="category_id" value="{{ old('category_id') }}">
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title(Uz)</label>
                        <input type="text" class="form-control" name="title_uz" value="{{ old('title_uz') }}">
                        @error('title_uz')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Title(Ru)</label>
                        <input type="text" class="form-control" name="title_ru" value="{{ old('title_ru') }}">
                        @error('title_ru')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Body uz & Ru --}}
                    <div class="form-group">
                        <label>Body(Uz)</label>
                        <textarea type="text" class="form-control ckeditor" name="body_uz" value="{{ old('body_uz') }}"></textarea>
                        @error('body_uz')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Body(Ru)</label>
                        <textarea type="text" class="form-control ckeditor" name="body_ru" value="{{ old('body_ru') }}"></textarea>
                        @error('body_ru')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Description uz && Ru --}}
                    <div class="form-group">
                        <label>Qisqacha post haqida tafsilot (UZ)</label>
                        <input type="text" class="form-control" name="description_uz" value="{{ old('description_uz') }}">
                        @error('description_uz')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Qisqacha post haqida tafsilot (RU)</label>
                        <input type="text" class="form-control" name="description_ru" value="{{ old('description_ru') }}">
                        @error('description_ru')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Image --}}
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Category Selected --}}
                    <div class="form-group">
                        <label>Category Selected</label>
                        <select name="Category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Tags Selected --}}
                    <div class="form-group">
                        <label>Tags Selected</label>
                        <select name="tags[]" id="" class="form-control select2" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Is Special Posts 0 or 1 --}}
                    <div class="form-group">
                        <div class="control-label">Is Special</div>
                        <label class="custom-switch mt-2">
                          <input type="checkbox" value="1" name="is_special" class="custom-switch-input">
                          <span class="custom-switch-indicator"></span>
                        </label>
                      </div>
                    {{-- Slug --}}
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                    </div>
                    {{-- View --}}
                    {{-- <div class="form-group">
                        <label>View</label>
                        <input type="number" class="form-control" name="view" value="{{ old('view') }}">
                    </div> --}}
                    {{-- Meta Title,Description,keywords --}}
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_description"
                            value="{{ old('meta_description') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                </div>
        </form>
    </div>
@endsection


@section('js')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    {{-- <script>
        // $('textarea').ckeditor();
        $('.ckeditor').ckeditor(); // if class is prefered.
        </script> --}}

    <script type="text/javascript">
        CKEDITOR.replace('body_uz', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('body_ru', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>


    <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
@endsection
