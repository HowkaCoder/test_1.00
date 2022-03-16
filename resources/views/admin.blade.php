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
<form action="{{route('admin-form')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" class='form-control' placeholder='Введите название темы: '><br>
    <input type="text" name="text" id="text" class='form-control' placeholder='Введите text: '><br>
    <textarea name="subject" id="subject" class='form-control' cols="6" rows="6"></textarea><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>

<br>

<h1>Все отзывы</h1>


@endsection


@section('header')

<li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('dsb') }}" class="nav-link">Проекты</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
        <li class="nav-item"><a href="{{ route('form') }}" class="nav-link">Отзывы</a></li>
        <li class="nav-item"><a href="{{ route('admin') }}" class="btn btn-warning">Admin</a></li>
@endsection


@section('title')
Admin
@endsection
