<div class="row">
    <div class="form-group col-md-6">
        <label for="blog_category_id">Category: <span class="text-danger">*</span></label>
        <select name="blog_category_id" id="blog_category_id"
            class="form-control @error('blog_category_id') is-invalid @enderror">
            <option value="">Select blog category</option>
            @foreach ($blogCategories as $blogCategory)
                <option value="{{ $blogCategory->id }}"
                    {{ old('blog_category_id', $blog->blog_category_id) == $blogCategory->id ? 'selected' : '' }}>
                    {{ $blogCategory->name }}</option>
            @endforeach
        </select>
        @error('blog_category_id')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="title">Title: <span class="text-danger">*</span></label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $blog->title) }}" placeholder="Enter blog title.">
        @error('title')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="form-group col-md-12">
        <label for="description">Description: <span class="text-danger">*</span></label>
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $blog->description) }}</textarea>
        @error('description')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="photo">Image: @if(Route::is('blog.create'))<span class="text-danger">*</span>@endif</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo">
                <label class="custom-file-label" for="photo">Choose Blog Image</label>
            </div>
        </div>
    </div>
</div>
<img id="image-preview" src="@isset($blog) {{ asset("$blog->photo") }} @endisset"
    alt="Blog Image" width="200" height="200" class="@if (!isset($blog->photo)) d-none @endif img-rounded mb-2" />

{{--
$table->text('description');
$table->string('photo');
$table->foreignId('created_by')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete(); --}}
