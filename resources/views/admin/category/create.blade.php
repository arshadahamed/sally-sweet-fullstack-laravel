@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category
                        <a href="{{ url('admin/category/create')}}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status">

                            </div>

                            <div class="col-md-12">
                                <h4>SEO Tags</h4>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title">

                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keywords</label>
                                <textarea class="form-control" name="meta_keywords" rows="3"></textarea>

                            <div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="3"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary fload-end">Save</button>
                            </div>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

