     <?php
     require_once 'include/db_connect.php';
     ?>


    <?php
    $res = mysqli_query($link, "SELECT * FROM game WHERE sale >= '80'");
    while ($pole = mysqli_fetch_assoc($res)) {
      echo "<a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action' onmouseout='document.getElementById('fear').style.color = '#000'' onmouseover='document.getElementById('fear').style.color = '#ff793a''>
          <div class='row'>
            <div class='col-md-4'><img style='max-width:100px;' src='".$pole['image']."'></div>
            <div class='col-md-5' style='font-weight: 600;'>
              <div name='fear' class='fear' id='fear' style='font-size:12px;'>".$pole['title']."</div>
            </div>
            <div class='col-md-3 text-center' style='font-weight: 600; font-size: 14px;'>
              <span class='badge badge-warning'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
    
    ?>