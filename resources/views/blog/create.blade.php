@extends('layouts.dashboard')

@section('title', 'Add Blog')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Blog</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-cart-plus"></i> Add Blog</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h2 class="card-title"><i class="fas fa-plus-circle"></i> Add Blog</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('blog.form')
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-save"></i> Save
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
