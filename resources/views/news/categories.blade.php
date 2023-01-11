@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse ($categories as $category)
        <a href="{{route('news.categories.show', $category['slug'])}}">
            <h2>{{$category['title']}}</h2>
        </a>
    @empty
        <p>Нет категорий</p>
    @endforelse
@endsection
