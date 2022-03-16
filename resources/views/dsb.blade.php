@extends('layout')
@section('main_content')
<br><br>
<h1>Добро пожаловать</h1>
<p>Lorem ipsum dolor sit Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, exercitationem natus dolorem sapiente ex voluptatum perspiciatis suscipit in dolor enim aut quibusdam dolores, doloremque eius earum a nostrum ea officia? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure excepturi voluptatem cum dolor debitis ipsam laboriosam nemo dolore, reiciendis quis error iusto, nostrum maxime cupiditate. Nobis laboriosam a earum quia?
Quas asperiores vero minus est laboriosam provident culpa cumque aliquid sit at totam aut excepturi, blanditiis obcaecati maiores ducimus deleniti assumenda repellat debitis in commodi temporibus quos qui similique. Veniam?
Autem rem repellat quidem mollitia, dolorum, odit quae assumenda sunt voluptates porro eius quaerat! Officia, quisquam rem at quis cum soluta, enim facilis minus expedita repellat repudiandae, quod fugit sint! amet consectetur adipisicing elit. Facilis ipsa dicta incidunt. Aperiam nihil delectus maiores? Quaerat quia blanditiis molestiae est, provident magnam tempora repellendus, atque, qui dolores incidunt veritatis.</p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, saepe doloribus eius nihil numquam nesciunt delectus sint quas ipsam quo illo aspernatur ipsa natus reprehenderit itaque qui corporis impedit exercitationem.
Quam reiciendis distinctio ducimus! Fugit sint dolorem provident dolore enim iusto, ad commodi repudiandae quam maxime minima? Quod doloribus impedit tenetur omnis alias esse, illo architecto dolor, quia officiis cum.
Omnis inventore corporis alias! Similique nemo amet ut aperiam, molestiae beatae. Excepturi harum labore aperiam tenetur ratione, dolorum modi, ea animi, impedit voluptatem vel unde explicabo deserunt ipsum sequi dignissimos.
Earum reprehenderit repellendus dicta nemo nobis fugiat soluta, consequuntur assumenda quasi distinctio magni culpa ad voluptatem perferendis maxime quibusdam atque enim accusantium sed laborum dolorum alias debitis dolor. Voluptates, rerum.
Asperiores, odio ipsum. Minima, praesentium, eveniet repudiandae ex fugiat, soluta ipsam accusantium dignissimos assumenda voluptate aliquam consequuntur animi optio culpa! Suscipit animi aperiam itaque asperiores quod? Mollitia quod repudiandae provident!
Nemo excepturi harum quidem, optio quas odit ipsa a, minima ut at voluptatibus aut maxime. Voluptates, dolores molestias cum nihil animi incidunt, mollitia rem non praesentium veniam impedit voluptatum sint.
Quidem earum velit ducimus, accusamus expedita distinctio maxime sunt quae laudantium dolorem quas quo atque voluptas praesentium. Labore quisquam sequi, deleniti dolore dolorem molestias, delectus recusandae, neque esse hic at?
Magni recusandae, ad laborum fuga id assumenda impedit voluptate earum quam temporibus ea, omnis in ullam? Facilis harum ipsam delectus eaque inventore illo in itaque, perspiciatis reprehenderit sint, tempore beatae.
Laudantium accusamus veniam sed, numquam fuga tenetur officia ipsam earum doloremque veritatis expedita ullam quasi placeat obcaecati debitis nemo ad beatae totam tempore ratione? Laudantium libero exercitationem maiores necessitatibus fugiat.
Et, itaque commodi qui perferendis corrupti laboriosam beatae numquam, suscipit dicta maiores provident velit possimus quae libero asperiores minima. Quas nostrum ab odio labore? Porro accusamus reprehenderit doloremque distinctio necessitatibus.
<br><br><br><br>
@endsection
@section('header')

<li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('dsb') }}" class="btn btn-warning">Проекты</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
        <li class="nav-item"><a href="{{ route('form') }}" class="nav-link">Отзывы</a></li>
        

@endsection
@section('title')
Проекты
@endsection



@section('sass')
@parent
<button type="submit" class='btn btn-light'>   INFO   </button>
@endsection