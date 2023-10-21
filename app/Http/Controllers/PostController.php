<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Redirector;

class PostController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.create');
    }

    public function store(Request $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/posts')->with('success', '文章创建成功！');
    }

    public function show($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/posts')->with('success', '文章更新成功！');
    }

    public function destroy($id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success', '文章删除成功！');
    }
}
