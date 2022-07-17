     <?php
     require_once 'include/db_connect.php';
     ?>


    <?php
    $res = mysqli_query($link, "SELECT * FROM game WHERE popular = 'y'");

    while ($pole = mysqli_fetch_assoc($res)) {
      echo "
      <a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action' onmouseout='document.getElementById('fear').style.color = '#000'' onmouseover='document.getElementById('fear').style.color = '#ff793a''>
          <div class='row'>
            <div class='col'>
              <img style='max-width:100px;' src='".$pole['image']."'>
            </div>
            <div class='col' style='padding:0;'>
              <div name='fear' id='fear' style='font-size:12px;font-weight: 600;'>".$pole['title']."</div>
            </div>
            <div class='col text-center' style='font-weight: 600; padding:0; font-size:18px;'>
              <span class='badge badge-warning'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
    
    ?>