@extends('layouts.main')

@section('title')
    @parent Новость
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if (!$news)
        <p>Нет новости с таким id</p>
    @else
        @if(!$news['isPrivate'])

            <h1> {{$news['title']}}</h1>
            <p>{{$news['text']}}</p>

        @else
            <a href="">Зарегистрируйтесь для просмотра новости</a
        @endif
    @endif
@endsection
