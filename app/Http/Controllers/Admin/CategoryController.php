<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        $notification = array(
            'message' => 'Category created successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.categories.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        $notification = array(
            'message' => 'Category updated successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.categories.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $message = 'Category deleted successfully.';
        $alert = 'success';

        $hasProjects = $category->projects()->count();
        if ($hasProjects > 0) {
            $message = 'This Category has projects, You have to delete it first.';
            $alert = 'error';
        } else {
            $category->delete();
        }

        $notification = array(
            'message' => $message,
            'alert-type' => $alert
        );
        return redirect()->route('admin.categories.index')->with($notification);
    }
}
