<?php

namespace App\Http\Controllers;
use App\Model\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::with('articles')->paginate(10);

    	return response()->json($users, 200);
    }

    public function list()
    {
    	$users = User::select('id', 'name')->get();

    	return response()->json($users, 200);
    }

    public function create(Request $request)
    {
        $request->merge([
            'password' => app('hash')->make($request->password),
        ]);

    	User::create($request->all());
    
    	return response()->json([
    		'message' => 'User successfully created'
    	], 201);
    }

    public function update(Request $request, $id)
    {
        if ($request->password) {
            $request->merge([
                'password' => app('hash')->make($request->password),
            ]);
        } else {
            unset($request['password']);
        }

    	User::find($id)->update($request->all());

    	return response()->json([
    		'message' => 'User successfully updated'
    	], 200);
    }

    public function delete($id)
    {
        if ($id == 1) {
            return response()->json([
                'message' => "Default user can't be deleted"
            ]);
        }

        $user = User::find($id);
        $user->articles()->update(['user_id' => 1]);
    	$user->delete();

    	return response()->json([
    		'message' => 'User has been deleted'
    	]);
    }
}
