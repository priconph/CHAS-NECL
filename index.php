<!DOCTYPE html>
<html>
<head>
	<title>CHAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background: url('images/covid19.png'); background-size: cover; background-repeat: no-repeat;">
	<!-- <img src="{{ asset('public/images/covid19.png') }}" style="max-width: 400px; float: left;"> -->
	<div class="container">
		<div class="container-fluid">
			<center>

				<div class="row">
					<div class="col-sm-12">
						<br><br>

						<!-- <h1 style="color: white; font-size: 40px; font-weight: none;">PRICON MICROELECTRONICS, INC.</h1> -->
						<img src="images/priconlogo.png" style="max-height: 50px;"><br><br>
						<h1 style="color: white; font-size: 50px; font-weight: bold;">NECL</h1><br>
						<h1 style="color: white; font-size: 40px; font-weight: bold;">COVID-19 HEALTH ASSESSMENT SYSTEM</h1>
						<h1 style="color: white; font-size: 40px; font-weight: bold;">(CHAS)</h1>
						<br><br><br>
							<!-- <h3 style="color: white;"> Please select</h3>
						<br> -->
					</div>
				</div>

				<!-- <div class="row">
					<div class="col-sm-2">
					</div>

					<div class="col-sm-4">
						<div class="card" style="width: 18rem; min-height: 210px;">
						  <div class="card-body">
						    <h3 class="card-title" style="font-size: 20px;">PMI EMPLOYEE</h3>
						    <a href="pmi" class="btn btn-primary" style="margin-top: 15px;">Go to Form</a>
						  </div>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="card" style="width: 18rem; min-height: 210px;">
						  <div class="card-body">
						    <h3 class="card-title" style="font-size: 20px;">SUBCON EMPLOYEE</h3>
						    <a href="subcon" class="btn btn-primary" style="margin-top: 15px;">Go to Form</a><br>
						    <p style="font-size: 15px; margin-top: 15px; padding-bottom: 1px;">FAMSI, JOBCREST, PIPOLS, SRI, KRIS SECURITY, LETTERED L, AERO PLUS</p>
						  </div>
						</div>
					</div>
				</div> -->

				<center>
					<div class="card" style="width: 18rem; min-height: 210px;">
					  <div class="card-body">
					  	<br>
					    <h3 class="card-title" style="font-size: 20px;">NECL EMPLOYEES' CHAS</h3>
					    <a href="pages/necl.php" class="btn btn-primary" style="margin-top: 15px;">Go to Form</a><br>
					    <!-- <p style="font-size: 15px; margin-top: 15px; padding-bottom: 1px;">FAMSI, JOBCREST, PIPOLS, SRI, KRIS SECURITY, LETTERED L, AERO PLUS</p> -->
					  </div>
					</div>

					<br><br><br>	
					<!--<a href="https://www.pricon.com.ph/index.php/en/" class="btn btn-success" style="font-size: 23px;">Go to Home</a>-->
				</center>
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
				// window.location = 'http://192.168.3.235/e-portal/';
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