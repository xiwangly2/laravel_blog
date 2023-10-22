@extends('layouts.app')

@section('content')
{{--    这里用于显示文章，提供编辑和删除按钮--}}
    <div class="mb-3">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">编辑</a>
        <form style="display: inline-block" method="post" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">删除</button>
        </form>
    </div>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
@endsection
