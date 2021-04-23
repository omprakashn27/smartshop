@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4 class="heading">Category
                <a href="{{ url('admin/add-category') }}" class="btn float-end btn-primary">Add Category</a>
                </h4>

                @php if(session('status')) { echo session('status'); } @endphp
                <hr>

                <div class="card shadow">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                <tr>
                                    <td><h6>{{ $item->id }}</h6></td>
                                    <td><h6>{{ $item->name }}</h6></td>
                                    <td><p>{{ $item->description }} </p></td>
                                    <td><img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="" style="height: 80px"></td>
                                    <td>
                                        <a href="{{ url('admin/cate-edit/'.$item->id) }}" class="btn btn-primary">Edit </a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
