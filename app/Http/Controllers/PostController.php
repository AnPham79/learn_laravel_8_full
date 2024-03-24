<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost()
    {
        $data = DB::table('post')->get();

        return view('post', compact('data'));
    }

    public function createPost()
    {
        return view('form_insert');
    }

    public function storePost(Request $request)
    {
        DB::table('post')->insert([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);

        $data = DB::table('post')->get();

        return view('post', ['data' => $data])->with('notifications', 'Thêm sản phẩm thành công');
    }

    public function showPost($id)
    {
        $data = DB::table('post')->where('id', $id)->first();

        return view('view_post', ['data' => $data]);
    }

    public function editPost($id)
    {
        $data = DB::table('post')->where('id', $id)->first();

        return view('form_edit', ['data' => $data]);
    }

    public function updatePost(Request $request, $id)
    {
        DB::table('post')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        $data = DB::table('post')->get();

        return view('post', ['data' => $data])->with('notifications', 'Sửa sản phẩm thành công');
    }

    public function deletePost($id)
    {
        DB::table('post')->where('id', $id)->delete();

        $data = DB::table('post')->get();

        return view('post', ['data' => $data])->with('notifications', 'Xóa sản phẩm thành công');
    }

    public function innerJoinCaluse() {
        $request = DB::table('user')
        ->join('post', 'user.id', '=', 'post.user_id')
        ->select('user.name', 'post.title', 'post.body')
        ->get();

        return $request;
    }

    public function leftJoinCaluse() {
        $request = DB::table('user')
        ->leftJoin('post', 'user.id', '=', 'post.user_id')
        ->get();

        return $request;
    }

    public function rightJoinCaluse() {
        $request = DB::table('user')
        ->rightJoin('post', 'user.id', '=', 'post.user_id')
        ->get();

        return $request;
    }

    public function getAllProductByModel() {
        $post = Post::all();

        return $post;
    }
}
