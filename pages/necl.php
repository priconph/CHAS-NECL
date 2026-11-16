<!DOCTYPE html>
<html>
<head>
	<title>CHAS - NECL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	<style type="text/css">
		.border-error{
			border: 2px solid red;
		}

		.border-danger{
			border: 2px solid red;
		}

		.loader {
	      position: fixed;
		  top: 50%;
		  left: 50%;
		  margin-top: -50px;
  		  margin-left: -100px;
		  border: 16px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 16px solid #3498db;
		  width: 130px;
		  height: 130px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
	</style>
</head>
<body style="background: url('../images/covid19.png'); background-size: cover; background-repeat: no-repeat;">

	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="row" style="margin: 1px 10px;">
						<div class="col-sm-12">
							<br><br><br>
							<div class="card">
							  	<div class="card-header">
							    	<h4 class="text-center">PMI COVID-19 Health Assessment Questionnaire for NECL Employees</h4>
							  	</div>
							   	<div class="card-body">
									<form id="frmSaveRecord" enctype="multipart/form-data" autocomplete="off">
								   		<div class="row">
								   			<div class="col-sm-12">
							   					<label style="font-size: 18px;"><b>All NECL employees are required to complete this questionnaire. This questionnaire hopes to assess your risk condition. The undersigned declares that the answers to the following questions are true to the best of his/her knowledge: </b></label>
								   				<hr>
								   				<label style="font-size: 18px;"><b>SUPPORT NOTE: If you are experiencing issues on this form, please contact Information Systems Section at group-iss@pricon.ph.</b></label>
								   				<hr>
								   				<label style="font-size: 18px;"><b>NOTE: All fields with asterisk (<span class="text-danger">*</span>) are required.</b></label>
								   				<hr>
								   			</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">EMPLOYEE NO.: <span class="text-danger">*</span></label>
												    <div class="col-sm-12">
													  	<input type="text" class="form-control" name="employee_no" placeholder="Enter Employee No.">
													  	<input type="hidden" class="form-control" name="action" value="save_record" placeholder="Action">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">LASTNAME: <span class="text-danger">*</span></label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
												      <input type="text" class="form-control" name="record_status" value="1" readonly="true" style="display: none;">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">FIRSTNAME: <span class="text-danger">*</span></label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">MIDDLENAME: </label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">EMAIL: </label>
												    <div class="col-sm-12">
												      <input type="email" class="form-control" name="email" placeholder="Enter Email">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">COMPLETE ADDRESS: <span class="text-danger">*</span></label>
												    <div class="col-sm-12">
												      <textarea class="form-control" name="address" rows="3" resize="false"></textarea>
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">CURRENT ADDRESS (OPTIONAL): <i>(If you are boarding, renting, or currently using other address)</i> </label>
												    <div class="col-sm-12">
												      <textarea class="form-control" name="current_address" rows="3" resize="false" placeholder="(Optional)"></textarea>
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
												<hr>
												<h6><b>1 - Are you experiencing the following: (<i>Nararanasan mo ba ang mga sumusunod: </i>)</b></h6>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A. What is your current body temperature? (<i>Ano ang kasalukuyang temperatura ng iyong katawan?</i>) <span class="text-danger">*</span> </label>
												    <div class="col-sm-12">
												      <input type="number" step="0.1" class="form-control" name="body_temperature" placeholder="00.0">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">B. Is your body temperature over 37.5 C? (<i>Ang iyong temperatura ba ay higit sa 37.5 C?</i>) <br>(Automatically answered based on question letter A)<span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="rdoActions" arr-index="0" name="over_37_5_yes" value="1" disabled="true"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="0" name="over_37_5_no" value="0" disabled="true"> No
												      <input type="text" class="" name="over_37_5" readonly="true" style="display: none;">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">C. Sore throat (<i>Pananakit ng lalamunan / masakit lumunok</i>). <span class="text-danger">*</span> </label>
												    <div class="col-sm-8">
												      <input type="radio" class="rdoActions" arr-index="1" name="sore_throat" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="1" name="sore_throat" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">D. Cough and hard to breathe (<i>Ubo na may kasamang hirap huminga</i>). <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="rdoActions" arr-index="2" name="cough_hard_to_breath" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="2" name="cough_hard_to_breath" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
												<hr>
												<h6><b>2 - Worked together or stayed in the same close environment of a CONFIRMED COVID-19 case (<i>May nakasalamuha ka ba o nakatrabahong tao na kumpirmadong may COVID-19/may impeksyon ng coronavirus</i>). <span class="text-danger">*</span></b></h6>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A. Close contact with health care worker or person who has exposure in caring patient with COVID-19? (<i>May nakasama ka ba na health care worker o taong nag-aalaga na may COVID-19?</i>) <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="rdoActions" arr-index="3" name="close_contact" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="3" name="close_contact" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">B. Living in the same household as a COVID-19 patient? (<i>May kasama sa bahay na may COVID-19?</i>) <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="rdoActions" arr-index="4" name="living_in_same_household" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="4" name="living_in_same_household" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
												<hr>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label"><b>3 - Have travelled outside of the Philippines in the last 14 days? (<i>Ikaw ba ay nagbiyahe sa labas ng Pilipinas sa nakalipas na 14 na araw?</i>) <span class="text-danger">*</span></b></label>
												    <div class="col-sm-8" style="padding-left: 50px;">
												      <input type="radio" class="rdoActions" arr-index="5" name="travelled_outside" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="5" name="travelled_outside" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
												<hr>
											</div>

											<div class="col-sm-12">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label"><b>4 - Do you had any sickness in the past 2 weeks other than mentioned above? (<i>Ikaw ba ay nagkaroon ng kahit anong sakit sa nakalipas na dalawang (2) linggo maliban sa nabanggit sa taas?</i>) <span class="text-danger">*</span></b></label>
												    <div class="col-sm-8" style="padding-left: 50px;">
												      <input type="radio" class="rdoActions" arr-index="6" name="any_sickness" id="rdoSicknessYes" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="rdoActions" arr-index="6" name="any_sickness" id="rdoSicknessNo" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A. Please specify what are those sickness. (<i>Isulat kung ano ang mga sakit na iyon.</i>)</label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="sickness" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
											<hr>
												<h6><b>5 - Mode of transport in reporting to work (<i>Ginamit na sasakyan papasok sa kumpanya</i>)</b></h6>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A1. Shuttle service vehicle (bus/van/coaster)? (<i>Sumakay ka ba ng service vehicle bus/van/coaster?</i>) <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="" id="rdoShuttleServiceYes" name="shuttle_service" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="" id="rdoShuttleServiceNo" name="shuttle_service" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A2. What is the Bus / Van / Coaster Body or plate number? (<i>Ano ang body or plate number ng nasakyan mong Bus/ Van/ Coaster?</i>)</label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="bus_plate_no" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">A3. What is the arrival time in PMI of shuttle service vehicle? (<i>Anong oras dumating sa PMI ang nasakyan mong shuttle service?</i>)</label>
												    <div class="col-sm-12">
												      <input type="time" class="form-control" name="bus_arrival_time" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">B1. Company / Personal Car/ Motorcycle? (<i>Sumakay ka ba gamit ng iyong personal na sasakyan/ company car/ motorsiklo?</i>) <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="" id="rdoPersonalCarYes" name="personal_car" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="" id="rdoPersonalCarNo" name="personal_car" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">B2. What is the Plate Number of your Company/ Personal Car/ Motorcycle? (<i>Ano ang plate number ng iyong personal na sasakyan/ company car/ motorsiklo?</i>)</label>
												    <div class="col-sm-12">
												      <input type="text" class="form-control" name="personal_car_plate_no" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">B3. What is the arrival time in PMI of Company/ Personal Car/ Motorcycle? (<i>Anong oras ka dumating sa PMI gamit ang iyong personal na sasakyan/ company car/ motorsiklo?</i>)</label>
												    <div class="col-sm-12">
												      <input type="time" class="form-control" name="personal_car_arrival_time" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">C1. Walk In? (<i>Naglakad ka ba papasok ng PMI?</i>) <span class="text-danger">*</span></label>
												    <div class="col-sm-8">
												      <input type="radio" class="" id="rdoWalkInYes" name="walk_in" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												      <input type="radio" class="" id="rdoWalkInNo" name="walk_in" value="0"> No
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12" style="padding-left: 50px;">
											  	<div class="form-group row">
												    <label class="col-sm-12 col-form-label">C2. What is your arrival time in PMI if walk-in? (<i>Anong oras ka dumating sa PMI kung ikaw ay naglakad?</i>)</label>
												    <div class="col-sm-12">
												      <input type="time" class="form-control" name="walk_in_arrival_time" placeholder="Your answer">
												    </div>
											  	</div>
											</div>

											<div class="col-sm-12">
												<hr>
											</div>

											<div class="col-sm-12">
												<h6><b>I hereby authorize PRICON MICROELECTRONICS, INC. to collect and process the data indicated herein for the purpose of effecting control of the COVID-19 infection. I understand that my personal information is protected by RA 10173, Data Privacy Act of 2012, and that I am required by RA 11469, Bayanihan to Heal as One Act, to provide truthful information.</b></h6>
												<br><br><br>
												<center>
												<h6 style="font-size: 18px;"><b class="text-danger">PLEASE REVIEW YOUR ANSWERS BEFORE SUBMITTING THIS FORM!</b> <br> <i>(Ugaliing suriing mabuti ang iyong mga sagot bago isumite ang form na ito.)</i></h6></center>
											</div>

											<div class="col-sm-12">
												<hr>
												<center>
													<button type="submit" class="btn btn-primary" id="btnSubmit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="../index.php" class="btn btn-secondary">BACK</a>
												</center>
											</div>
										</div>
									</form>
						  		</div>
							</div>
						</div>

					</div>

				</div>
			</div>
			
		</div>
	</div>

	<div class="modal" tabindex="-1" role="dialog" id="mdlConfirmationMessage" style="-webkit-overflow-scrolling: touch;">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">CONFIRMATION MESSAGE</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
		<form id="frmConfirm">
	      <div class="modal-body">
				@csrf
		   		<div class="row">
		   			<div class="col-sm-12">
					  	<div class="form-group row">
						    <label class="col-sm-12 col-form-label">This is to inform you that you've answered the following questions with "YES": </label>
						    <div class="col-sm-12">
						    	<br>
						      	<ul id="ulAnsweredYesQuestions">
						      		<!-- Code genereated -->
						      	</ul>
						    </div>
					  	</div>
					</div>

					<div class="col-sm-12">
					  	<div class="form-group row">
						    <label class="col-sm-12 col-form-label"><b>DO YOU REALLY WANT TO SUBMIT THIS FORM?</b></label>
						    <label class="col-sm-12 col-form-label">Click the button "YES" if you want to submit, otherwise click button "NO" to go back and change your answer(s).</label>
					  	</div>
				  	</div>
				</div>
	      </div>
	      <div class="modal-footer"> 
	        <button type="submit" class="btn btn-primary" id="btnConfirm">YES</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-left: 20px;">NO</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal" tabindex="-1" role="dialog" id="mdlLoader" data-backdrop="static">
	  <!-- <div class="modal-dialog" role="document"> -->
	    <!-- <div class="modal-content"> -->
	    	<!-- <center> -->
				<div class="loader"></div>
	    	<!-- </center> -->
	    <!-- </div> -->
	  <!-- </div> -->
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script type="text/javascript">
		let arrIndexQuestions = [
			'1 - B. Is your body temperature over 37.5 C? (Ang iyong temperatura ba ay higit sa 37.5 C?) (Automatically answered based on question letter A)',
			'1- C. Sore throat (Pananakit ng lalamunan / masakit lumunok)',
			'1 - D. Cough and hard to breathe (Ubo na may kasamang hirap huminga)',
			'2 - A. Close contact with health care worker or person who has exposure in caring patient with COVID-19? (May nakasama ka ba na health care worker o taong nag-aalaga na may COVID-19?)',
			'2 - B. Living in the same household as a COVID-19 patient? (May kasama sa bahay na may COVID-19?)',
			'3 - Have travelled outside of the Philippines in the last 14 days? (Ikaw ba ay nagbiyahe sa labas ng Pilipinas sa nakalipas na 14 na araw?)',
			'4 - Do you had any sickness in the past 2 weeks other than mentioned above? (Ikaw ba ay nagkaroon ng kahit anong sakit sa nakalipas na dalawang (2) linggo maliban sa nabanggit sa taas?)',
		];

		let arrYesAnswers = [];

		let arrFinalYesQuestions = [];

		$(document).ready( function(){
			toastr.options = {
		      "closeButton": false,
		      "debug": false,
		      "newestOnTop": true,
		      "progressBar": true,
		      "positionClass": "toast-top-right",
		      "preventDuplicates": false,
		      "onclick": null,
		      "showDuration": "300",
		      "hideDuration": "3000",
		      "timeOut": "3000",
		      "extendedTimeOut": "3000",
		      "showEasing": "swing",
		      "hideEasing": "linear",
		      "showMethod": "fadeIn",
		      "hideMethod": "fadeOut",
		    };

		    $(".rdoActions").click(function(){
				let value = $(this).val();
				let arrIndex = $(this).attr('arr-index');

				if(value == 1){
					if(!arrYesAnswers.includes(arrIndex)){
						arrYesAnswers.push(arrIndex);
					}
				}
				else{
					let removeByIndex = arrYesAnswers.indexOf(arrIndex);

					if(removeByIndex >= 0){
						arrYesAnswers.splice(removeByIndex, 1)
					}
				}

				arrFinalYesQuestions = [];

				for(let index = 0; index < arrYesAnswers.length; index++){
					arrFinalYesQuestions.push(arrIndexQuestions[arrYesAnswers[index]]);
				}

				console.log(arrFinalYesQuestions);

				let liResults = "";

				for(let index = 0; index < arrFinalYesQuestions.length; index++){
					liResults += '<li>' + arrFinalYesQuestions[index] + '</li>';
				}

				$("#ulAnsweredYesQuestions").html(liResults);

				// $("#mdlConfirmationMessage").modal('show');
			});

		    // ADJUST	
			$("#rdoSicknessYes").click(function(){
		        $("input[name='sickness']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='sickness']", $("#frmSaveRecord")).val('');
			});
			$("#rdoSicknessNo").click(function(){
		        $("input[name='sickness']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='sickness']", $("#frmSaveRecord")).val('');
			});

			$("#rdoShuttleServiceYes").click(function(){
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).val('');

		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoPersonalCarYes").prop('checked', false);
		        $("#rdoPersonalCarNo").prop('checked', true);

		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoWalkInYes").prop('checked', false);
		        $("#rdoWalkInNo").prop('checked', true);
			});
			$("#rdoShuttleServiceNo").click(function(){
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).val('');
			});

			$("#rdoPersonalCarYes").click(function(){
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).val('');

		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoShuttleServiceYes").prop('checked', false);
		        $("#rdoShuttleServiceNo").prop('checked', true);

		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoWalkInYes").prop('checked', false);
		        $("#rdoWalkInNo").prop('checked', true);
			});
			$("#rdoPersonalCarNo").click(function(){
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).val('');
			});

			$("#rdoWalkInYes").click(function(){
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).prop('readonly', false);
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).val('');

		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoPersonalCarYes").prop('checked', false);
		        $("#rdoPersonalCarNo").prop('checked', true);
				
				$("input[name='bus_plate_no']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_plate_no']", $("#frmSaveRecord")).val('');
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='bus_arrival_time']", $("#frmSaveRecord")).val('');
		        $("#rdoShuttleServiceYes").prop('checked', false);
		        $("#rdoShuttleServiceNo").prop('checked', true);
			});
			$("#rdoWalkInNo").click(function(){
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).prop('readonly', true);
		        $("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).val('');
			});
			// ADJUST

			$("#frmSaveRecord").submit(function(e){
				e.preventDefault();
				// SaveRecord();
				if(arrFinalYesQuestions.length > 0){
					$("#mdlConfirmationMessage").modal('show');
				}
				else{
					SaveRecord(this);
					// console.log(this);
					// console.log($("#frmSaveRecord"));
					// console.log($("#frmSaveRecord")[0]);
					// console.log('OK LAHAT!');
				}
			});

			$("#frmConfirm").submit(function(e){
				e.preventDefault();
				SaveRecord($("#frmSaveRecord")[0]);
				// console.log('CONFIRMED!');
			});

			$("input[name='body_temperature'", $("#frmSaveRecord")).keyup(function(){
				let bodyTemp = $(this).val();
				if(parseFloat(bodyTemp) > 37.5){
					$("input[name='over_37_5_yes'", $("#frmSaveRecord")).prop('checked', true);
					$("input[name='over_37_5_no'", $("#frmSaveRecord")).prop('checked', false);
					console.log('high');
					$("input[name='over_37_5'", $("#frmSaveRecord")).val(1);
				}
				else{
					$("input[name='over_37_5'", $("#frmSaveRecord")).val(0);
					$("input[name='over_37_5_yes'", $("#frmSaveRecord")).prop('checked', false);
					$("input[name='over_37_5_no'", $("#frmSaveRecord")).prop('checked', true);
				}
			});

			$("input[type='text']", $("#frmSaveRecord")).keyup(function(){
				$(this).val($(this).val().toUpperCase());
			});

			$("input[type='text']", $("#frmSaveRecord")).keypress(function(){
				$(this).val($(this).val().toUpperCase());
			});

			$("textarea", $("#frmSaveRecord")).keyup(function(){
				$(this).val($(this).val().toUpperCase());
			});

			$("textarea", $("#frmSaveRecord")).keypress(function(){
				$(this).val($(this).val().toUpperCase());
			});

			$(".select2").select2();
			// GetSections($("select[name='section_id']", $("#frmSaveRecord")), null);
			// GetDepartments($("select[name='department_id']", $("#frmSaveRecord")));

			// $("input[name='department']", $("#frmSaveRecord")).val($("select[name='department_id']", $("#frmSaveRecord")).select2('data')[0].text);
			// $("input[name='section']", $("#frmSaveRecord")).val($("select[name='section_id']", $("#frmSaveRecord")).select2('data')[0].text);

			// $("select[name='department_id']", $("#frmSaveRecord")).change(function(){
			// 	// GetSections($("select[name='section_id']", $("#frmSaveRecord")), $(this).val());

			// 	$("input[name='department']", $("#frmSaveRecord")).val($(this).select2('data')[0].text);
			// });

			// $("select[name='section_id']", $("#frmSaveRecord")).change(function(){
			// 	$("input[name='section']", $("#frmSaveRecord")).val($(this).select2('data')[0].text);
			// });
		});

		function SaveRecord(formData){
			$.ajax({
				url: '../handler/handler.php',
				method: 'post',
				// data: $("#frmSaveRecord").serialize() + '&action=save_record',
				data: new FormData(formData),
				method: 'post',
	            // data: new FormData(this),
	            dataType: 'json',
	            cache: false,
	            contentType: false,
	            processData: false,
				beforeSend(){
					$("#btnSubmit").prop('disabled', true);
					$("#mdlLoader").modal('show');
				},
				success(data){
					$("#mdlLoader").modal('hide');
					$("#mdlConfirmationMessage").modal('hide');
					if(data['result'] == 1){
						window.location = "success.php";
					}
					else if(data['result'] == 0){
						if(data['error'] != null && data['error'].employee_no != null){
							$("input[name='employee_no']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='employee_no']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].lastname != null){
							$("input[name='lastname']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='lastname']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].firstname != null){
							$("input[name='firstname']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='firstname']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].email != null){
							$("input[name='email']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='email']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].address != null){
							$("textarea[name='address']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("textarea[name='address']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].current_address != null){
							$("textarea[name='current_address']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("textarea[name='current_address']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].email != null){
							$("input[name='email']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='email']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].position_in_company != null){
							$("input[name='position_in_company']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='position_in_company']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].company_name != null){
							$("input[name='company_name']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='company_name']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].company_address != null){
							$("textarea[name='company_address']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("textarea[name='company_address']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].nature_of_visit != null){
							$("input[name='nature_of_visit']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='nature_of_visit']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].contact_person != null){
							$("input[name='contact_person']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='contact_person']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].contact_person_position != null){
							$("input[name='contact_person_position']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='contact_person_position']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].contact_person_email != null){
							$("input[name='contact_person_email']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='contact_person_email']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].image != null){
							$("input[name='image']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='image']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].body_temperature != null){
							$("input[name='body_temperature']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='body_temperature']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].over_37_5 != null){
							$("input[name='over_37_5']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='over_37_5']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].sore_throat != null){
							$("input[name='sore_throat']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='sore_throat']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].cough_hard_to_breath != null){
							$("input[name='cough_hard_to_breath']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='cough_hard_to_breath']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].close_contact != null){
							$("input[name='close_contact']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='close_contact']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].living_in_same_household != null){
							$("input[name='living_in_same_household']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='living_in_same_household']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].travelled_outside != null){
							$("input[name='travelled_outside']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='travelled_outside']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].any_sickness != null){
							$("input[name='any_sickness']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='any_sickness']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].sickness != null){
							$("input[name='sickness']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='sickness']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].shuttle_service != null){
							$("input[name='shuttle_service']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='shuttle_service']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].bus_plate_no != null){
							$("input[name='bus_plate_no']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='bus_plate_no']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].bus_arrival_time != null){
							$("input[name='bus_arrival_time']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='bus_arrival_time']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].bus_plate_no != null){
							$("input[name='bus_plate_no']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='bus_plate_no']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].bus_arrival_time != null){
							$("input[name='bus_arrival_time']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='bus_arrival_time']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].personal_car != null){
							$("input[name='personal_car']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='personal_car']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].walk_in != null){
							$("input[name='walk_in']", $("#frmSaveRecord")).parent().parent().addClass('border-error');
						}
						else{
							$("input[name='walk_in']", $("#frmSaveRecord")).parent().parent().removeClass('border-error');
						}

						if(data['error'] != null && data['error'].personal_car_plate_no != null){
							$("input[name='personal_car_plate_no']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='personal_car_plate_no']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].personal_car_arrival_time != null){
							$("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='personal_car_arrival_time']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						if(data['error'] != null && data['error'].walk_in_arrival_time != null){
							$("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).addClass('border-danger');
						}
						else{
							$("input[name='walk_in_arrival_time']", $("#frmSaveRecord")).removeClass('border-danger');
						}

						toastr.error('Saving Failed. Please check your records.');
					}
					$("#btnSubmit").prop('disabled', false);
				},
				error(data, xhr, status){
					$("#mdlLoader").modal('hide');
					$("#btnSubmit").prop('disabled', false);
				}
			});
		}
	</script>

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