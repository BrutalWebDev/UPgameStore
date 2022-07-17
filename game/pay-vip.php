<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title>Оформление заказа</title>
    <meta name="description" content>
    <meta name="keywords" content>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

    <?php
    include_once "../include/header.php"; 
    $id_game = $_POST['id_game'];
    $price = $_POST['price'];
    ?>  



    <div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block" style="margin-top: 50px;">    
        <h2 align="left" style="font-weight: 700;">Оформление заказа</h2>    
    </div>
    <div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block" style="margin-top: 25px;">
        <div class="card" style="border: 0px;">
            <div class="list-group">
              <div class="col-md-12" style="padding: 0px;">
                <img src="../img/pay/vip.jpg" style="box-shadow: 0 0 15px rgba(0,0,0,0.3);border-radius: 5px; margin-left:50px;">  
              </div>
          </div>
      </div>
  </div>

  <div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block" style="margin-top: 50px;"> 
    <div class="row">
        <div class="col-md-5">
            <h2 align="left" style="font-weight: 700;">1 Укажите Ваш E-mail</h2>   
        </div>
        <div class="col-md-7">
            <h2 align="left" style="font-weight: 700;">2 Выберите способ оплаты</h2>   
        </div>
    </div>    
</div>
<div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-4">

                <form method="post" action="https://money.yandex.ru/quickpay/confirm.xml">
                    <button type="submit" onclick="payment()" style="color: transparent; background-color: transparent; border-color: transparent;" style="text-decoration: none; ">
                        <script type="text/javascript">
                            function payment(){

                                var email = $("#email").val();
                                if (email != ''){$('#emails').attr('value','Адрес доставки: '+email);}
                                else{aleret('Вы указали неверный E-mail');}
                            }
                        </script>                           
                        <input type="hidden" name="receiver" value="410019871198079">       
                        <input type="hidden" name="quickpay-form" value="donate">    
                        <input type="hidden" name="targets" value="Набор VIP">   
                        <input type="hidden" name="sum" value="149" data-type="number"> 
                        <input type="hidden" name="paymentType" value="AC">    
                        <input type="hidden" id="emails"name="comment" value="Адрес доставки: E-mail не указан.">   
                        <div class="card pay-menu">
                            <div class="card-body">
                                <img src="../img/pay/cards.png" style="display: block; margin-left: auto; margin-right: auto;">
                                <p align="center" style="margin-top: 15px; font-size: 15px; font-weight: 600;">Банковская карта</p>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
            <div class="col-md-4">
                <form method="post" action="../include/pay-qiwi.php"><?php $email = $_POST['email']; ?>
                        <input type="hidden" name="email" id="emailsqPC" value="<?php echo $email; ?>">
                        <input type="hidden" id="qiwi_promo" name="price" value="149">  
                        <button type="submit" onclick="paymentqPC()" style="color: transparent; background-color: transparent; border-color: transparent;" style="text-decoration: none; ">
                        <script type="text/javascript">
                        function paymentqPC(){
                            var email = $("#email").val();
                            if (email != ''){$('#emailsqPC').attr('value','Заказ №54680 ('+email+')');}
                            else{aleret('Вы указали неверный E-mail');}
                        }
                        </script>                            
                        <div class="card pay-menu">
                            <div class="card-body">
                                <img src="../img/pay/qiwi.png" style="display: block; margin-left: auto; margin-right: auto; margin-top: 18px;">
                                <p align="center" style="margin-top: 15px; font-size: 15px; font-weight: 600;">QIWI</p>
                            </div>
                        </div>
                        </button>
                        </form>
            </div>
            <div class="col-md-4">
                <form method="post" action="https://money.yandex.ru/quickpay/confirm.xml">
                    <button type="submit" onclick="paymentY()" style="color: transparent; background-color: transparent; border-color: transparent;" style="text-decoration: none; ">
                        <script type="text/javascript">
                            function paymentY(){

                                var email = $("#email").val();
                                if (email != ''){$('#emailsY').attr('value','Адрес доставки: '+email);}
                                else{aleret('Вы указали неверный E-mail');}
                            }
                        </script>                           
                        <input type="hidden" name="receiver" value="410019871198079">       
                        <input type="hidden" name="quickpay-form" value="donate">    
                        <input type="hidden" name="targets" value="Набор VIP">   
                        <input type="hidden" name="paymentType" value="PC"> 
                        <input type="hidden" name="sum" value="149" data-type="number">    
                        <input type="hidden" id="emailsY"name="comment" value="Адрес доставки: E-mail не указан.">   
                        <div class="card pay-menu">
                            <div class="card-body">
                                <img src="../img/pay/yad.png" style="display: block; margin-left: auto; margin-right: auto; margin-top: 18px;">
                                <p align="center" style="margin-top: 15px; font-size: 15px; font-weight: 600;">Яндекс.Деньги</p>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5 order-first">
        <div class="jumbotron" style="padding: 20px; margin-top: 1px;">
            <div class="row">
                <div class="col-md-7"><h3>Итоговая цена</h3></div>
                <div class="col-md-5"><h3 align="right" style="font-weight: 600;">149 ₽</h3></div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px;">
               <input style="margin-left: 13px; width: 383px;" type="email" class="form-control" name="email" id="email" placeholder="Введите Ваш E-mail" required>     
           </div>
       </div>
   </div>
</div>
</div>

<div class="container d-lg-none d-xl-none" style="margin-top: 50px;">    
    <h2 align="left" style="font-weight: 700; font-size: 18px;">Оформление заказа</h2>    
</div>
<div class="container d-lg-none d-xl-none" style="margin-top: 25px;">
    <div class="card" style="border: 0px;">

        <img src="../img/pay/vip.jpg" style="box-shadow: 0 0 15px rgba(0,0,0,0.3);border-radius: 5px;width: 150px; margin-left:auto; margin-right: auto;">

  </div>
</div>

<div class="container d-lg-none d-xl-none" style="margin-top: 50px;"> 
    <div class="row">
        <div class="col-md-5">
            <h2 align="left" style="font-weight: 600; font-size: 15px;">1. Укажите Ваш E-mail</h2>   
            <input style="margin-left: 13px; max-width: 250px; margin-top: 15px;" type="email" class="form-control" name="emaill" id="emaill" placeholder="Введите Ваш E-mail" required>     
        </div>
        <div class="col-md-7">
            <h2 align="left" style="font-weight: 600; font-size: 15px; margin-top: 15px;">2. Выберите способ оплаты</h2>   
        </div>
    </div>    
</div>

<div class="container d-lg-none d-xl-none text-center" style="margin-top: 25px; margin-bottom: 25px;">
    <form method="post" action="https://money.yandex.ru/quickpay/confirm.xml">                    

        <input type="hidden" name="receiver" value="410019871198079">       
        <input type="hidden" name="quickpay-form" value="donate">    
        <input type="hidden" name="targets" value="Набор VIP">   
        <input type="hidden" name="sum" value="149" data-type="number">    
        <input type="hidden" name="paymentType" value="AC"> 
        <input type="hidden" id="emailss"name="comment" value="Адрес доставки: E-mail не указан."> 
        <script type="text/javascript">
            function paymentt(){
                var email = $("#emaill").val();
                if (email != ''){$('#emailss').attr('value','Адрес доставки: '+email);}
                else{aleret('Вы указали неверный E-mail');}
            }
        </script>
        <button type="submit" onclick="paymentt()" class="btn-rev" style="background-color: transparent; margin-bottom: 20px; width: 170px; margin:0;">
            <i class="fab fa-cc-mastercard fa-1x" style="font-size: 17px;"></i>
            <b>Банковская карта</b>  
        </button>
    </form><br>

    <form method="post" action="https://money.yandex.ru/quickpay/confirm.xml">                    

        <input type="hidden" name="receiver" value="410019871198079">       
        <input type="hidden" name="quickpay-form" value="donate">    
        <input type="hidden" name="targets" value="Набор VIP">   
        <input type="hidden" name="sum" value="149" data-type="number">    
        <input type="hidden" name="paymentType" value="PC"> 
        <input type="hidden" id="emailsss"name="comment" value="Адрес доставки: E-mail не указан."> 
        <script type="text/javascript">
            function paymenttt(){
                var email = $("#emaill").val();
                if (email != ''){$('#emailsss').attr('value','Адрес доставки: '+email);}
                else{aleret('Вы указали неверный E-mail');}
            }
        </script>
        <button type="submit" onclick="paymenttt()" class="btn-rev" style="background-color: transparent; margin-bottom: 20px; width: 170px; margin:0;">
            <i class="fab fa-yandex fa-1x" style="font-size: 17px; margin-right: 10px;"></i>
            <b>Яндекс.Деньги</b>  
        </button>
    </form><br>
    <form method="post" action="../include/pay-qiwi.php">                    

        <input type="hidden" name="email" id="emailsq" value="<?php echo $email; ?>">
        <input type="hidden" id="qiwi_promo" name="price" value="149">
        <script type="text/javascript">
            function paymentq(){

                var email = $("#emaill").val();

                if (email != ''){$('#emailsq').attr('value','Заказ №54680 ('+email+')');}
                else{aleret('Вы указали неверный E-mail');}
            }
        </script>
        <button type="submit" onclick="paymentq()" class="btn-rev" style="background-color: transparent; margin-bottom: 20px; width: 170px; margin:0;">
            <i class="fas fa-wallet fa-1x" style="font-size: 17px; margin-right: 10px;"></i>
            <b>QIWI</b>  
        </button>



    </form>
</div>

<?php
include_once "../include/footer.php"; 
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/799dcbfda5.js" crossorigin="anonymous"></script>
<script src="../js/index.js"></script>
</body>
</html>