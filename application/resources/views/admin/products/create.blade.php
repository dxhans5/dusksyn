@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
            @section('title')
                Create Product
            @show
        </h1>
        
        <form action="{{route('admin.products.add')}}" method="POST">
            @csrf

            <label for ="name">name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for ="sku">sku:</label><br>
            <input type="text" id="sku" name="sku">-{{env('STORE_ID', 'UNK')}}-{{$product_count + 1}}<br><br>

            <label for ="description">description:</label><br>
            <input type="text" id="description" name="description"><br><br>

            <label for ="selling_price">selling_price:</label><br>
            <input type="text" id="selling_price" name="selling_price"><br><br>

            <label for ="vendor_price">vendor_price:</label><br>
            <input type="text" id="vendor_price" name="vendor_price"><br><br>

            <label for ="in_stock">in_stock:</label><br>
            <input type="text" id="in_stock" name="in_stock"><br><br>

            <label for ="category_id">category_id:</label><br>
            <input type="text" id="category_id" name="category_id"><br><br>

            <label for ="brand_id">brand_id:</label><br>
            <input type="text" id="brand_id" name="brand_id"><br><br>

            <label for ="vendor_id">vendor_id:</label><br>
            <input type="text" id="vendor_id" name="vendor_id"><br><br>

            <label for="status">status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="active">active</option>
                <option value="inactive">inactive</option>
                <option value="discontinued">discontinued</option>
            </select><br><br>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection