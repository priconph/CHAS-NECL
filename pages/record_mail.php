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

		.text-green{
			color: green;
			font-weight: bold;
		}

		/*.input[type="radio"]{
			font
		}*/
	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin: 1px 10px;">
				<div class="col-sm-12">
					<form id="frmSaveRecord">
				   		<div class="row">
				   			<div class="col-sm-12">
			   					<label style="font-size: 18px;">Good day!</label><br>
				   				<label style="font-size: 18px;">Thank you for answering the COVID19 Health Assessment Form for PMI Visitors. Please see below your submitted answers as of today <?php echo date("m/d/Y H:i:s") ?></label>
				   				<br><br>
				   				<hr>
				   			</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>LASTNAME: </b><span class="text-green"><?php echo $request["lastname"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>FIRSTNAME: </b><span class="text-green"><?php echo $request["firstname"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>MIDDLENAME: </b><span class="text-green"><?php echo $request["middlename"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>RESIDENCE: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>YOUR COMPANY E-MAIL: </b><span class="text-green"><?php echo $request["email"]; ?> </span></label>
							  	</div>
							</div>



							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>YOUR POSITION IN THE COMPANY: </b><span class="text-green"><?php echo $request["position_in_company"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>COMPANY NAME: </b><span class="text-green"><?php echo $request["company_name"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>COMPANY ADDRESS LOCATION: </b><span class="text-green"><?php echo $request["company_address"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>NATURE OF VISIT: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>NAME PERSON TO BE VISITED IN PMI: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>POSITION OF THE PERSON TO BE VISITED IN PMI: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>E-MAIL ADDRESS OF THE PERSON TO BE VISITED IN PMI: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>UPLOAD IMAGE OF COMPANY ID / GOVERNMENT ID WITH SIGNATURE: </b><span class="text-green"><?php echo $request["residence"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>YOUR POSITION IN THE COMPANY: </b><span class="text-green"><?php echo $request["email"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>COMPANY NAME: </b><span class="text-green"><?php echo $request["email"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
								<label><b>1 - Are you experiencing the following:</b></label>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A. What is your current body temperature? <span class="text-green"></span> <?php echo $request["body_temperature"]; ?> </span></label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">B. Is your body temperature over 37.5 C? 
								    	<?php
								    		if($request["over_37_5"] == 1){
								    			echo '<span class="text-green">Yes</span>';
								    		}
								    		else{
								    			echo '<span class="text-green">No</span>';
								    		}
								    	?>
								    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">C. Sore throat (pananakit ng lalamunan / masakit lumunok). 
								    	<?php
								    		if($request["sore_throat"] == 1){
								    			echo '<span class="text-green">Yes</span>';
								    		}
								    		else{
								    			echo '<span class="text-green">No</span>';
								    		}
								    	?>
								    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">D. Cough and hard to breath (ubo na may kasamang hirap huminga). 
								    <?php
							    		if($request["cough_hard_to_breath"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
								<label><b>2 - Worked together or stayed in the same close environment of a CONFIRMED COVID-19 case (May nakasalamuha ka ba o nakatrabahong tao na kumpirmadong may COVID-19/may impeksyon ng coronavirus). 

								</b></label>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A. Close contact with health care worker or person who has exposure in caring patient with COVID-19?(May nakasama ka ba health care worker or taong nag-aalaga na may COVID-19?) 
									<?php
							    		if($request["close_contact"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    	</label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">B. Living in the same household as a COVID-19 patient? (may kasama sa bahay na may COVID-19?) 
								    <?php
							    		if($request["living_in_same_household"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    	</label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>3 - Have travelled outside of the Philippines in the last 14 days? (Ikaw ba ay nagbiyahe sa labas ng Pilipinas sa nakalipas na 14 na araw?) 
								    <?php
							    		if($request["travelled_outside"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    </b></label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label"><b>4 - Do you had any sickness in the past 2 weeks other than mentioned above? (Ikaw ba ay nagkaroon ng kahit anong sakit sa nakalipas na dalawang (2) linggo maliban sa nabanggit sa taas?)
								    <?php
							    		if($request["any_sickness"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?></b></label>

							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A. Please specify what are those sickness. (Isulat kung ano ang mga sakit na iyon.) 
								    	<?php 
								    	if(isset($request["sickness"])){
								    		echo '<span class="text-green">{{ $request["sickness"] }}</span>';
									    	if(empty($request["sickness"])){
									    		echo '<span class="text-green">No answer</span>';
									    	}
								    	}
								    	else{
								    		echo '<span class="text-green">No answer</span>';
								    	}
								    	?>
								    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
								<label><b>5 - Mode of transport in reporting to work (Ginamit na sasakyan papasok sa company)</b></label>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A1. Company / Personal Car/ Motorcycle? (Sumakay ka ba gamit ng iyong personal na sasakyan/ company car/ motorsiklo?)

								    	<?php
							    		if($request["personal_car"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    	</label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A2. What is the Plate Number of your Company/ Personal Car/ Motorcycle? (Ano ang plate number ng iyong personal na sasakyan/ company car/ motorsiklo?) 
								    	<?php 
								    	if(isset($request["personal_car_plate_no"])){
								    		echo '<span class="text-green">{{ $request["personal_car_plate_no"] }}</span>';
									    	if(empty($request["personal_car_plate_no"])){
									    		echo '<span class="text-green">No answer</span>';
									    	}
								    	}
								    	else{
								    		echo '<span class="text-green">No answer</span>';
								    	}
								    	?>
								    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">A3. What is the arrival time in PMI of Company/ Personal Car/ Motorcycle? (Anong oras ka dumating sa PMI gamit ang iyong personal na sasakyan/ company car/ motorsiklo?) 
							    	<?php
							    		if($request["personal_car_arrival_time"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
								    </label>
							  	</div>
							  	<br>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">B1. Walk In? (Naglakad ka ba papasok ng PMI?) 
								    <?php
							    		if($request["walk_in"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
							    	</label>
							  	</div>
							</div>

							<div class="col-sm-12">
							  	<div class="form-group row">
								    <label class="col-sm-12 col-form-label">B2. What is your arrival time in PMI if Walk In? (Anong oras ka dumating sa PMI kung ikaw ay naglakad?)
						    		<?php
							    		if($request["walk_in_arrival_time"] == 1){
							    			echo '<span class="text-green">Yes</span>';
							    		}
							    		else{
							    			echo '<span class="text-green">No</span>';
							    		}
							    	?>
								    </label>
							  	</div>
							</div>

							<div class="col-sm-12">
								<hr>
							</div>

							<div class="col-sm-12">
								<br><br>
				   				<label style="font-size: 18px;"><b>For concerns on using the form, please contact ISS at local numbers 205, 206, or 208. You may send us e-mail at <a href="mailto: servicerequest@pricon.ph">servicerequest@pricon.ph</a></b></label>
				   			</div>
						</div>

				   		</div>
					</form>
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