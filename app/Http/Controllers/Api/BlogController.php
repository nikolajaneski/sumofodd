<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index() {
        $blogs = Blog::all();

        return response()->json([
            'data' => $blogs,
            'status' => 'success'
        ], 200);
    }

    public function show($id) {
        $blog = Blog::find($id);

        if(!$blog) {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found'
            ], 404);
        }

        return response()->json([
            'data' => $blog,
            'status' => 'success'
        ], 200);
    }


    public function calculate( Request $request ) {
        $data = Blog::calculate($request);
        
        return response()->json([
            'data' =>  $data,
            'status' => 'success'
        ], 200);
    }
}
