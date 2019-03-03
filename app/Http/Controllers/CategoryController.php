<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::with('articles')->paginate(10);

    	return response()->json($categories, 200);
    }

    public function list()
    {
    	$categories = Category::select('id', 'name')->get();

    	return response()->json($categories, 200);
    }

    public function create(Request $request)
    {
    	Category::create($request->all());
    
    	return response()->json([
    		'message' => 'Category successfully created'
    	], 201);
    }

    public function update(Request $request, $id)
    {
    	Category::find($id)->update($request->all());

    	return response()->json([
    		'message' => 'Category successfully updated'
    	], 200);
    }

    public function delete($id)
    {
    	Category::find($id)->delete();

    	return response()->json([
    		'message' => 'Category has been deleted'
    	]);
    }
}
