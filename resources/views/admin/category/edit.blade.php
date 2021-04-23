@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h4>Edit Category</h4>
                <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ $category->name }}" name="cate_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="cate_description" value="{{ $category->description }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="cate_image" value="{{$category->image}}">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" {{ $category->status == '1' ? 'checked':'' }} name="status" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Hide</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
