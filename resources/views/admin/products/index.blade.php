@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>

            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Products
                        <a href="{{ url('admin/products/create')}}" class="btn btn-primary btn-sm text-white float-end">
                            Add Products
                        </a>
                    </h3>

                </div>
                <div class="card-body">
                    <table class="table table-bordered striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Original Price</th>
                                <th>Selling Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr class="text-center">
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if($product->category)
                                            {{ $product->category->name }}
                                        @else
                                            <span class="text-danger">No Category Found</span>
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->original_price }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1' ? 'Hidden':'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success btn-sm text-white">Edit</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Are tou Sure, Do you want to delete this product? ')" class="btn btn-danger btn-sm text-white">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Products Found</td>
                                    </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
