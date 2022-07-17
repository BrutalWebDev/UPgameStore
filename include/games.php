    <?php
    require_once 'include/db_connect.php';

    $ot = $_POST['ot']; 
    $do = $_POST['do'];
    $search = $_POST['search'];
    $sort = $_POST['sort'];

    if ($ot != '' && $do !='') {
      $res = mysqli_query($link, "SELECT * FROM game WHERE (price >= $ot) AND (price <= $do)");
      $rows = mysqli_num_rows($res); 
        echo "<p style='margin-left:auto; margin-top:auto; margin-bottom:auto;'>Найдено $rows товаров</p>
            </div>
          </div>";
      if($rows == 0){
        echo"
        <div class='content' style='background-color: #f6f6f6; margin-top:40px;'>
             <h2>К сожалению, ничего не найдено.</h2>
             <a href='../catalog' class='btn-rev'><b>Вернуться к просмотру каталога</b></a>
        </div>";  
      }
      while ($pole = mysqli_fetch_assoc($res)) {
      echo "
      <a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action ".$pole['clas']."'>
          <div class='row'>
            <div class='col-md-3'><img src='".$pole['image']."'></div>
            <div class='col-md-7' style='font-weight: 600;'>
              <div name='fear' id='fear' class='fear'>".$pole['title']."</div>
              <div class='row'>
                <div class='col-md-1'>
                  <img src='".$pole['platform']."' style='margin-left: 0px;'>
                </div>
                <p style='font-weight: 300; opacity: 0.8; margin-left: 10px; margin-top: 3px;'>".$pole['janr']."</p>                        
              </div>
            </div>
            <div class='col-md-2 text-center' style='font-weight: 600;'>
              <span class='badge badge-warning' style='margin-top: 18px;'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
      } else if ($search != '') {
      $res = mysqli_query($link, "SELECT * FROM game WHERE title LIKE '%$search%'");
      $rows = mysqli_num_rows($res); 
        echo "<p style='margin-left:auto; margin-top:auto; margin-bottom:auto;'>Найдено $rows товаров</p>
            </div>
          </div>";
      if($rows == 0){
        echo"
        <div class='content' style='background-color: #f6f6f6; margin-top:40px;'>
             <h2>К сожалению, ничего не найдено.</h2>
             <a href='../catalog' class='btn-rev'><b>Вернуться к просмотру каталога</b></a>
        </div>";  
      }   
      while ($pole = mysqli_fetch_assoc($res)) {
      echo "<a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action ".$pole['clas']."'>
          <div class='row'>
            <div class='col-md-3'><img src='".$pole['image']."'></div>
            <div class='col-md-7' style='font-weight: 600;'>
              <div name='fear' id='fear' class='fear'>".$pole['title']."</div>
              <div class='row'>
                <div class='col-md-1'>
                  <img src='".$pole['platform']."' style='margin-left: 0px;'>
                </div>
                <p style='font-weight: 300; opacity: 0.8; margin-left: 10px; margin-top: 3px;'>".$pole['janr']."</p>                        
              </div>
            </div>
            <div class='col-md-2 text-center' style='font-weight: 600;'>
              <span class='badge badge-warning' style='margin-top: 18px;'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";} 
      } else
      {
      if ($sort != '') {
        $res = mysqli_query($link, "SELECT * FROM game ORDER BY $sort");
        $rows = mysqli_num_rows($res); 
        echo "<p style='margin-left:auto; margin-top:auto; margin-bottom:auto;'>Найдено $rows товаров</p>
            </div>
          </div>";
        while ($pole = mysqli_fetch_assoc($res)) {
         echo "  
         <a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action ".$pole['clas']."'>
          <div class='row'>
            <div class='col-md-3'><img src='".$pole['image']."'></div>
            <div class='col-md-7' style='font-weight: 600;'>
              <div name='fear' id='fear' class='fear'>".$pole['title']."</div>
              <div class='row'>
                <div class='col-md-1'>
                  <img src='".$pole['platform']."' style='margin-left: 0px;'>
                </div>
                <p style='font-weight: 300; opacity: 0.8; margin-left: 10px; margin-top: 3px;'>".$pole['janr']."</p>                        
              </div>
            </div>
            <div class='col-md-2 text-center' style='font-weight: 600;'>
              <span class='badge badge-warning' style='margin-top: 18px;'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
      } else {
        $res = mysqli_query($link, "SELECT * FROM game");
        $rows = mysqli_num_rows($res); 
        echo "<p style='margin-left:auto; margin-top:auto; margin-bottom:auto;'>Найдено $rows товаров</p>
            </div>
          </div>";
        while ($pole = mysqli_fetch_assoc($res)) {
         echo "
         <a style=' color:#000; border: 1px solid #f1f1f1;' href='".$pole['href']."' class='list-group-item list-group-item-action ".$pole['clas']."'>
          <div class='row'>
            <div class='col-md-3'><img src='".$pole['image']."'></div>
            <div class='col-md-7' style='font-weight: 600;'>
              <div name='fear' id='fear' class='fear'>".$pole['title']."</div>
              <div class='row'>
                <div class='col-md-1'>
                  <img src='".$pole['platform']."' style='margin-left: 0px;'>
                </div>
                <p style='font-weight: 300; opacity: 0.8; margin-left: 10px; margin-top: 3px;'>".$pole['janr']."</p>                        
              </div>
            </div>
            <div class='col-md-2 text-center' style='font-weight: 600;'>
              <span class='badge badge-warning' style='margin-top: 18px;'>-".$pole['sale']."%</span><br>
              ".$pole['price']." ₽
            </div>
          </div>
        </a>";}
      }
      }       
    ?>