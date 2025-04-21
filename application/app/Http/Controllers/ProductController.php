<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Show the product dashboard
     *
     * @return \Illuminate\View\View
     */
    public function dashboard() {
        // get all the products
        $products = Product::all();
        
        return view('admin.products.dashboard')->with('products', $products);
    }

    /**
     * Show the create product form
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.products.create')->with('product_count', Product::count());
    }

    /**
     * Add a new product
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'selling_price' => 'required|numeric|min:0',
            'vendor_price' => 'required|numeric|min:0',
            'in_stock' => 'required|integer|min:0',
            'category_id' => 'nullable|string',
            'brand_id' => 'nullable|string',
            'vendor_id' => 'nullable|string',
            'status' => 'required|string|in:active,inactive,discontinued',
            // Add other fields as necessary
        ]);

        // create the product
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku.'-'.env('STORE_ID', 'UNK').'-'.Product::count() + 1;
        $product->description = $request->description;
        $product->selling_price = $request->selling_price;
        $product->vendor_price = $request->vendor_price;
        $product->in_stock = $request->in_stock;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->vendor_id = $request->vendor_id;
        // Add other fields as necessary
        $product->added_by = auth()->user()->id;
        $product->updated_by = auth()->user()->id;
        $product->created_at = now();
        $product->updated_at = now();
        $product->save();
        // redirect to the dashboard with success message
        return redirect()->route('admin.products.dashboard')->with('success', 'Product added successfully');
    }

    /**
     * Edit a product
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request) {
        $product = Product::find($request->id);
        if (!$product) {
            return redirect()->route('admin.products.dashboard')->with('error', 'Product not found');
        }
        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update a product
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'selling_price' => 'required|numeric|min:0',
            'vendor_price' => 'required|numeric|min:0',
            'in_stock' => 'required|integer|min:0',
            'category_id' => 'nullable|string',
            'brand_id' => 'nullable|string',
            'vendor_id' => 'nullable|string',
            'status' => 'required|string|in:active,inactive,discontinued',
            // Add other fields as necessary
        ]);

        // update the product
        $product = Product::find($request->id);
        if (!$product) {
            return redirect()->route('admin.products.dashboard')->with('error', 'Product not found');
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->selling_price = $request->selling_price;
        $product->vendor_price = $request->vendor_price;
        $product->in_stock = $request->in_stock;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->vendor_id = $request->vendor_id;
        $product->status = $request->status;
        // Add other fields as necessary
        $product->updated_by = auth()->user()->id;
        $product->updated_at = now();

        $product->update();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.products.dashboard')->with('success', 'Product updated successfully');
    }

    /**
     * Delete a product
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request) {
        // delete the product
        $product = Product::find($request->id);
        if (!$product) {
            return redirect()->route('admin.products.dashboard')->with('error', 'Product not found');
        }
        $product->delete();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.products.dashboard')->with('success', 'Product deleted successfully');
    }
}
