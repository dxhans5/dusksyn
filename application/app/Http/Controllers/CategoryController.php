<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Show the category dashboard
     *
     * @return \Illuminate\View\View
     */
    public function dashboard() {
        // get all the categories
        $categories = Category::all();
        
        return view('admin.categories.dashboard')->with('categories', $categories);
    }

    /**
     * Show the create category form
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.categories.create');
    }

    /**
     * Add a new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'required|nullable',
            'status' => 'required|string|in:active,inactive,discontinued',
            // Add other fields as necessary
        ]);

        // create the category
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        // Add other fields as necessary
        $category->added_by = auth()->user()->id;
        $category->updated_by = auth()->user()->id;
        $category->created_at = now();
        $category->updated_at = now();
        $category->save();
        // redirect to the dashboard with success message
        return redirect()->route('admin.categories.dashboard')->with('success', 'Category added successfully');
    }

    /**
     * Edit a category
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request) {
        $category = Category::find($request->id);
        if (!$category) {
            return redirect()->route('admin.categories.dashboard')->with('error', 'Category not found');
        }
        return view('admin.categories.edit')->with('category', $category);
    }

     /**
     * Update a category
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|integer',
            'status' => 'required|string|in:active,inactive,discontinued',
            // Add other fields as necessary
        ]);

        // update the category
        $category = Category::find($request->id);
        if (!$category) {
            return redirect()->route('admin.categories.dashboard')->with('error', 'Category not found');
        }
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        // Add other fields as necessary
        $category->updated_by = auth()->user()->id;
        $category->updated_at = now();

        $category->update();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.categories.dashboard')->with('success', 'Category updated successfully');
    }

    /**
     * Delete a category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request) {
        // delete the category
        $category = Category::find($request->id);
        if (!$category) {
            return redirect()->route('admin.categories.dashboard')->with('error', 'Category not found');
        }
        $category->delete();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.categories.dashboard')->with('success', 'Category deleted successfully');
    }
}