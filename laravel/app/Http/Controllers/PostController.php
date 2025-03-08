<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            "title" => "required",
            "body" => "required",
        ]);
        $incomingFields["title"] = $request->title;
        $incomingFields["body"] = $request->body;
        $incomingFields["user_id"] = auth()->id();

        Post::create($incomingFields);
    }
}
