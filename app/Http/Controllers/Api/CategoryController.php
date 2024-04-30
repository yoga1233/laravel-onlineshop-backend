<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // get all categories
        $categories = Category::all();
        return response()->json([
            'message' => 'Success',
            'data' => $categories
        ], 200);
    }
}