<!DOCTYPE html>
<html>
<head>
	<title>CHAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body style="background: url('../images/covid19.png'); background-size: cover; background-repeat: no-repeat;">

	<div class="container">
		<div class="container-fluid">
			<center>
				<br><br><br><br><br><br>
				<div class="card" style="width: 500px; border-radius: 20px;">
				  	<div class="card-body">
				  		<img src="../images/check-icon.png" style="max-width: 100px;">
				  		<br><br>
				    	<h4 class="text-center"><b>SUBMISSION CONFIRMED!</b></h4>
				    	<label style="font-size: 20px;">Thank your for answering the PMI Health Assessment Questionnaire Form. Your provided information is subject for review.</label style="font-size: 20px;">
			    		<br><br>
				    	<a href="../index.php" class="btn btn-primary">GO BACK</a>	
				  	</div>
				</div>
			</center>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		let mins = 15;
		let idleLimit = mins * 60;
		let timer = idleLimit;

		setInterval(function(){ 
			timer--;
			// console.log(timer);
			if(timer <= 0){
				window.location = 'https://www.pricon.com.ph/index.php/en/';
			}
		}, 1000);

		$(function(){
			$(document).mousemove(function(event){
			  	timer = idleLimit;
			});

			$(document).keyup(function(event){
			  	timer = idleLimit;
			});
		});
	</script>
</body>
</html>