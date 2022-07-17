<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <title>Каталог магазина UPGAME</title>
  <meta name="description" content="Большое количество игр, последние новинки по доступным ценам">
  <meta name="keywords" content="купить игры">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>


  <?php
  require_once 'include/db_connect.php';
  include_once "include/header.php"; 
  ?>  

  <div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block" style="margin-top: 50px; padding: 0px;">    
    <h1 align="left" style="font-weight: 700;">Каталог</h1>    
  </div>
  <div class="container card-game d-none d-sm-none d-md-none d-lg-block d-xl-block" style="padding: 0px; margin-top: 25px; font-size: 20px; color:#000; margin-bottom: 30px;">
    <div class="row">
      <div class="col-md-8">
        <div class="card" style="border: 0px;">
         <div class="list-group" style="background-color: #f6f6f6;">
          <div class="container" style="background-color: #f6f6f6;margin-bottom: 20px;">
            <div class="row">
              <p style='margin-top:auto; margin-bottom:auto;'>Сортировать</p>
               <form method="POST" action="catalog">
                <div class="dropdown" style="margin-left:15px; margin-top:auto; margin-bottom:auto;">
                    <a class="btn btn-info dropdown-toggle" style="background-color: transparent; color:#117a8b" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    По популярности
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <button class="dropdown-item" type="submit" name="sort" value="id_game ASC">По популярности</button>
                    <button class="dropdown-item" type="submit" name="sort" value="price ASC">По цене, с недорогих</button>
                    <button class="dropdown-item" type="submit" name="sort" value="price DESC">По цене, с дорогих</button>
                    <button class="dropdown-item" type="submit" name="sort" value="sale ASC">По скидкам, с маленьких</button>
                    <button class="dropdown-item" type="submit" name="sort" value="sale DESC">По скидкам, с больших</button>
                  </div>
                </div>
               </form>

          <?php
          include_once "include/games.php"; 
          ?>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="jumbotron" style="margin-top: 64px;">
        <form method="POST" action="catalog">
          <h3 align="center">Поиск</h3>
          <input type="text" name="search" class="form-control" style="margin-top: 10px; margin-bottom: 10px; max-width: 100%;" placeholder="Например: Overwatch" required="">
          <div class="content">
            <button type="submit" class="btn-rev" style="width: 100%; margin-bottom: 24px;"><b>Найти</b></button>
          </div>
        </form>
        <h3 align="center">Цена</h3>
        <form method="post" action="catalog">

          <div class="content">
            <div class="row">
              <div class="col">
                <input type="text" name="ot" class="form-control" style="max-width: 133px;" placeholder="от 0" required="">
              </div>
              <div class="col">
                <input type="text" name="do" class="form-control mb-1" style="max-width: 133px;" placeholder="до 4999" required="">
              </div>
            </div>
          </div>  



          <div class="content">
            <div class="row">
              <div class="col">
                <button type="submit" class="btn-rev" style="width: 130px;"><b>Найти</b></button>
              </div>
              <div class="col">
                <a href="catalog" class="btn-rev" style="width: 130px;"><b>Сбросить</b></a>
              </div>
            </div>
          </div>  
        </form>
        <hr>
        <h3 align="center">Жанры</h3>
        <section>
          <input id='one' type='checkbox' />
          <label for='one' onclick="filterAction()">
            <span></span>
            Экшены
            <ins><i>Экшены</i></ins>
          </label>
          <input id='one1' type='checkbox' />
          <label for='one1' onclick="filterSport()">
            <span></span>
            Спорт
            <ins><i>Спорт</i></ins>
          </label>
          <input id='one2' type='checkbox' />
          <label for='one2' onclick="filterRpg()">
            <span></span>
            RPG
            <ins><i>RPG</i></ins>
          </label>
          <input id='one3' type='checkbox' />
          <label for='one3' onclick="filterStrateg()">
            <span></span>
            Стратегии
            <ins><i>Стратегии</i></ins>
          </label>
          <input id='one4' type='checkbox' />
          <label for='one4' onclick="filterGonki()">
            <span></span>
            Гонки
            <ins><i>Гонки</i></ins>
          </label>
          <input id='one5' type='checkbox' />
          <label for='one5' onclick="filterSimul()">
            <span></span>
            Симуляторы
            <ins><i>Симуляторы</i></ins>
          </label>
          <input id='one6' type='checkbox' />
          <label for='one6' onclick="filterPrikl()">
            <span></span>
            Приключения
            <ins><i>Приключения</i></ins>
          </label>
          <input id='one7' type='checkbox' />
          <label for='one7' onclick="filterZombi()">
            <span></span>
            Зомби
            <ins><i>Зомби</i></ins>
          </label>
        </section>
      </div>
    </div>
  </div>
</div>

  <div class="container d-lg-none d-xl-none" style="margin-top: 20px; padding: 0px;">    
    <h1 align="center" style="font-weight: 700;">Каталог</h1> 
       
     <?php
          include_once "include/game-mini.php"; 
     ?>
  </div>

         



<?php
include_once "include/footer.php"; 
?>
<script type="text/javascript">
  function filterAction() {
    var chbox;
    chbox=document.getElementById('one');

    if(!chbox.checked){
     $('.sport').attr('hidden', '');
     $('.rpg').attr('hidden', '');
     $('.strateg').attr('hidden', '');
     $('.gonki').attr('hidden', '');
     $('.simul').attr('hidden', '');
     $('.prikl').attr('hidden', '');
     $('.zombi').attr('hidden', '');
   } else {
     $('.sport').removeAttr('hidden');
     $('.rpg').removeAttr('hidden');
     $('.strateg').removeAttr('hidden');
     $('.gonki').removeAttr('hidden');
     $('.simul').removeAttr('hidden');
     $('.prikl').removeAttr('hidden');
     $('.zombi').removeAttr('hidden');
   }
 }
 function filterSport() {
  var chbox;
  chbox=document.getElementById('one1');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.prikl').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterRpg() {
  var chbox;
  chbox=document.getElementById('one2');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.prikl').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterStrateg() {
  var chbox;
  chbox=document.getElementById('one3');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.prikl').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterGonki() {
  var chbox;
  chbox=document.getElementById('one4');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.prikl').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterSimul() {
  var chbox;
  chbox=document.getElementById('one5');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.prikl').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterPrikl() {
  var chbox;
  chbox=document.getElementById('one6');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.zombi').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.zombi').removeAttr('hidden');
 }
}
function filterZombi() {
  var chbox;
  chbox=document.getElementById('one7');

  if(!chbox.checked){
   $('.action').attr('hidden', '');
   $('.sport').attr('hidden', '');
   $('.rpg').attr('hidden', '');
   $('.strateg').attr('hidden', '');
   $('.gonki').attr('hidden', '');
   $('.simul').attr('hidden', '');
   $('.prikl').attr('hidden', '');
 } else {
   $('.action').removeAttr('hidden');
   $('.sport').removeAttr('hidden');
   $('.rpg').removeAttr('hidden');
   $('.strateg').removeAttr('hidden');
   $('.gonki').removeAttr('hidden');
   $('.simul').removeAttr('hidden');
   $('.prikl').removeAttr('hidden');
 }
}
</script>
<style>

  body, html
  {
    background: #f6f6f6;
  }

</style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/799dcbfda5.js" crossorigin="anonymous"></script>

</body>
</html>