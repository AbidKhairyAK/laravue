<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::with(['user', 'categories'])->paginate(10);

    	return response()->json($articles, 200);
    }

    public function create(Request $request)
    {
    	$request->merge([
            'user_id' => 1,
            'slug' => Str::slug($request->title),
    		'categories' => str_replace(" ", "", explode(',', (trim($request->categories, "[]")))),
    	]);

    	$article = Article::create($request->all());
    	$article->categories()->sync($request->categories);

    	return response()->json([
            'message' => 'Article successfully created'
    	], 201);
    }

    public function update(Request $request, $id)
    {
        $categories = false;

    	$request->merge([
    		'user_id' => 1,
            'slug' => Str::slug($request->title),
            'categories' => str_replace(" ", "", explode(',', (trim($request->categories, "[]")))),
    	]);

    	$article = Article::find($id)->update($request->all());
        $article->categories()->sync($request->categories);

    	return response()->json([
    		'message' => 'Article successfully updated'
    	], 200);
    }

    public function delete($id)
    {
    	$article = Article::find($id);
        $article->categories()->detach();
        $article->delete();

    	return response()->json([
    		'message' => 'Article has been deleted' 
    	]);
    }
}
