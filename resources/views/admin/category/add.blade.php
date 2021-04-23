@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h4>Add Category</h4>
                <form action="{{ url('admin/insert-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="cate_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="cate_description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="cate_image">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Hide</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
