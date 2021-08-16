@extends('layouts.layout')

@section('title') ShafikovAirlines @endsection

@section('content') 
    <section class="raises-table">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-dark  mt-5 mb-5">
                        <header >
                            <div class="upperblock d-flex justify-content-around" >
                                 <ul class="nav mainbuttons">
                                    <li class="nav-item @if($info != 1) active_btn @endif">
                                        <a class="nav-link active" href="{{route('AllData')}}" style="font-size: 30px">Вылет</a>
                                    </li>
                                    <li class="nav-item @if($info == 1) active_btn @endif">
                                        <a class="nav-link" href="{{route('AllData')}}?info=1" style="font-size: 30px">Прилет</a>
                                    </li>
                                </ul>
                                <ul class="filter nav align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link  active" href=".">ОБНОВИТЬ</a>
                                    </li>
                                    <li class="nav-item non_mobile">
                                        <a class="nav-link " href="@if($info == 1) {{route('AllData')}}?info=1 @else {{route('AllData')}} @endif">СЕГОДНЯ</a>
                                    </li>
                                    <li class="nav-item non_mobile">
                                        <a class="nav-link " href="@if($info == 1) {{route('AllData')}}?info=1&tomorrow=1 @else {{route('AllData')}}?tomorrow=1 @endif">ЗАВТРА</a>
                                    </li>
                                    <li class="nav-item non_mobile">
                                        <a class="nav-link " href="@if($info == 1) {{route('AllData')}}?info=1&yesterday=1 @else {{route('AllData')}}?yesterday=1 @endif">ВЧЕРА</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lowerblock d-flex justify-content-around">
                    
                                <div id="grid" class="second-elems">
                                    <div>Рейс</div>
                                    <div>Пункт вылета</div>
                                    <div>Время</div>
                                    <div class="non_mobile">Расчетное</div>
                                    <div class="non_mobile">Терминал</div>
                                    <div>Статус</div>
                                </div>
                            </div>
                                
                        </header>
                        <main>
                            
                            <div id="gridelems" style="">
                                <div>R2123</div>
                                <div>Астрахань</div>
                                <div>14:30</div>
                                <div class="non_mobile">15:40</div>
                                <div class="non_mobile">А</div>
                                <div>Готовится к отправке</div>
                            </div>
                            <div id="gridelems" style="">
                                <div>L12332</div>
                                <div>Москва</div>
                                <div>14:30</div>
                                <div class="non_mobile">15:40</div>
                                <div class="non_mobile">B</div>
                                <div>Отбыл</div>
                            </div>
                            <div id="gridelems" style="">
                                <div>L12332</div>
                                <div>Москва</div>
                                <div>14:30</div>
                                <div class="non_mobile">15:40</div>
                                <div class="non_mobile">B</div>
                                <div>Готовится к отправке</div>
                            </div>
                            <div id="gridelems" style="">
                                <div>L12332</div>
                                <div>Санкт-Петербург</div>
                                <div>14:30</div>
                                <div class="non_mobile">15:40</div>
                                <div class="non_mobile">B</div>
                                <div>Отбыл</div>
                            </div>
                            <div id="gridelems" style="">
                                <div>L12332</div>
                                <div>Москва</div>
                                <div>14:30</div>
                                <div class="non_mobile">15:40</div>
                                <div class="non_mobile">B</div>
                                <div>Готовится к отправке</div>
                            </div>

                            @foreach($data as $el)
                            <div id="gridelems" style="">
                                <div>{{ $el->flight_name}}</div>
                                <div>{{ $info ? $el->from->city->name : $el->where->city->name }}</div>
                                <div>{{ Carbon\Carbon::parse($el->time)->format('H:i') }}</div>
                                <div class="non_mobile">{{ Carbon\Carbon::parse($el->estimated_time)->format('H:i') }}</div>
                                <div class="non_mobile">{{ $el->terminal}}</div>
                                <div>{{$el->status}}</div>
                            </div>
                            @endforeach
                            <form action="/contact/submit" method="post">
                                @csrf
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>     
    </section>

    <section class="mt-5 desc">
    <div class="container">
    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 322px;" src="public/assets/image/air.jpg" data-holder-rendered="true">
          </div>
          <div class="col-md-7">
            <h2 class="featurette-heading">Лучший аэропорт <span class="text-muted">в Челябинске</span></h2>
            <p class="lead">Выбирая наш аэропорт вы выбираете качество и надежность вашего перелета в любую точку мира, куда бы вы не хотели полете.<br><br>
                            Наш аэропорт гарантирует вам качественное обслуживание, достойный сервис, а также уют и комфорт.<br><br>
                            Приятного полета!</p>
          </div>
            
        </div>
        </div>
    </section>
@endsection