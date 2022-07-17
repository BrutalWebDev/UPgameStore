<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <title>Отзывы о магазине UPGAME</title>
        <meta name="description" content="Отзывы об интернет-магазине UPGAME, более 1000 комментариев от реальных клиентов">
        <meta name="keywords" content="upgame, отзывы">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
    
    <style type="text/css">
        body, html{
            background-color: #f8f8f8;
        }
    </style>

    <?php
    include_once "include/header.php"; 
    ?>  
          <script type="text/javascript">
              function rew () {
                var name = $("#name").val();
                var review = $("#review").val();

                if(name.length < 2 || review.length < 5){
                    alert("Внимание! Запоплните все поля.")
                } else {
                  document.getElementById('succ').hidden = false;
                  $("#rewform").trigger("reset");
                }

              }
          </script>

    <div class="container" style="margin-top: 50px;">    
        <h1 align="left" style="font-weight: 700;">Отзывы</h1>    
    </div>
    <div class="container">
       <div class="row"> 
        <div class="col-md-9">
            <div class="jumbotron">
                <p>Во избежание несмысловых комментариев, а так же спама вредоносными ссылками отзывы могут оставлять пользователи, совершившие покупку на нашем сайте. Ваш отзыв будет отправлен в прозрачный буфер отзывов, пока вы не совершите покупку.</p>
                <form method="post" id="rewform">
                    <label for="name">Ваше имя</label>
                    <input style="max-width: 200px;" type="text" class="form-control" name="name" id="name" placeholder="">
                    <label for="review" style="margin-top: 5px;">Отзыв</label>
                    <textarea id="review" name="review" class="form-control"></textarea>
                    <div class="row">
                         <input type="button" onclick="rew()" id="sendReview" value="Отправить" class="btn btn-outline-info btn-lg" style="margin-left: 17px; margin-top: 15px;">
                         <label id="succ" style="margin-left: 20px; color: #5cc553; font-weight: 600; font-size: 20px; margin-top: 25px;" hidden="true">Ваш отзыв успешно отправлен и скоро появится на сайте!</label>
                    </div>
                </form>
            </div>
            <div class="jumbotron">
                <?php
                include_once "include/rev.php"; 
                ?> 
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
 
    </body>
</html>