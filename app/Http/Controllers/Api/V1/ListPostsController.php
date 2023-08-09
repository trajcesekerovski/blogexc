<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ListPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listposts($id=null)
    {
        return $id ? Post::find($id): Post::all();
    }
}
