@extends('layouts.dashboard')

@section('title', 'Edit Blog')

@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Blog</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
                <li class="breadcrumb-item active">Edit Blog Category</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header bg-light">
                <h2 class="card-title"><i class="fas fa-edit"></i> Edit Blog</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('blog.update', $blog) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @include('blog.form')
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fas fa-save"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $('#blog_category_id').select2({
                theme: 'bootstrap4'
            })

            $('#description').summernote({
                placeholder: 'Enter blog description here.',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['style','ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });

            $('#photo').change(function(e) {
                $(this).next('.custom-file-label').html(e.target.files[0].name);

                $('#image-preview').removeClass('d-none');

                $('#image-preview').attr('src', URL.createObjectURL(e.target.files[0]));

            });
        });
    </script>
@endsection
