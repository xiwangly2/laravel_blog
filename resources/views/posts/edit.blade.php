@extends('layouts.app')

@section('content')
    <h1>编辑文章</h1>
{{--    创建使用bootstarp美化的表单--}}
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">标题</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">内容</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $post->content) }}</textarea>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
@endsection
