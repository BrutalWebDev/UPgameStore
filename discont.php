<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Накопительная скидка</title>
        <meta name="description" content="В нашем магазине UPGAME действует система накопительных скидок до 10%">
        <meta name="keywords" content="upgame, скидка">
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

    <div class="container" style="margin-top: 50px;">    
        <h1 align="left" style="font-weight: 700;">Накопительная скидка</h1>    
    </div>
    <div class="container">
       <div class="row"> 
        <div class="col-md-9" style="">
            <div class="jumbotron">
                <p style="font-size: 26px;"><i class="fas fa-angle-right"></i> У нас действует система накопительных скидок до 10%</p>
                <p style="font-size: 26px;"><i class="fas fa-angle-right"></i> Чем больше сумма покупок - тем больше скидка на последующие покупки.</p>
                <p style="font-size: 26px;"><i class="fas fa-angle-right"></i> Сумма покупок и скидка привязываются к вашей электронной почте.</p>
                <p style="font-size: 26px;"><i class="fas fa-angle-right"></i> Промо-код не суммируется с накопительной скидкой.</p>
            </div>
        </div>
        <div class="col-md-3" style="padding:0px;">
            <?php
            include_once "include/menu.php"; 
            ?>     
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