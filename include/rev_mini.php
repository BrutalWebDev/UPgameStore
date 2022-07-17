     <?php
     require_once '../include/db_connect.php';
     ?>

     <?php
    	$res = mysqli_query($link, "SELECT * FROM review");
    	while ($pole = mysqli_fetch_assoc($res)) {
      echo "<h4 align='left' style='font-weight: 600;'>".$pole['name']."</h4> 
            <p>".$pole['review']."</p>";}
   
    ?>

