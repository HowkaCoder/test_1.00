@extends('layout')
@section('main_content')
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

<br><br><br>
@endsection
@section('header')

<li class="nav-item"><a href="{{ route('home')  }}" class="btn btn-warning" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('dsb')  }}" class="nav-link">Проекты</a></li>
        <li class="nav-item"><a href="{{ route('about')  }}" class="nav-link">О нас</a></li>
        <li class="nav-item"><a href="{{ route('form')  }}" class="nav-link">Отзывы</a></li>
@endsection


@section('title')
Главная
@endsection



@section('sass')
@parent
<button type="submit" class='btn btn-danger'>   INFO   </button>
@endsection