@extends('layouts.app')

@section('content')
    <h1>创建新文章</h1>
    <form method="post" action="/posts">
        @csrf
        <label for="title">标题：</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">内容：</label>
        <textarea name="content" id="content"></textarea>
        <br>
        <button type="submit">创建文章</button>
    </form>
@endsection
