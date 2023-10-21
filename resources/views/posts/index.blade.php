@extends('layouts.app')

@section('content')
    <h1>文章列表</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    <a href="/posts/create">创建新文章</a>
@endsection
