@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>文章列表</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">创建文章</a>

        <table class="table">
            <thead>
            <tr>
                <th>标题</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article) }}" class="btn btn-info">查看</a>
                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">编辑</a>
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('确定删除吗？')">删除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
