<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<style type="text/css">
		body{
			font-family: Arial;
			font-size: 15px;
		}
	</style>
</head>
<body>

	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin: 1px 10px;">
				<div class="col-sm-12">
			   		<div class="row">
						<div class="col-sm-12">
						  	<div class="form-group row">
							    <label class="col-sm-12 col-form-label">
							    	<?php
							    		$firstname = '';
							    		$middlename = '';
							    		$lastname = '';

							    		if(isset($request['firstname'])){
							    			$firstname = $request['firstname'];
							    		}
							    		if(isset($request['middlename'])){
							    			$middlename = $request['middlename'];
							    		}
							    		if(isset($request['lastname'])){
							    			$lastname = $request['lastname'];
							    		}
							    	?>

							    	This is a notification from CHAS Visitor Module. This is to inform you that your visitor named <?php echo $firstname . ' ' . $middlename . ' ' . $lastname ?>	<inputted name in CHAS - fn mn ln> from company <name of company> located at <company address> already filled-up his/her CHAS form dated <date nung fillup ng chas> and time <time>. Please be informed also that CHAS record of your visitor is already forwarded to record controllers of CHAS.
							    </label>
							    <br><br>
							    <label class="col-sm-12 col-form-label">
							    	Thank you!
							    </label>
						  	</div>
						</div>
					</div>
		  		</div>
			</div>

		</div>
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>