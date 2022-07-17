<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Exo+2|IBM+Plex+Sans" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../css/app.css">
	<?php  
	$price = $_POST['price']; 
	$email = $_POST['email'];
	?>
	
	<meta http-equiv="REFRESH" content="3; URL= https://qiwi.com/payment/form/99?amountFraction=0&amp;extra%5B%27comment%27%5D=<?php echo $email; ?>&amp;extra%5B%27account%27%5D=%2B79113484460&amp;amountInteger=<?php echo $price; ?>&amp;currency=643&amp;blocked[0]=sum&amp;blocked[1]=account&amp;blocked[2]=comment">


</head>
<body>

<div class="content">
	<div class="qiwi-block">
		<div class="logo-tip">
			<img src="../img/pay/qiwi-shluz.png" height="150px" width="150px">
			<div class="order">Заказ №54680</div>

			<div class="qiwi-text"> Вы будете перенаправлены на платежный шлюз QIWI через </div>


			<div class="qiwi-counter">
				<span id="en">-200</span>
				<script>
					var start = 3;
					document.getElementById("en").innerHTML = start;
					setInterval(function(){ 
						start--;
						document.getElementById("en").innerHTML = start;
					}, 1000)
				</script>


			</div>

		</div>

	</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>