     <?php
     require_once '../include/db_connect.php';
     ?>
        <?php

    $id_game = $_POST['id_game'];

    ?>  
  
    <?php
    $k = '&#039;';
    $res = mysqli_query($link, "SELECT * FROM game WHERE (id_game='".$id_game."')");
    while ($pole = mysqli_fetch_assoc($res)) {
      echo "<a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action' onmouseout='document.getElementById(".$k."fear".$k.").style.color = ".$k."#000".$k.";' onmouseover='document.getElementById(".$k."fear".$k.").style.color = ".$k."#ff793a".$k.";'>
          <div class='row'>
            <div class='col-md-2'><img src='".$pole['image']."'></div>
            <div class='col-md-6' style='font-weight: 600;'>
              <div name='fear' id='fear'>".$pole['title']."</div>
              <div class='row'>
                <div class='col-md-1'>
                  <img src='".$pole['platform']."' style='margin-left: 0px;'>
                </div>
                <p style='font-weight: 300; opacity: 0.8; margin-left: 10px; margin-top: 3px;'>".$pole['janr']."</p>                        
              </div>
            </div>
            <div class='col-md-2'></div>
            <div class='col-md-2 text-center' style='font-weight: 600;'>
              <span class='badge badge-warning' style='margin-top: 18px;'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
     
    ?>