@extends('layouts.layout')
@section('title') О копмании @endsection

@section('content')
    <!-- *** ПЕРВЫЙ КОНТЕЙНЕР *** -->
<section id="hero" name="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>ShafikovAirlines</h2>
                <h3> Лучший аэропорт челябинска </h3>
            </div>
        </div>

    </div>
    <div class="icons row justify-content-center mr-0">
        <div class="col-md-4 col-xl-2 col-6">
            <div class="icon-box">
            <svg width="4em" height="4em" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.1837 13.9224C13.8647 14.3733 13.9716 14.9973 14.4224 15.3163C14.8733 15.6353 15.4973 15.5284 15.8163 15.0776L14.1837 13.9224ZM15.8072 28.9097C15.4811 28.4639 14.8554 28.3668 14.4097 28.6928C13.9639 29.0189 13.8668 29.6446 14.1928 30.0903L15.8072 28.9097ZM16 19C16.5523 19 17 18.5523 17 18C17 17.4477 16.5523 17 16 17V19ZM9 17C8.44772 17 8 17.4477 8 18C8 18.5523 8.44772 19 9 19V17ZM38 22C38 28.6274 32.6274 34 26 34V36C33.732 36 40 29.732 40 22H38ZM26 10C32.6274 10 38 15.3726 38 22H40C40 14.268 33.732 8 26 8V10ZM15.8163 15.0776C17.9733 12.029 21.9205 10 26 10V8C21.3068 8 16.7354 10.3158 14.1837 13.9224L15.8163 15.0776ZM26 34C22.0054 34 17.9832 31.885 15.8072 28.9097L14.1928 30.0903C16.7465 33.5819 21.369 36 26 36V34ZM16 17H9V19H16V17Z" fill="#fff"/>
            <path d="M16 23C16.5523 23 17 22.5523 17 22C17 21.4477 16.5523 21 16 21V23ZM1 21C0.447715 21 0 21.4477 0 22C0 22.5523 0.447715 23 1 23V21ZM16 21H1V23H16V21Z" fill="#fff"/>
            <path d="M16 27C16.5523 27 17 26.5523 17 26C17 25.4477 16.5523 25 16 25V27ZM6 25C5.44772 25 5 25.4477 5 26C5 26.5523 5.44772 27 6 27V25ZM16 25H6V27H16V25Z" fill="#fff"/>
            <path d="M22.5 20L25.4353 23.4246C25.4711 23.4663 25.5339 23.4713 25.5759 23.4358L32 18" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            <path d="M23 3.5C22.4477 3.5 22 3.94772 22 4.5C22 5.05228 22.4477 5.5 23 5.5V3.5ZM28.5 5.5C29.0523 5.5 29.5 5.05228 29.5 4.5C29.5 3.94772 29.0523 3.5 28.5 3.5V5.5ZM23 5.5H25.75V3.5H23V5.5ZM25.75 5.5H28.5V3.5H25.75V5.5ZM24.75 4.5V8.89921H26.75V4.5H24.75Z" fill="#fff"/>
            <path d="M26 34.5V9.5L34.5 11.5L38.5 17V23L35.5 31L29 34.5H26Z" fill="#fff" fill-opacity="0.15"/>
            </svg>
                <h4><a href="">Быстро</a></h4>
            </div>
        </div><div class="col-md-4 col-xl-2 col-6">
        <div class="icon-box">
        <svg width="4em" height="4em" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <path d="M20 5.02054L8.95522 1.65214L11.5605 12.9014L20 5.02054ZM10.2894 16.3861C9.95028 15.9501 9.32201 15.8716 8.88606 16.2106C8.45011 16.5497 8.37158 17.178 8.71065 17.6139L10.2894 16.3861ZM37.6153 10.7883C38.0506 10.4485 38.1281 9.8201 37.7883 9.38473C37.4485 8.94935 36.8201 8.87188 36.3847 9.21168L37.6153 10.7883ZM16.377 25.8419L17.1664 25.2279L16.377 25.8419ZM16.6579 25.8767L16.0427 25.0884L16.6579 25.8767ZM33 21.0205C33 29.3048 26.2843 36.0205 18 36.0205V38.0205C27.3888 38.0205 35 30.4094 35 21.0205H33ZM18 36.0205C9.76893 36.0205 4 29.7357 4 21.3967H2C2 30.7308 8.55797 38.0205 18 38.0205V36.0205ZM4 21.3967C4 16.1805 6.83599 10.7189 11.7281 7.91923L10.7347 6.18338C5.17572 9.36468 2 15.5159 2 21.3967H4ZM23.1563 6.9596C25.9351 7.9768 28.3299 9.78657 30.0615 12.117L31.6669 10.9241C29.7054 8.28435 26.9931 6.23428 23.8438 5.08147L23.1563 6.9596ZM32.1479 16.0292C32.6994 17.5875 33 19.2667 33 21.0205H35C35 19.0366 34.6597 17.1319 34.0334 15.362L32.1479 16.0292ZM8.71065 17.6139L15.5877 26.4558L17.1664 25.2279L10.2894 16.3861L8.71065 17.6139ZM17.2732 26.6651L37.6153 10.7883L36.3847 9.21168L16.0427 25.0884L17.2732 26.6651ZM15.5877 26.4558C15.995 26.9796 16.7501 27.0733 17.2732 26.6651L16.0427 25.0884C16.3914 24.8163 16.8948 24.8787 17.1664 25.2279L15.5877 26.4558Z" fill="#fff"/>
            <path d="M17.5 37L17 6.5L23.5 7L26.5 8.5L29 10.5L30 12L31.5 14L32.5 16.5L33 19.5L32.5 27L27.5 33.5L23 36.5556L17.5 37Z" fill="#fff" fill-opacity="0.15"/>
            </g>
            <defs>
            <clipPath id="clip0">
            <rect width="40" height="40" fill="white"/>
            </clipPath>
            </defs>
        </svg>
            <h4><a href="">Удобно</a></h4>
        </div>
    </div><div class="col-md-4 col-xl-2 col-6">
        <div class="icon-box">
            <svg width="4em" height="4em" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <path d="M35.477 16.6842C35.477 24.7941 28.9075 38 20.8035 38C12.6996 38 6.13002 24.7941 6.13002 16.6842C6.13002 13.5049 3.94075 7.24584 5.65668 4.84211C6.82117 3.21084 10.0778 4.53977 13 4C16.0185 3.44244 18.0326 2 20.8035 2C23.5745 2 25.9815 3.44244 29 4C31.9222 4.53977 35.2592 3.21084 36.4237 4.84211C38.1396 7.24584 35.477 13.5049 35.477 16.6842Z" stroke="#fff" stroke-width="2"/>
            <path d="M27.5 34.5L24 37.5L21 38.3571V20.1786V2L24 3L29 4.5H34.5H36.5L37 7.5L35.5 16L34 26L27.5 34.5Z" fill="#fff" fill-opacity="0.15"/>
            <path d="M16 18.5455L20.0426 22.932C20.078 22.9704 20.1369 22.9751 20.178 22.9428L29 16" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            </g>
            <defs>
            <clipPath id="clip0">
            <rect width="40" height="40" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            <h4><a href="">Мобильно</a></h4>
        </div>
    </div><div class="col-md-4 col-xl-2 col-6">
        <div class="icon-box">
            <svg width="4em" height="4em" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <path d="M9 10.5C8.44772 10.5 8 10.9477 8 11.5C8 12.0523 8.44772 12.5 9 12.5V10.5ZM31.5 12.5C32.0523 12.5 32.5 12.0523 32.5 11.5C32.5 10.9477 32.0523 10.5 31.5 10.5V12.5ZM21 3C21 2.44772 20.5523 2 20 2C19.4477 2 19 2.44772 19 3H21ZM17.5 13C16.9477 13 16.5 13.4477 16.5 14C16.5 14.5523 16.9477 15 17.5 15V13ZM22.5 15C23.0523 15 23.5 14.5523 23.5 14C23.5 13.4477 23.0523 13 22.5 13V15ZM25.308 19L24.3869 18.6105L25.308 19ZM39 20C39.5523 20 40 19.5523 40 19C40 18.4477 39.5523 18 39 18V20ZM14.692 19L15.6131 18.6105L14.692 19ZM1 18C0.447715 18 0 18.4477 0 19C0 19.5523 0.447715 20 1 20V18ZM15 15.5C15 14.1817 15.3037 12.965 15.8162 11.951L14.0311 11.049C13.3735 12.3504 13 13.8771 13 15.5H15ZM15.8162 11.951C16.755 10.0933 18.3323 9 20 9V7C17.3932 7 15.218 8.70032 14.0311 11.049L15.8162 11.951ZM14.9236 10.5H9V12.5H14.9236V10.5ZM20 9C21.6677 9 23.245 10.0933 24.1838 11.951L25.9689 11.049C24.7819 8.70032 22.6068 7 20 7V9ZM24.1838 11.951C24.6963 12.965 25 14.1817 25 15.5H27C27 13.8771 26.6265 12.3504 25.9689 11.049L24.1838 11.951ZM25.0764 12.5H31.5V10.5H25.0764V12.5ZM21 8V3H19V8H21ZM17.5 15H22.5V13H17.5V15ZM25 15.5C25 16.6328 24.7757 17.6912 24.3869 18.6105L26.229 19.3895C26.7239 18.2191 27 16.8954 27 15.5H25ZM24.3869 18.6105C23.4913 20.7284 21.7942 22 20 22V24C22.8107 24 25.1126 22.0294 26.229 19.3895L24.3869 18.6105ZM25.308 20H39V18H25.308V20ZM20 22C18.2058 22 16.5087 20.7284 15.6131 18.6105L13.771 19.3895C14.8874 22.0294 17.1893 24 20 24V22ZM15.6131 18.6105C15.2243 17.6912 15 16.6328 15 15.5H13C13 16.8954 13.2761 18.2191 13.771 19.3895L15.6131 18.6105ZM14.692 18H1V20H14.692V18Z" fill="#fff"/>
            <circle cx="7" cy="21" r="2" stroke="#fff" stroke-width="2"/>
            <circle cx="33" cy="21" r="2" stroke="#fff" stroke-width="2"/>
            <path d="M16 32L18.9353 35.4246C18.9711 35.4663 19.0339 35.4713 19.0759 35.4358L25.5 30" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
            <path d="M20 23V8L23.5 9L26 13V17.5L23.5 21L21 23H20Z" fill="#fff" fill-opacity="0.15"/>
            <path d="M31.5 19.5V21.5L33 23L34.5 22V19.5L33.5 19L31.5 19.5Z" fill="#fff" fill-opacity="0.15"/>
            </g>
            <defs>
            <clipPath id="clip0">
            <rect width="40" height="40" fill="white"/>
            </clipPath>
            </defs>
            </svg>

            <h4><a href="">Безопасно</a></h4>
        </div>
    </div><div class="col-md-4 col-xl-2 col-6">
        <div class="icon-box">
        <svg width="4em" height="4em" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
        <path d="M16.6456 23.8782C16.852 26.0674 17.1546 28.0533 17.4274 29.7419C17.6126 30.8877 17.8004 31.8255 18.0157 32.5713C18.0533 32.7013 17.9568 32.8328 17.8215 32.8328L15.4966 32.8328C14.7738 32.8328 12.8088 37.9483 12.4312 38.7025C12.3628 38.8392 12.4623 39 12.6153 39H28.4137C28.5667 39 28.6662 38.8392 28.5978 38.7025C28.2203 37.9483 26.2552 32.8328 25.5324 32.8328L22.1886 32.8328C22.0535 32.8328 21.957 32.7017 21.9942 32.5717C22.2079 31.8251 22.3929 30.8869 22.5726 29.7419C22.8444 28.0091 23.1297 26.1292 23.332 23.8814C23.339 23.8035 23.3906 23.7365 23.4642 23.7103L23.7369 23.6131C23.7663 23.6026 23.7978 23.5992 23.8288 23.6031L27.4466 24.0548C27.6265 24.0772 27.8027 24.1234 27.9706 24.192L38.7162 28.5829C38.8608 28.642 39.0159 28.525 38.9987 28.37L38.5338 24.1911C38.5267 24.1266 38.4894 24.0693 38.4334 24.0365L23.6907 15.4161C23.6302 15.3808 23.5927 15.3157 23.5916 15.2457C23.4665 7.19651 22.5471 1.0188 20.2812 1.00004C18.0149 0.981283 16.7783 7.19015 16.471 15.2485C16.4684 15.317 16.431 15.3801 16.3717 15.4146L1.56663 24.0365C1.51058 24.0693 1.47333 24.1266 1.46616 24.1911L1.00132 28.37C0.98407 28.525 1.13923 28.642 1.28379 28.5829L12.0294 24.192C12.1973 24.1234 12.3735 24.0772 12.5534 24.0548L16.1694 23.6033C16.2016 23.5993 16.2342 23.6031 16.2645 23.6145L16.5167 23.7093C16.5884 23.7362 16.6384 23.8019 16.6456 23.8782Z" stroke="#fff" stroke-width="2"/>
        <path d="M20 39.5V1.5L20.5 1L22 3L24 15.5L35.5 22L38 24.5L39 28.5L31 25.5L23.5 24L22.5 32.5L24.5 32L26 34L28 38L27 39L20 39.5Z" fill="#fff" fill-opacity="0.15"/>
        </g>
        <defs>
        <clipPath id="clip0">
        <rect width="40" height="40" fill="white"/>
        </clipPath>
        </defs>
        </svg>
            <h4><a href="">Просто</a></h4>
        </div>
    </div>
    </div>

    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
       
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="public/assets/image/1.jpg" class="d-block w-100" height="700" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Комфорт и безопасность</h5>
                    <p>Мы отвечаем за качество вешего перелета.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="public/assets/image/2.jpg" class="d-block w-100" height="700" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Идем в ногу со временем</h5>
                    <p>C каждым годом мы становимся все лучше.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="public/assets/image/3.jpg" class="d-block w-100" height="700" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Удобно и быстро</h5>
                    <p>Наш сервис обеспечивает клиентов на высшем уровне.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </div>
    
</section>



<section class="mb-5 pt-3" name="contacts">
    <h2 class="container">Связаться с нами:</h2>
    
    <div class="container ">
    <div class="row">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{Route('phone-form')}}" method="post" class="col-12 col-md-6 pb-4">
            @csrf
            <div class="form-group d-flex pb-2">
                <label for="phone" class="col-sm-3 col-form-label ">Введите ваш телефон</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control-plaintext px-2" name="phone" id="phone" placeholder="+7(xxx)xxx-xx-xx">
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Заказать звонок</button>
        </form>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Успешно</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Спасибо за заказнный звонок. В скорем времени с Вами свяжется наш оператор.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Понятно</button>
                </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <h4>Контакты:</h4>
            <p>+7(922)744-26-99</p>
            <p>Работаем круглосуточно</p>
        </div>
        </div>
    </div>
    @if(session()->has("message"))
    <script defer> 
    $(function(){
           $("#exampleModal").modal('show');
          });
    </script> 
    @endif
</section>
@endsection