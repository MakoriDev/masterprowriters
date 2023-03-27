<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $blogCategory->name) }}" placeholder="Enter blog category name.">
    @error('name')
        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
    @enderror
</div>
