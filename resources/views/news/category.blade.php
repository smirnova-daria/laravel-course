@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if($news)
        <h1>Новости категории {{$category}}</h1>
        @forelse($news as $item)
            <h2>{{$item['title']}}</h2>
            <a href="{{route('news.show', $item['id'])}}">Подробнее..</a>
        @empty
            Нет новостей
        @endforelse
    @else
        Нет такой категории
    @endif
@endsection
