@extends('layouts.layout')

@section('title') вопросы @endsection

@section('content')
    <section class="mt-5 mb-5">
        <div class="container">
    <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Какие существуют правила провоза валюты через границу?</p>
                    </button>
                  </h3>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Согласно Договору о&nbsp;порядке перемещения физическими лицами наличных денежных средств&nbsp;и (или) денежных инструментов через таможенную границу Таможенного союза, без письменного декларирования разрешен единовременный ввоз или вывоз наличных денежных средств&nbsp;и (или) дорожных чеков на&nbsp;общую сумму, равную либо не&nbsp;превышающую в&nbsp;эквиваленте 10&nbsp;тысяч долларов США. </p>
                    <p>При единовременном ввозе или вывозе наличных денежных средств&nbsp;и (или) дорожных чеков на&nbsp;общую сумму, превышающую в&nbsp;эквиваленте 10&nbsp;тысяч долларов США, указанные денежные средства&nbsp;и (или) дорожные чеки подлежат таможенному декларированию в&nbsp;письменной форме путем подачи пассажирской таможенной декларации на&nbsp;всю сумму ввозимых или вывозимых наличных денежных средств&nbsp;и&nbsp;(или) дорожных чеков. </p>
                    <p>Согласно примечанию к&nbsp;статье 200.1 Уголовного кодекса Российской Федерации, под&nbsp;денежными инструментами понимаются дорожные чеки, векселя, чеки (банковские чеки), а&nbsp;также ценные бумаги в&nbsp;документарной форме, удостоверяющие обязательство эмитента (должника) по&nbsp;выплате денежных средств, в&nbsp;которых не&nbsp;указано лицо, которому осуществляется такая выплата. </p>
                    <p>Указанную информацию необходимо учитывать гражданам при планировании въезда в&nbsp;Российскую Федерацию или выезда из&nbsp;неё, за&nbsp;исключением случаев перемещения через границу с&nbsp;государствами-членами Таможенного союза (Республика Белоруссия, Республика Казахстан). Данные меры предприняты в&nbsp;рамках реализации государством комплекса мер, направленных на&nbsp;противодействие незаконным финансовым операциям и&nbsp;легализации доходов, полученных в&nbsp;результате совершения преступлений.</p>
                      
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Во сколько лет можно отправить ребёнка одного на самолете? </p>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>В&nbsp;соответствии со&nbsp;ст.&nbsp;20&nbsp;Федерального закона от&nbsp;15&nbsp;августа 1996&nbsp;г. №&nbsp;114-ФЗ «О&nbsp;порядке выезда из&nbsp;Российской Федерации и&nbsp;въезда в&nbsp;Российскую Федерацию», Федеральными авиационными правилами несовершеннолетний гражданин Российской Федерации, как правило, выезжает из&nbsp;Российской Федерации совместно хотя&nbsp;бы с&nbsp;одним из&nbsp;родителей, усыновителей, опекунов или попечителей. </p>
                    <p>В&nbsp;случае, если несовершеннолетний гражданин Российской Федерации выезжает из&nbsp;Российской Федерации без сопровождения, он&nbsp;должен иметь при себе кроме паспорта нотариально оформленное согласие названных лиц на&nbsp;выезд несовершеннолетнего гражданина Российской Федерации с&nbsp;указанием срока выезда и&nbsp;государства (государств), которое (которые) он&nbsp;намерен посетить. </p>
                    <p>Возраст ребенка определяется на&nbsp;дату начала перевозки от&nbsp;аэропорта (пункта) отправления, указанного в&nbsp;перевозочном документе. Дети в&nbsp;возрасте до&nbsp;двух лет перевозятся только в&nbsp;сопровождении совершеннолетнего пассажира. Дети в&nbsp;возрасте от&nbsp;двух до&nbsp;двенадцати лет могут перевозиться в&nbsp;сопровождении совершеннолетнего пассажира либо без сопровождения совершеннолетнего пассажира под наблюдением перевозчика, если такая перевозка предусмотрена правилами перевозчика. </p>
                    <p>Дети в&nbsp;возрасте старше двенадцати лет могут перевозиться без сопровождения совершеннолетнего пассажира. Несопровождаемые дети в&nbsp;возрасте от&nbsp;двух до&nbsp;двенадцати лет могут перевозиться под наблюдением перевозчика только после оформления родителями, усыновителями, опекунами или попечителями в&nbsp;соответствии с&nbsp;правилами перевозчика письменного заявления на&nbsp;перевозку несопровождаемого ребенка. По&nbsp;просьбе родителей, усыновителей, опекунов или попечителей перевозка под наблюдением перевозчика может распространяться на&nbsp;детей в&nbsp;возрасте до&nbsp;шестнадцати лет.</p>
                     
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>В каких случаях авиакомпания может расторгнуть договор с пассажиром?</p>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>Согласно п.&nbsp;230 Федеральных авиационных правил «Общие правила воздушных перевозок пассажиров, багажа, грузов...» перевозчик может в&nbsp;одностороннем порядке расторгнуть договор воздушной перевозки пассажира либо груза в&nbsp;следующих случаях: </p>
                        <ul>
                            <li>нарушение пассажиром паспортных, таможенных, санитарных и&nbsp;иных установленных законодательством Российской Федерации требований в&nbsp;части, касающейся воздушной перевозки;</li>
                            <li>отказ пассажира выполнять требования, предъявляемые к&nbsp;ним федеральными авиационными правилами;</li>
                            <li>если состояние здоровья пассажира воздушного судна требует особых условий воздушной перевозки либо угрожает безопасности самого пассажира или других лиц, а&nbsp;равно создает беспорядок и&nbsp;неустранимые неудобства для других лиц;</li>
                            <li>отказ пассажира воздушного судна оплатить провоз своего багажа, вес которого превышает установленные нормы бесплатного провоза багажа;</li>
                            <li>отказ пассажира воздушного судна оплатить перевоз следующего с&nbsp;ним ребёнка, за&nbsp;исключением бесплатной перевозки одного ребёнка в&nbsp;возрасте не&nbsp;старше двух лет без предоставления ему отдельного места;</li>
                            <li>нарушение пассажиром воздушного судна правил поведения на&nbsp;борту воздушного судна, создающее угрозу безопасности полета воздушного судна либо угрозу жизни или здоровью других лиц, а&nbsp;также невыполнение пассажиром воздушного судна распоряжений командира воздушного судна;</li>
                            <li>наличие в&nbsp;вещах, находящихся при пассажире, а&nbsp;также в&nbsp;багаже, грузе запрещенных к&nbsp;воздушной перевозке предметов или веществ.</li>
                        </ul>
                   
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    	<img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                      <p>В каких случаях пассажир вправе отказаться от перевозки воздушным транспортом?</p> 
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>В&nbsp;соответствии с&nbsp;п.227 Федеральных авиационных правил «Общие правила воздушных перевозок пассажиров, багажа, грузов...» пассажир вправе отказаться от&nbsp;перевозки в&nbsp;случаях:</p>
                        <p>
                            </p><ul>
                                <li>отмены или задержки рейса, указанного в&nbsp;билете;</li>
                                <li>изменения перевозчиком маршрута перевозки;</li>
                                <li>выполнения рейса не&nbsp;по&nbsp;расписанию;</li>
                                <li>несостоявшейся отправки пассажира из-за невозможности предоставить ему место на&nbsp;рейс и&nbsp;дату, указанные в&nbsp;билете;</li>
                                <li>несостоявшейся перевозки пассажира на&nbsp;воздушном судне, вызванной задержкой пассажира в&nbsp;аэропорту из-за продолжительности проведения его досмотра, если при&nbsp;досмотре багажа или личном досмотре пассажира не&nbsp;было обнаружено запрещенных к&nbsp;перевозке веществ и&nbsp;предметов;</li>
                                <li>необеспечения перевозчиком стыковки рейсов в&nbsp;случае выполнения единой перевозки;</li>
                                <li>внезапной болезни пассажира либо болезни или смерти члена его семьи, совместно следующего с&nbsp;ним на&nbsp;воздушном судне, что подтверждено медицинскими документами;</li>
                                <li>непредоставления пассажиру обслуживания по&nbsp;классу, указанному в&nbsp;билете;</li>
                                <li>неправильного оформления билета перевозчиком или уполномоченным агентом.</li>
                            </ul>
                        <p></p>
                        <p>Перевозчик может признать отказ пассажира от&nbsp;перевозки вынужденным и&nbsp;в&nbsp;других случаях. В&nbsp;случае вынужденного отказа пассажира от&nbsp;перевозки перевозчик делает отметку в&nbsp;перевозочном документе либо выдает пассажиру документ, подтверждающий факт отказа для возмещения суммы, уплаченной за&nbsp;перевозку.</p>
                      
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Имеет ли право билетный кассир по собственной инициативе заключить с пассажиром договор добровольного страхования при продаже ему проездного документа (билета)?</p>
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>Заключение договоров добровольного страхования в&nbsp;принудительном порядке является грубым нарушением требований гражданского законодательства&nbsp;РФ, основывающегося на&nbsp;принципах равенства участников гражданских правоотношений, свободы договора, беспрепятственного осуществления гражданских прав. </p>
                        <p>На&nbsp;практике имеют место факты, когда билетные кассиры самостоятельно страхуют пассажиров от&nbsp;несчастных случаев, вкладывая страховку в&nbsp;проездной билет и&nbsp;называя пассажиру сумму к&nbsp;оплате с&nbsp;учетом стоимости страховки. Заключение договора добровольного страхования без получения согласия пассажира является недопустимым. О&nbsp;таких фактах следует сообщать в&nbsp;Новосибирскую транспортную прокуратуру по&nbsp;адресу: 630132, г. Новосибирск, ул.&nbsp;1905&nbsp;года, тел.факс: 8 (383) 220-47-80.</p></p>
                   
                    </div>
                  </div>
                </div>
                
              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Имеет ли право билетный кассир по собственной инициативе заключить с пассажиром договор добровольного страхования при продаже ему проездного документа (билета)?</p>
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>Заключение договоров добровольного страхования в&nbsp;принудительном порядке является грубым нарушением требований гражданского законодательства&nbsp;РФ, основывающегося на&nbsp;принципах равенства участников гражданских правоотношений, свободы договора, беспрепятственного осуществления гражданских прав. </p>
                        <p>На&nbsp;практике имеют место факты, когда билетные кассиры самостоятельно страхуют пассажиров от&nbsp;несчастных случаев, вкладывая страховку в&nbsp;проездной билет и&nbsp;называя пассажиру сумму к&nbsp;оплате с&nbsp;учетом стоимости страховки. Заключение договора добровольного страхования без получения согласия пассажира является недопустимым. О&nbsp;таких фактах следует сообщать в&nbsp;Новосибирскую транспортную прокуратуру по&nbsp;адресу: 630132, г. Новосибирск, ул.&nbsp;1905&nbsp;года, тел.факс: 8 (383) 220-47-80.</p></p>
                   
                    </div>
                  </div>
                </div>
              
              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>В каком порядке осуществляется перевозка на воздушном транспорте лежачих больных и инвалидов?</p>
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>Перевозка пассажира в&nbsp;кресле-коляске, неспособного передвигаться самостоятельно, или больного на&nbsp;носилках производится в&nbsp;сопровождении лица, обеспечивающего уход за&nbsp;этим пассажиром в&nbsp;полете. Если это предусмотрено правилами перевозчика, перевозка таких лиц может осуществляться под наблюдением перевозчика. Перевозка больного на&nbsp;носилках производится с&nbsp;предоставлением ему дополнительных мест на&nbsp;воздушном судне с&nbsp;оплатой, установленной перевозчиком. Перевозчик вправе отказать в&nbsp;перевозке пассажира в&nbsp;кресле-коляске, больного на&nbsp;носилках при отсутствии на&nbsp;отдельных воздушных судах условий, необходимых для перевозки таких пассажиров. </p>
                        <p>Пассажир, лишенный зрения и/или слуха, перевозится с&nbsp;сопровождающим лицом или без сопровождающего под наблюдением перевозчика, если такая перевозка предусмотрена правилами перевозчика. Пассажир, лишенный слуха, по&nbsp;согласованию с&nbsp;перевозчиком может перевозиться без сопровождающего, в&nbsp;то&nbsp;время как пассажир, лишенный зрения, по&nbsp;согласованию с&nbsp;перевозчиком может перевозиться в&nbsp;сопровождении собаки-поводыря. Перевозка пассажира, лишенного зрения, в&nbsp;сопровождении собаки-поводыря может быть произведена при предъявлении перевозчику документа, подтверждающего инвалидность этого пассажира, и&nbsp;документа, подтверждающего специальное обучение собаки-поводыря. Собака-поводырь, сопровождающая пассажира, лишенного зрения, перевозится бесплатно сверх установленной нормы бесплатного провоза багажа. Собака-поводырь должна иметь ошейник и&nbsp;намордник и&nbsp;быть привязана к&nbsp;креслу у&nbsp;ног пассажира, которого она сопровождает.</p></p>
                   
                    </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                       <img class="position-absolute top-50 start-0 translate-middle-y poiner" src="assets/img/selector.svg" alt="">
                       <p>Какая ответственность установлена за распитие спиртных напитков в самолете и за другие правонарушения?</p>
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mx-4"><p>За&nbsp;распитие спиртных напитков в&nbsp;общественном транспорте общего пользования предусмотрена административная ответственность в&nbsp;виде штрафа в&nbsp;размере от&nbsp;500 до&nbsp;700&nbsp;рублей. Гораздо больше&nbsp;— от&nbsp;1000 до&nbsp;3000 рублей заплатят лица, пронесшие на&nbsp;борт самолета багаж, не&nbsp;прошедший досмотр или запрещенный к&nbsp;перевозке. Не&nbsp;выполняющие законные распоряжения командира воздушного судна пассажиры могут быть подвергнуты штрафу в&nbsp;размере от&nbsp;2000 до&nbsp;5000&nbsp;рублей, а&nbsp;также административному аресту на&nbsp;срок до&nbsp;15&nbsp;суток. </p>
                      <p>Не&nbsp;следует также использовать пиротехнические изделия на&nbsp;территории аэропорта, аэродрома, вертодрома, посадочной площадке, а&nbsp;также в&nbsp;полосе воздушных подходов к&nbsp;указанным объектам без разрешения администрации. Это чревато административной ответственностью в&nbsp;виде штрафа в&nbsp;размере от&nbsp;1000 до&nbsp;2000 рублей с&nbsp;конфискацией орудия совершения правонарушения (пиротехники).</p></p>
                   
                    </div>
                  </div>
              </div>
              
        

      </div>
    </section>

@endsection