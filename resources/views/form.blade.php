@extends('layout')
@section('main_content')
@if($errors -> any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success" >
    {{session('success')}}
</div>
@endif
<h1>Форма добавления отзыва</h1>
<form action="{{route('contact-form')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" class='form-control' placeholder='Введите имя: '><br>
    <input type="email" name="email" id="email" class='form-control' placeholder='Введите email: '><br>
    <textarea name="subject" id="subject" class='form-control' cols="6" rows="6"></textarea><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
<br>
<h1>Все отзывы</h1>
@foreach($reviews as $el)
    <div class="alert alert-warning">
        <h3>{{$el->name}}</h3>
        <b>{{$el->email}}</b>
        <p>{{$el->subject}}</p>
    </div>
@endforeach
@endsection


@section('header')

<li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('dsb') }}" class="nav-link">Проекты</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
        <li class="nav-item"><a href="{{ route('form') }}" class="btn btn-warning">Отзывы</a></li>
@endsection


@section('title')
Отзывы
@endsection


@section('sass')
@parent
<button type="submit" class='btn btn-secondary'>   INFO   </button>
@endsection