<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\detail_viewer_post;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PostController extends Controller
{
    public function about()
    {
        return view('about', []);
    }

    public function index(Request $request)
    {
        // dd($request->query('sort'));
        if ($request->query('sort') == 'view') {
            $posts = Post::orderBy('viewedTimes', 'desc')->filter(request(['category', 'search']))->simplePaginate(16);
        } else if ($request->query('sort') == 'latest') {
            $posts = Post::latest()->filter(request(['category', 'search']))->simplePaginate(16);
        } else if ($request->query('sort')) { // if sort exist but not by view or latest
            abort(404, "Halaman tidak ditemukan");
        } else { // default sorting
            $posts = Post::latest()->filter(request(['category', 'search']))->simplePaginate(16);
        }
        return view('index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post, Request $request)
    {
        // dd($request);
        // dd($request->session()->getId());
        // increment the value of viewedTimes if the a user / guest open the page on a different session
        $detailViewerTable = detail_viewer_post::where(
            'sessionIdAndPostId',
            $request->session()->getId() . $post->id
        )->first();
        if (!$detailViewerTable) {

            $detailViewerTable = detail_viewer_post::create(
                ["sessionIdAndPostId" => $request->session()->getId() . $post->id]
            );
            $post->increment('viewedTimes', 1);
        }
        return view('show', [
            'post' => $post,
            'user' => User::find($post->user_id)
        ]);
    }
    public function getNew()
    {
        return view('new', []);
    }
    public function submitNew(Request $request)
    // options to get the request
    // option 1 : Request $request in params -> mode :dependencies injection 
    // option 2 : directly use request() inside function without params
    {
        // dd($request);

        $formFields = $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price' => ['required', 'numeric'],
        ]);
        $formFields['user_id'] = auth()->id();

        if ($request->file('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $formFields['images'][$i] =  $request->file('images')[$i]->storeOnCloudinary('thriftandstash')->getSecurePath();
            }
        }

        $post = Post::create($formFields);

        return redirect("/posts/" . $post->id)->with('success', 'Iklan berhasil dibuat!');
    }
    public function getEdit(Post $post)
    {
        // making sure logged in user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, "Anda tidak memiliki hak untuk itu!");
        };

        return view('edit', [
            'post' => $post
        ]);
    }
    public function submitEdit(Request $request, Post $post)
    {
        // making sure logged in user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, "Anda tidak memiliki hak untuk itu!");
        };
        $oldImages = $post['images'];

        // dd($request->file('images'));
        $formFields = $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price' => ['required', 'numeric'],
        ]);
        $formFields['user_id'] = auth()->id();
        if ($request->file('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $formFields['images'][$i] =  $request->file('images')[$i]->storeOnCloudinary('thriftandstash')->getSecurePath();
            }
        }

        $post->update($formFields);
        if ($oldImages) {
            $post['images'] = array_merge($post['images'], $oldImages);
        }
        $post->save();
        return redirect("/posts/" . $post->id)->with('success', 'Iklan berhasil diedit!');
    }
    public function delete(Post $post)
    {
        // making sure logged in user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, "Anda tidak memiliki hak untuk itu!");
        };

        $post->delete();
        return redirect('/posts')->with('success', 'Iklan berhasil dihapus!');
    }
}
