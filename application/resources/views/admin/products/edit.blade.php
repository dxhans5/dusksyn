@extends('admin.layout')

<div class="container">
    <h1>Edit Product</h1>

    <form action="{{route('admin.products.update', $product->id)}}" method="POST">
        @csrf

        <label for ="name">name:</label><br>
        <input type="text" id="name" name="name" value="{{$product->name}}" required><br><br>

        <label for ="sku">sku:</label><br>
        <input type="text" id="sku" value="{{$product->sku}}" disabled><br><br>

        <label for ="description">description:</label><br>
        <input type="text" id="description" name="description" value="{{$product->description}}"><br><br>

        <label for ="selling_price">selling_price:</label><br>
        <input type="text" id="selling_price" name="selling_price" value="{{$product->selling_price}}"><br><br>

        <label for ="vendor_price">vendor_price:</label><br>
        <input type="text" id="vendor_price" name="vendor_price" value="{{$product->vendor_price}}"><br><br>

        <label for ="in_stock">in_stock:</label><br>
        <input type="text" id="in_stock" name="in_stock" value="{{$product->in_stock}}"><br><br>

        <label for ="category_id">category_id:</label><br>
        <input type="text" id="category_id" name="category_id" value="{{$product->category_id}}"><br><br>

        <label for ="brand_id">brand_id:</label><br>
        <input type="text" id="brand_id" name="brand_id" value="{{$product->brand_id}}"><br><br>

        <label for ="vendor_id">vendor_id:</label><br>
        <input type="text" id="vendor_id" name="vendor_id" value="{{$product->vendor_id}}"><br><br>

        <button type="submit" class="btn btn-primary">Edit Product</button>
    </form>
</div>