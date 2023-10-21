@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="/posts/{{ $post->id }}/edit">编辑</a>
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">删除</button>
    </form>
    <a href="/posts">返回文章列表</a>
@endsection
