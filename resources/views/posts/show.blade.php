@extends('layouts.app')

@section('content')
{{--    这里用于显示文章，提供编辑和删除按钮，使用bootstarp的卡片美化--}}
    <div class="card">
        <div class="card-header">{{ $post->title }}</div>

        <div class="card-body">
            {!! nl2br($post->content) !!}

            <div class="mt-3">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">编辑</a>
                <form method="post" action="{{ route('posts.destroy', $post) }}" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">删除</button>
                </form>
            </div>
        </div>
    </div>

@endsection
