@extends('layouts.layout')

@section('title') Пассажирам @endsection

@section('content')
<section class="mt-5 mb-5">
<div class="container">
    <h2 class="mb-4">Провоз багажа</h2>

<div class="t-block"> 
    <p _ngcontent-svo-c55="" class="page-info bottom-offset ng-star-inserted">Перед посадкой в самолет все пассажиры, их багаж и ручная кладь проходят обязательную процедуру досмотра. Заранее убедитесь, что в вашем багаже и ручной клади нет запрещенных к перевозке вещей — на рейс вас с ними не пустят.</p>                                 
    <div _ngcontent-svo-c59="" class="wysiwyg"><h4>Багаж</h4><p>Багаж - это все вещи, которые вы сдаете при регистрации на рейс и получаете обратно в аэропорту прилета.</p>
    <p>Заранее проверьте, что вес вашего багажа не превышает норму, установленную авиакомпанией, и что в нем нет запрещенных к перевозке предметов.
     Также убедитесь, что ничего из вашего багажа не понадобится вам во время ожидания посадки и полета.</p>
     <p>Рекомендуем дополнительно уточнить правила провоза багажа в вашей авиакомпании.</p></div>
     </br>
     <h4 _ngcontent-svo-c62="">Некоторые ограничения на провоз багажа</h4>
     </br>
     <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                    <button class="accordion-button position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Литий-ионные батареи</p>
                    </button>
                  </h5>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>В зарегистрированном багаже литий-ионные батареи перевозить нельзя. Это значит, что <strong>нельзя</strong> сдать в багаж <strong>портативное зарядное устройство для телефона</strong>, <strong>гироскутер</strong> с неизвлекаемой батареей и другие электронные устройства с батареей такого типа.</p>
                    <p>Если мощность батареи <strong>160 Втч или меньше</strong>, извлеките батарею и сдайте прибор в багаж без нее. Саму батарею перевозите в ручной клади.<br><br>Если мощность батареи<strong>&nbsp;больше 160 Втч</strong> или она не извлекается, то перевозить ее можно только как “Опасный груз” через грузовой терминал аэропорта.</p>
                    <p><strong>Исключение</strong><em>:&nbsp;</em>инвалидные коляски на аккумуляторах. Об их перевозке необходимо заранее предупредить авиакомпанию.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p> Зажигалки  </p>
                    </button>
                  </h5>
                  <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>В багаже зажигалки провозить нельзя. Их можно взять с собой в ручную кладь в количестве не более 1 шт на человека.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p> Крепкий алкоголь </p>
                    </button>
                  </h5>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p><span>Алкоголь крепче 24 градусов можно перевозить при условии, что его не более 5 литров на пассажира, он составляет не более 70% объема багажа и упакован в тару для розничной торговли.</span></p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    	<img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                      <p> Оружие </p> 
                    </button>
                  </h5>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>В&nbsp;соответствии с&nbsp;п.227 Федеральных авиационных правил «Общие правила воздушных перевозок пассажиров, багажа, грузов...» пассажир вправе отказаться от&nbsp;перевозки в&nbsp;случаях:</p>
                      <p>Оружие в багаже можно провозить только <a href="/ru/passengers/luggage/weaponry">при наличии соответствующего разрешения</a>. Если вы везете охотничий нож, возьмите сертификат, что нож не является оружием, и охотничий билет со вписанным номером ножа.</p>
                    </div>
                  </div>
                </div>
      </div>
        </br>
      <h4>Ручная кладь</h4>
      <p>Это вещи, которые вы берете с собой в самолет. С собой на борт можно взять одно место незарегистрированного багажа (сумку, рюкзак и т.д.). Проверьте, что его вес не превышает норму и габариты, установленные авиакомпанией.</p>

      <div class="accordion" id="accordionExample1">
                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingFive">
                    <button class="accordion-button position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p> Что можно бесплатно провозить в салоне в дополнение к ручной клади </p>
                    </button>
                  </h4>
                  <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <div class="mat-expansion-panel-body"><div _ngcontent-svo-c62="" class="wysiwyg">
                    <ul>
                        <li dir="ltr">Дамскую сумочку или портфель</li>
                        <li dir="ltr">Печатные издания для чтения в полете</li>
                        <li dir="ltr">Портативный компьютер, фотоаппарат, видеокамеру, мобильный телефон</li>
                        <li dir="ltr">Питание для ребенка, дорожную колыбель, складную коляску</li>
                        <li dir="ltr">Зонтик или трость</li><li dir="ltr">Верхнюю одежду</li>
                        <li dir="ltr">Костюм в портпледе</li><li dir="ltr">Складную инвалидную коляску, костыли — при необходимости</li>
                    </ul>
                    <p>Рекомендуем <strong>уточнить правила провоза ручной клади&nbsp;в вашей авиакомпании</strong> и убедиться, что все ваши вещи можно брать в салон.</p></div></div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>  Что нельзя брать в ручную кладь   </p>
                       
                    </button>
                  </h4>
                  <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <div class="mat-expansion-panel-body"><div _ngcontent-svo-c62="" class="wysiwyg">
                    <ul>
                    <li dir="ltr"><a href="/ru/passengers/prohibited-items" rel="noopener noreferrer" target="_blank">Запрещенные к перевозке вещества и предметы</a></li>
                    <li dir="ltr">Колющие, режущие, опасные предметы</li><li dir="ltr">Зажигалки более 1 шт на человека</li>
                    <li>Жидкости в упаковках более 100 мл, даже не до конца заполненных</li><li>Более 1 л жидкостей на человека</li>
                    <li>Cпиртные напитки, кроме приобретенных в Duty Free<em><br></em></li>
                    </ul>
                    <p><strong>Исключения</strong>:<em>&nbsp;</em>необходимые в полете лекарства, детское питание и специальная диетическая еда&nbsp;</p></div></div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>  Рекомендации по перевозу жидкостей и электроники  </p>
                    </button>
                  </h4>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <div _ngcontent-svo-c62="" class="wysiwyg">
                        <p>Сложите <strong>жидкости</strong>, которые вы будете перевозить в ручной клади, <strong>в прозрачный пластиковый пакет</strong> и предъявите на досмотре отдельно. Напоминаем, упаковки для жидкостей должны быть объемом не более 100 мл. Крема и гели, пена для бритья, мед тоже считаются жидкостями.</p>
                        <p>Жидкости, приобретенные в магазинах Duty Free в аэропорту, упаковываются при покупке в опломбированный пакет. Этот пакет нельзя вскрывать до прибытия в аэропорт назначения.</p>
                        <p>Также на досмотре могут попросить <strong>отдельно показать электронные устройства&nbsp;</strong>(ноутбуки, видеокамеры и т.д.) — положите их так, чтобы было удобно вытаскивать их из сумки.</p>
                    </div>
                    </div>
                  </div>
                </div>
      </div>

</div>
</div>
 </section>
 @endsection