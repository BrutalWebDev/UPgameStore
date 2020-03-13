<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Поддержка UPGAME.STORE</title>
        <meta name="description" content="Центр поддержки UPGAME. Форма обратной связи для любых вопросов.">
        <meta name="keywords" content="upgame, поддержка">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <?php
    include_once "include/header.php"; 
    ?>  

    <div class="container text-center" style="margin-top: 60px; padding-bottom: 60px;">
        <h3>Добро пожаловать в службу поддержки UPGAME!</h3>
        <h1>Как мы можем вам помочь?</h1>
    </div>

    <div class="container">
        <p align="center">
          <a class="btn btn-outline-info btn-lg" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-gamepad fa-1x" style="margin-right: 5px;"></i> Товары</a>
          <button class="btn btn-outline-info btn-lg" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fas fa-wallet fa-1x" style="margin-right: 5px;"></i> Платежи</button>
          <button class="btn btn-outline-info btn-lg" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3"><i class="fas fa-comments fa-1x" style="margin-right: 5px;"></i> Написать в службу поддержки</button>
        </p>
        <div class="row" style="padding-bottom:10%;">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body" style="border: 0px; padding: 0px;">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link topblock" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Если игра мне не понравится, могу ли я вернуть свои деньги?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        Это не представляется возможным. Товар, приобретенный покупателем, не подлежит возврату или обмену в случае, если товар был получен.                      </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Как узнать, когда в наличие поступит товар?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        В нашем магазине работает система оповещения о поступлении товара! Для использования необходимо зайти на страницу товара, имеющего статус "Скоро" или "Закончился", нажать на иконку конверта, расположенного рядом с таким статусом и подписаться, указав желаемый почтовый адрес для получения уведомления о поступлении товара в магазин.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFore">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                          Можно ли подарить игру другому человеку?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                      <div class="card-body">
                        Можно! После приобретения можно передать полученный товар, но просим принять во внимание, что любая игра может активироваться только один раз и только на один выбранный аккаунт.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Я купил игру, как и где ее можно забрать?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        Ваши совершенные покупки всегда хранятся в вашем почтовом ящике. Почтовый ящик вы указываете при оформлении заказа.
                      </div>
                    </div>
                  </div>
                   <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Можно ли купить аккаунт / оружие / раскраски и т.д. в этом магазине?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        Нет, магазин осуществляет продажу только лицензионных игр и дополнений к ним!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Какой регион активации?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        Список стран указан на странице товара в магазине!
                      </div>
                    </div>
                  </div>
                   <div class="card">
                    <div class="card-header" id="headingEit">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseEit" aria-expanded="false" aria-controls="collapseEit">
                          Если я не нашел нужную игру в каталоге магазина?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEit" class="collapse" aria-labelledby="headingEit" data-parent="#accordionExample">
                      <div class="card-body">
                         Если нет какой-либо игры в нашем магазине, то, вероятно, нет возможности пополнить данный продукт.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body" style="border: 0px; padding: 0px;">
                <div class="accordion" id="accordionExample2">
                  <div class="card">
                    <div class="card-header" id="headingOne1">
                      <h2 class="mb-0">
                        <button class="btn btn-link topblock" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                          Можно ли оплатить товар с помощью кошелька Steam?
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Нет, Steam Wallet работает исключительно в рамках Steam! Оплатить товар можно лишь представленными магазином способами.
                     </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo1">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                          Могу ли я оплатить покупку не в рублевом эквиваленте?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Да, магазин принимает к оплате и евро, доллары, гривны, тенге, бел.рубли. В случае с белорусскими рублями — можно оплатить банковской картой, при этом счет переконвертируется в российские рубли по курсу банка плательщика.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFore1">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseFore1" aria-expanded="false" aria-controls="collapseFore1">
                          Я хочу оплатить товар банковской картой, безопасно ли это?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFore1" class="collapse" aria-labelledby="headingFore1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Полностью безопасно! За конфиденциальность получаемой информации несет ответственность магазин, а списание средств производится только на указанную стоимость выбранного товара при оформлении заказа. А также, оформить заказ невозможно, если у владельца банковской карты не подключена защита 3D-Secure, оберегающая как магазин, так и покупателя от кардинговых мошенников!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive1">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                          Я купил игру, но при активации пишет, что продукт не предназначен для моего региона!
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive1" class="collapse" aria-labelledby="headingFive1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Такая проблема может возникнуть только в том случае, если Вы не обратили внимание и/или проигнорировали предупреждение о региональных ограничениях, согласие на  ознакомление  с которыми каждый покупатель предварительно обязан подтвердить. А также проживаете на территории страны, недоступной для активации такого продукта.
                        Большинство игр  предназначено для активации и запуска только на территории России, Украины и стран СНГ, список которых перечисляется в предупреждении перед оформлением заказа!
                      </div>
                    </div>
                  </div>
                   <div class="card">
                    <div class="card-header" id="headingSix1">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
                          Я купил игру, но не получил её на почту, что делать?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix1" class="collapse" aria-labelledby="headingSix1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Пожалуйста, проверьте, не допускали ли Вы ошибку при указании почтового адреса.  
                        Если Ваши денежные средства были списаны, а товар в конечном итоге так и не был получен с указанной почтой, то по всей вероятности Вы могли допустить ошибку в указании адреса при оформлении заказа.
                        Для решения данной проблемы Вы можете обратиться к технической поддержке магазина, нажав на кнопку "Написать в службу поддержки"
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSeven1">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed topblock" type="button" data-toggle="collapse" data-target="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
                          Что делать, если игра вылетает, зависает или не запускается?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven1" class="collapse" aria-labelledby="headingSeven1" data-parent="#accordionExample2">
                      <div class="card-body">
                        Магазин не несет ответственности за возможные технические неполадки с игрой, и максимум что мы можем порекомендовать в данной ситуации — переустановить или обновить драйвера на аппаратную часть компьютера, снизить графические настройки в игре, проверить компьютер на наличие вирусов / майнеров, завершить лишние процессы из диспетчера задач, переустановить ОС, а также проверить - не перегреваются ли какие-либо составные части компьютера.
                        Если ничего из перечисленного не решает Вашу проблему, то необходимо искать решение на форумах, в интернете или обращаться в поддержку разработчика продукта за получением официального ответа.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
              function ne () {
              document.getElementById('jb1').hidden = true;
              document.getElementById('jb2').hidden = false;
              }
          </script>
           <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body" id="jb1">
          
                <h3 align="center">Запрос в службу поддержки</h3><hr>
                <label for="exampleInputEmail1">Введите ваш Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleFormControlTextarea1">Опишите свою проблему</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button class="btn btn-outline-info btn-lg" onclick="ne()" type="submit" style="margin-top: 10px;" ><i class="fas fa-comment fa-1x" style="margin-right: 5px;"></i> Отправить</button>
                        
              </div>

              <div class="card card-body" id="jb2" hidden="true">
                  <h3 align="center">Ваша заявка успешно отправлена, ответ поступит на вашу почту в течение суток.</h3>
              </div>
            </div>
          </div>
        </div>    
    </div>

    <?php
    include_once "include/footer.php"; 
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/799dcbfda5.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    </body>
</html>