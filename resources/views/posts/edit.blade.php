@extends('layouts.app')

@section('content')
    <h1>编辑文章</h1>
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')
        <label for="title">标题：</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">内容：</label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <button type="submit">更新文章</button>
    </form>
    <a href="/posts/{{ $post->id }}">取消</a>
@endsection
