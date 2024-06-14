<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $limit = $request->query('limit', 5);
        $category = $request->query('category', null);
        $searchQuery = $request->query('q');

        $query = Post::query();

        if ($searchQuery) {
            $query->where('title', 'LIKE', '%' . $searchQuery . '%');
        }

        if ($category) {
            $query->where('category_id', $category);
        }

        $posts = $query->with('user')->paginate($limit);

        return response()->json($posts);
    }

    public function show($id): JsonResponse
    {
        $post = Post::query()->with('user')->find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($post);
    }
}
