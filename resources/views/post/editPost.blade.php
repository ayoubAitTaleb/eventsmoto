<form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
    @csrf
    {{ method_field('patch') }}
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group mb-2">
                <label for="blog-edit-title">Title</label><br>
                <input name="title" type="text" class="form-control"  />
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group mb-2">
                <label for="blog-edit-category">Category</label><br>
                <select name="category">
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Quote">Quote</option>
                    <option value="Video">Video</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group mb-2">
                <label for="blog-edit-slug">Slug</label><br>
                <input name="slug" type="text" />
            </div>
        </div>
        <div class="col-md-6 col-12">                
            <label>Status</label><br>
            <select name="status" class="form-control">
                <option value="2">Published</option>
                <option value="1">Pending</option>
                <option value="0">Draft</option>
            </select>
        </div>
        <div class="col-12">
            <div class="form-group mb-2">
                <label>Content</label><br>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-2">
                <label>Image</label><br>
                <input type="file" name="image">
            </div>
        </div>
        <div class="col-12 mt-50">
            <button type="submit" class="btn btn-primary mr-1">Save </button><br>
        </div>
    </div>
</form>
