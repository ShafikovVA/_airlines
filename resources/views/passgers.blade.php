@extends('layouts.layout')

@section('title') Пассажирам @endsection

@section('content')
<section class="mt-5 mb-5">
<div class="container">
<h2 class="container mb-5">Адреса авиакасс:</h2>
    <div id="map" style="width: 100%; height: 300px "></div>
    <script type="text/javascript">
    ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.162721, 61.403542],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.8, 37.8]
            },
            // Свойства.
            properties: {
                // Контент метки.
                iconContent: 'Я тащусь',
                hintContent: 'Ну давай уже тащи'
            }
        }, {
            // Опции.
            // Иконка метки будет растягиваться под размер ее содержимого.
            preset: 'islands#blackStretchyIcon',
            // Метку можно перемещать.
            draggable: true
        }),
        myPieChart = new ymaps.Placemark([
            55.847, 37.6
        ], {
            // Данные для построения диаграммы.
            data: [
                {weight: 8, color: '#0E4779'},
                {weight: 6, color: '#1E98FF'},
                {weight: 4, color: '#82CDFF'}
            ],
            iconCaption: "Диаграмма"
        }, {
            // Зададим произвольный макет метки.
            iconLayout: 'default#pieChart',
            // Радиус диаграммы в пикселях.
            iconPieChartRadius: 30,
            // Радиус центральной части макета.
            iconPieChartCoreRadius: 10,
            // Стиль заливки центральной части.
            iconPieChartCoreFillStyle: '#ffffff',
            // Cтиль линий-разделителей секторов и внешней обводки диаграммы.
            iconPieChartStrokeStyle: '#ffffff',
            // Ширина линий-разделителей секторов и внешней обводки диаграммы.
            iconPieChartStrokeWidth: 3,
            // Максимальная ширина подписи метки.
            iconPieChartCaptionMaxWidth: 200
        });

    myMap.geoObjects
        .add(myGeoObject)
        .add(myPieChart)
        .add(new ymaps.Placemark([55.684758, 37.738521], {
            balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }))
        .add(new ymaps.Placemark([55.162721, 61.403542], {
            balloonContent: 'OOО «ЦЕНТРАЛЬНОЕ АГЕНТСТВО ВОЗДУШНОГО СЕРВИСА» <br> Цвиллинга, 28'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }))
        .add(new ymaps.Placemark([55.183724, 61.301197], {
            balloonContent: 'с 09:00 до 21:00 без обеда и выходных <br>улица 40-летия Победы, 24 '
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }))
     
}

</script>
<div class="t-block">
	<div id="i_cn">
		<div style="padding: 0px;" class="default" xmlns="">
			<p align="center">
 <br>
			</p>
			<p align="center" style="text-align: left;">
				 Уважаемые пассажиры!
			</p>
			<p>
				 Приобрести &nbsp;билеты на рейсы авиакомпаний, осуществляющих полеты из Международного аэропорта «Челябинск», можно обратившись в авиакассы города.&nbsp;
			</p>
			<p>
				 Для удобства пассажиров в зале вылета Российского сектора расположены филиалы следующих авиакасс:
			</p>
		</div>
		<div>
			<p>
 <b>OOО «ЦЕНТРАЛЬНОЕ АГЕНТСТВО ВОЗДУШНОГО СЕРВИСА»</b>
		
			</p><div class="c-item">
				<ul class="w-icon-list contact-list">
					
					<li>+7 (351) 2400-600</li>
				</ul>
			</div>
 <b>ПАО «АЭРОФЛОТ»</b>
			
			<div class="c-item">
				<ul class="w-icon-list contact-list">
					
					<li> +7 (351) 778-38-98</li>
				</ul>
			</div>
 <b>АО «АВИАКОМПАНИЯ&nbsp;</b>«<b>СИБИРЬ» (S7&nbsp;AIRLINES)</b>
			
			<div class="c-item">
				<ul class="w-icon-list contact-list">
				
					<li> +7 (351) 778-36-47</li>
				</ul>
			</div>
		</div>
	</div>
</div>
 <br>                                        </div> 

</div>
 </section>
 @endsection