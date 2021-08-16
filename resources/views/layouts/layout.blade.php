<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/main.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script defer src="public/assets/bootstrap-5/js/bootstrap.min.js"></script>
    <script defer src="public/assets/js/jquery.maskedinput.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=4f53e27a-e7ed-460c-831a-04cfab98fd96&lang=ru_RU" type="text/javascript">
    <script type="text/javascript" src="//api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU"></script>
    
    <script defer>
        //Код jQuery, установливающий маску для ввода телефона элементу input
        //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
        $(function(){
        //2. Получить элемент, к которому необходимо добавить маску
        $("#phone").mask("8(999) 999-9999");
        });
        
    </script>
   
    <title>@yield('title')</title>
</head>
<body>
    
    <nav class="header navbar navbar-expand-lg navbar-dark bg-dark py-4">
      <div class="container ">
        <div class="logo">
        <a class="navbar-brand" href="/">ShafikovAirlines</a>
        <div class="top_header_text hidden-sm pull-left" style="color: #fff;">
						Только быстрые<br> и безопасные<br> перелеты				</div></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Расписание </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('About') }}">О компании</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            Dropdown href="#">Пассажирам</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ Route('passgers') }}">Авиакассы</a></li>
                <li><a class="dropdown-item" href="{{ Route('registration') }}">Регистрация на рейсы</a></li>
                <li><a class="dropdown-item" href="{{ Route('luggage') }}">Перевозка багажа</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><p class="dropdown-item" style="font-weight: 600; margin-bottom: 5px">Помощь</p></li>
                <li><a class="dropdown-item" href="{{ Route('delay') }}">Задержали рейс</a></li>
                <li><a class="dropdown-item" href="{{ Route('questions') }}">Частозадаваемые вопросы</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ Route('contacts') }}">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')

    <footer class="bg-dark">
      <div class="container">
      <div class="row justify-content-center">
      <a class="navbar-brand d-flex justify-content-center" href="#">ShafikovAirlines</a>
      </div>
      <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="footer-links d-flex flex-wrap justify-content-center"> 
                  <div class="footer-copyright ">2021 © Все права защищены.</div>                     
                 </div>
            </div>
        </div>
      </div>
    </footer>
</body>
</html>