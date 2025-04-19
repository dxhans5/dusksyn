@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
        @section('title')
            Product Dashboard
        @show
        </h1>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Description</th>
                    <th>Selling Price</th>
                    <th>Vendor Price</th>
                    <th>In Stock</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Vendor</th>
                    <th>Image Collection</th>
                    <th>Status</th>
                    <th>Added By</th>
                    <th>Updated By</th>
                    <th>Deleted By</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ number_format($product->selling_price, 2) }}</td>
                        <td>${{ number_format($product->vendor_price, 2) }}</td>
                        <td>{{ $product->in_stock }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->brand_id }}</td>
                        <td>{{ $product->vendor_id }}</td>
                        <td>{{ $product->image_collection_id }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->added_by }}</td>
                        <td>{{ $product->updated_by }}</td>
                        <td>{{ $product->deleted_by }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection