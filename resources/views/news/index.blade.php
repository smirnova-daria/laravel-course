@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="mt-6 bg-gray-100 shadow-sm rounded-lg divide-y">
    <h1>Новости</h1>
    @forelse ($news as $item)
        <h2>{{$item['title']}}</h2>
        @if (!$item['isPrivate'])
            <a href="{{ route('news.show', $item['id']) }}">Подробнее</a>
        @endif
        <br>
    @empty
        <p>Нет новостей</p>
        @endforelse
    </div>
@endsection
