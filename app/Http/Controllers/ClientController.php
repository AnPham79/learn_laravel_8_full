<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $posts->json();
    }

    public function addPost()
    {
        $posts = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New post title',
            'body' => 'New post description'
        ]);
        return $posts->json();
    }

    public function updatePost($id)
    {
        $posts = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, [
            'userId' => 1,
            'title' => 'New post title update',
            'body' => 'New post description update'
        ]);
        return $posts->json();
    }

    public function deletePost($id)
    {
        $posts = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $posts->json();
    }
}
