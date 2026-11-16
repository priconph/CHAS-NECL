<?php
	require("../PHPMailer-master/src/PHPMailer.php");
    require("../PHPMailer-master/src/SMTP.php");
    require("../PHPMailer-master/src/Exception.php");


	if($_SERVER['REQUEST_METHOD'] == 'POST'){ // POST REQUESTS
		$action = $_POST['action'];

		switch ($_POST['action']) {
			case 'save_record':
				save_record($_POST);
				break;
			
			default:
				echo '404 not found';
				break;
		}
	}
	else{ // GET REQUESTS
		$action = $_GET['action'];

		switch ($_GET['action']) {
			case 'view_visitors':
				view_visitors($_GET);
				break;
			
			default:
				echo '404 not found';
				break;
		}
	}

	function save_record($request){

		$return = array();

		$servername = "raijin";
		$username = "raijin";
		$password = "L1ghtn1ng!B07t";
		$dbname = "db_chas_necl";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		// variables
		$employee_no = '';
		$lastname = '';
		$firstname = '';
		$middlename = '';
		$address = '';
		$current_address = '';
		$email = '';
		$body_temperature = '';
		$over_37_5 = '';
		$sore_throat = '';
		$cough_hard_to_breath = '';
		$close_contact = '';
		$living_in_same_household = '';
		$travelled_outside = '';
		$any_sickness = '';
		$sickness = '';

		$shuttle_service = '';
		$bus_plate_no = '';
		$bus_arrival_time = '';

		$personal_car = '';
		$personal_car_plate_no = '';
		$personal_car_arrival_time = '';

		$walk_in = '';
		$walk_in_arrival_time = '';

		$errors = array();

		$upload_result = 0;

		if(isset($request['employee_no']) && !empty($request['employee_no'])){
			$employee_no = $request['employee_no'];
		}
		else{
			$errors['employee_no'] = 'employee no is required.';
		}

		if(isset($request['lastname']) && !empty($request['lastname'])){
			$lastname = $request['lastname'];
		}
		else{
			$errors['lastname'] = 'lastname is required.';
		}

		if(isset($request['firstname']) && !empty($request['firstname'])){
			$firstname = $request['firstname'];
		}
		else{
			$errors['firstname'] = 'firstname is required.';
		}

		if(isset($request['middlename']) && !empty($request['middlename'])){
			$middlename = $request['middlename'];
		}

		if(isset($request['address']) && !empty($request['address'])){
			$address = $request['address'];
		}
		else{
			$errors['address'] = 'address is required.';
		}

		if(isset($request['current_address']) && !empty($request['current_address'])){
			$current_address = $request['current_address'];
		}

		if(isset($request['email']) && !empty($request['email'])){
			$email = $request['email'];
		}
		else{
			$errors['email'] = 'email is required.';
		}

		if(isset($request['body_temperature'])){
			$body_temperature = $request['body_temperature'];
			if($over_37_5 > 17.5){
				$over_37_5 = 1;
			}
			else{
				$over_37_5 = 0;
			}
		}
		else{
			$errors['body_temperature'] = 'body temperature is required.';
		}

		if(isset($request['sore_throat'])){
			$sore_throat = $request['sore_throat'];
		}
		else{
			$errors['sore_throat'] = 'sore throat is required.';
		}

		if(isset($request['cough_hard_to_breath'])){
			$cough_hard_to_breath = $request['cough_hard_to_breath'];
		}
		else{
			$errors['cough_hard_to_breath'] = 'cough hard to breath is required.';
		}

		if(isset($request['close_contact'])){
			$close_contact = $request['close_contact'];
		}
		else{
			$errors['close_contact'] = 'close contact is required.';
		}

		if(isset($request['living_in_same_household'])){
			$living_in_same_household = $request['living_in_same_household'];
		}
		else{
			$errors['living_in_same_household'] = 'living_in_same_household is required.';
		}

		if(isset($request['travelled_outside'])){
			$travelled_outside = $request['travelled_outside'];
		}
		else{
			$errors['travelled_outside'] = 'travelled_outside is required.';
		}

		if(isset($request['any_sickness'])){
			$any_sickness = $request['any_sickness'];

			if($request['any_sickness'] == 1){
				if(isset($request['sickness']) && !empty($request['sickness'])){
					$sickness = $request['sickness'];
				}
				else{
					$errors['sickness'] = 'sickness is required.';
				}
			}
		}
		else{
			$errors['any_sickness'] = 'any sickness is required.';
		}

		if(isset($request['shuttle_service'])){
			$shuttle_service = $request['shuttle_service'];

			if($request['shuttle_service'] == 1){
				if(isset($request['bus_plate_no']) && !empty($request['bus_plate_no'])){
					$bus_plate_no = $request['bus_plate_no'];
				}
				else{
					$errors['bus_plate_no'] = 'bus plate no is required.';
				}

				if(isset($request['bus_arrival_time']) && !empty($request['bus_arrival_time'])){
					$bus_arrival_time = $request['bus_arrival_time'];
				}
				else{
					$errors['bus_arrival_time'] = 'bus arrival time is required.';
				}	
			}
		}
		else{
			$errors['shuttle_service'] = 'shuttle service is required.';
		}

		if(isset($request['personal_car'])){
			$personal_car = $request['personal_car'];
			if($request['personal_car'] == 1){
				if(isset($request['personal_car_plate_no']) && !empty($request['personal_car_plate_no'])){
					$personal_car_plate_no = $request['personal_car_plate_no'];
				}
				else{
					$errors['personal_car_plate_no'] = 'personal car plate no is required.';
				}

				if(isset($request['personal_car_arrival_time']) && !empty($request['personal_car_arrival_time'])){
					$personal_car_arrival_time = $request['personal_car_arrival_time'];
				}
				else{
					$errors['personal_car_arrival_time'] = 'personal car arrival time is required.';
				}
			}
		}
		else{
			$errors['personal_car'] = 'personal car is required.';
		}

		if(isset($request['walk_in'])){
			$walk_in = $request['walk_in'];
			if($request['walk_in'] == 1){
				if(isset($request['walk_in_arrival_time']) && !empty($request['walk_in_arrival_time'])){
					$walk_in_arrival_time = $request['walk_in_arrival_time'];
				}
				else{
					$errors['walk_in_arrival_time'] = 'personal car plate no is required.';
				}	
			}
		}
		else{
			$errors['walk_in'] = 'walk in is required.';
		}

		if(count($errors) <= 0){
			$upload_result = 0; // 0=initial and with error, 1=success, 2=max limit, 3=invalid format, 4=No uploaded image
			$return['result'] = 0;
			try {
				$sql = 'INSERT INTO chas_necl ( employee_no, lastname, firstname, middlename, address, current_address, email, body_temperature, over_37_5, sore_throat, cough_hard_to_breath, close_contact, living_in_same_household, travelled_outside, any_sickness, sickness, shuttle_service, bus_plate_no, bus_arrival_time, personal_car, personal_car_plate_no, personal_car_arrival_time, walk_in, walk_in_arrival_time, status, created_at, updated_at) ';

				$sql .= ' VALUES("'
					 		. $employee_no . '","'
					 		. $lastname . '","'
					 		. $firstname . '","'
					 		. $middlename . '","'
					 		. $address . '","'
					 		. $current_address . '","'
					 		. $email . '","'
					 		. $body_temperature . '","'
					 		. $over_37_5 . '","'
					 		. $sore_throat . '","'
					 		. $cough_hard_to_breath . '","'
					 		. $close_contact . '","'
					 		. $living_in_same_household . '","'
					 		. $travelled_outside . '","'
					 		. $any_sickness . '","'
					 		. $sickness . '","'
					 		. $shuttle_service . '","'
					 		. $bus_plate_no . '","'
					 		. $bus_arrival_time . '","'
					 		. $personal_car . '","'
					 		. $personal_car_plate_no . '","'
					 		. $personal_car_arrival_time . '","'
					 		. $walk_in . '","'
					 		. $walk_in_arrival_time . '",1,"'
					 		. date('Y-m-d H:i:s') . '","' 
					 		. date('Y-m-d H:i:s') . '")';

				if ($conn->query($sql) === TRUE) {
					$return['result'] = 1;
					$return['message'] = 'Saved';
				} else {
					$return['result'] = 0;
					$return['message'] = "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();

				if(send_email($request) == 1){
				    $return['email_sent'] = 1;
				}
				else{
				    $return['email_sent'] = 0;
				}
				// $conn->close();
				
			} catch (Exception $e) {
				
			}
		}
		else{
			$return['result'] = 0;
			// $errors['image'] = 'image upload is failed.';
		}
		
		$return['result'] = 0; // temp

		$return['upload_result'] = $upload_result;
		$return['error'] = $errors;

		echo json_encode($return);
	}

	function view_visitors($request){
		// DB table to use
		$table = 'visitors';
		 
		// Table's primary key
		$primaryKey = 'id';
		 
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
		    array( 'db' => 'firstname', 'dt' => 0 ),
		    array( 'db' => 'lastname',  'dt' => 1 ),
		    array( 'db' => 'middlename',   'dt' => 2 ),
		    array( 'db' => 'email',     'dt' => 3 ),
		    // array(
		    //     'db'        => 'created_at',
		    //     'dt'        => 4,
		    //     'formatter' => function( $d, $row ) {
		    //         return date( 'jS M y', strtotime($d));
		    //     }
		    // ),
		    // array(
		    //     'db'        => 'nature_of_visit',
		    //     'dt'        => 5,
		    //     'formatter' => function( $d, $row ) {
		    //         return '$'.number_format($d);
		    //     }
		    // )
		);
		 
		// SQL server connection information
		$sql_details = array(
		    'user' => 'root',
		    'pass' => '',
		    'db'   => 'db_covid19',
		    'host' => 'localhost'
		);
		 
		
		$where = "status ='2'";

		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		 
		require( '../ssp-master/example/scripts/ssp.class.php' );
		 
		echo json_encode(
		    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
		);
	}


	function send_email($request){
		// Instantiation and passing `true` enables exceptions

    	$mail = new PHPMailer\PHPMailer\PHPMailer();
		// $mail = new PHPMailer(true);

		try {
		    //Server settings
	     	$mail->isSMTP();
			$mail->Host = 'smtp.googlemail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'pmiissnotif@gmail.com';
			$mail->Password = 'pmiissnotif1234';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;   

		    //Recipients
		    $mail->setFrom('pmiissnotif@gmail.com', 'PMI COVID-19 Health Assessment');
			$mail->addAddress($request['email']);
		    $body = '';

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'NECL : COVID19 Health Assessment Submitted Form Details as of ' .  date('M/d/Y');

			$url_path = '../pages/record_mail.php'; 
  
			// Data is an array of key value pairs 
			// to be reflected on the site 
			$data = $request; 

			$result = '';

			$result .= '<!DOCTYPE html>
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
							   				<label style="font-size: 18px;">Thank you for answering the COVID19 Health Assessment Form for PMI Visitors. Please see below your submitted answers as of today <b>' . date("m/d/Y H:i:s") . '</b></label>
							   				<br><br>
							   				<hr>
							   			</div>

							   			<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>EMPLOYEE NO: </b><span class="text-green">' . $request["employee_no"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>LASTNAME: </b><span class="text-green">' . $request["lastname"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>FIRSTNAME: </b><span class="text-green">' . $request["firstname"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>MIDDLENAME: </b><span class="text-green">' . $request["middlename"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>ADDRESS: </b><span class="text-green">' . $request["address"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>CURRENT ADDRESS: </b><span class="text-green">' . $request["current_address"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>E-MAIL: </b><span class="text-green">' . $request["email"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
											<hr>
											<label><b>1 - Are you experiencing the following:</b></label>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A. What is your current body temperature? <span class="text-green">' . $request["body_temperature"] . '</span></label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">B. Is your body temperature over 37.5 C? ';
											    	
									    		if($request["over_37_5"] == 1){
									    			$result .='<span class="text-green">Yes</span>';
									    		}
									    		else{
									    			$result .='<span class="text-green">No</span>';
									    		}
											    $result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">C. Sore throat (pananakit ng lalamunan / masakit lumunok). ';
											    		if($request["sore_throat"] == 1){
											    			$result .= '<span class="text-green">Yes</span>';
											    		}
											    		else{
											    			$result .= '<span class="text-green">No</span>';
											    		}
											    $result .='</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">D. Cough and hard to breath (ubo na may kasamang hirap huminga). ';
										    		if($request["cough_hard_to_breath"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    $result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
											<hr>
											<label><b>2 - Worked together or stayed in the same close environment of a CONFIRMED COVID-19 case (May nakasalamuha ka ba o nakatrabahong tao na kumpirmadong may COVID-19/may impeksyon ng coronavirus). 

											</b></label>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A. Close contact with health care worker or person who has exposure in caring patient with COVID-19?(May nakasama ka ba health care worker or taong nag-aalaga na may COVID-19?) ';
										    		if($request["close_contact"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    	$result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">B. Living in the same household as a COVID-19 patient? (may kasama sa bahay na may COVID-19?) ';
										    		if($request["living_in_same_household"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    	$result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
											<hr>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>3 - Have travelled outside of the Philippines in the last 14 days? (Ikaw ba ay nagbiyahe sa labas ng Pilipinas sa nakalipas na 14 na araw?)'; 
										    		if($request["travelled_outside"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    $result .= '</b></label>
										  	</div>
										</div>

										<div class="col-sm-12">
											<hr>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label"><b>4 - Do you had any sickness in the past 2 weeks other than mentioned above? (Ikaw ba ay nagkaroon ng kahit anong sakit sa nakalipas na dalawang (2) linggo maliban sa nabanggit sa taas?)';
										    		if($request["any_sickness"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    		$result .= '</b></label>

										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A. Please specify what are those sickness. (Isulat kung ano ang mga sakit na iyon.)'; 
											    	if(isset($request["sickness"])){
											    		$result .= '<span class="text-green">' .  $request["sickness"] . '</span>';
												    	if(empty($request["sickness"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
											<hr>
											<label><b>5 - Mode of transport in reporting to work (Ginamit na sasakyan papasok sa company)</b></label>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A1. Shuttle service vehicle (bus/van/coaster)? (<i>Sumakay ka ba ng service vehicle bus/van/coaster?</i>)';
										    		if($request["shuttle_service"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    	$result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A2. What is the Bus / Van / Coaster Body or plate number? (<i>Ano ang body or plate number ng nasakyan mong Bus/ Van/ Coaster? </i>)';
											    	if(isset($request["bus_plate_no"])){
											    		$result .= '<span class="text-green">' . $request["bus_plate_no"] . '</span>';
												    	if(empty($request["bus_plate_no"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">A3. What is the arrival time in PMI of shuttle service vehicle? (<i>Anong oras dumating sa PMI ang nasakyan mong shuttle service?</i>) ';
										    		if(isset($request["bus_arrival_time"])){
											    		$result .= '<span class="text-green">' . $request["bus_arrival_time"] . '</span>';
												    	if(empty($request["bus_arrival_time"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
										  	</div>
										  	<br>
										</div>


										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">B1. Company / Personal Car/ Motorcycle? (<i>Sumakay ka ba gamit ng iyong personal na sasakyan/ company car/ motorsiklo?</i>)';
										    		if($request["personal_car"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    	$result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">B2. What is the Plate Number of your Company/ Personal Car/ Motorcycle? (<i>Ano ang plate number ng iyong personal na sasakyan/ company car/ motorsiklo?</i>)';
											    	if(isset($request["personal_car"])){
											    		$result .= '<span class="text-green">' . $request["personal_car_plate_no"] . '</span>';
												    	if(empty($request["personal_car_plate_no"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">B3. What is the arrival time in PMI of Company/ Personal Car/ Motorcycle? (<i>Anong oras ka dumating sa PMI gamit ang iyong personal na sasakyan/ company car/ motorsiklo?</i>)';
										    		if(isset($request["personal_car"])){
											    		$result .= '<span class="text-green">' . $request["personal_car_plate_no"] . '</span>';
												    	if(empty($request["personal_car_plate_no"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
										  	</div>
										  	<br>
										</div>



										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">C1. Walk In? (<i>Naglakad ka ba papasok ng PMI?</i>) ';
										    		if($request["walk_in"] == 1){
										    			$result .= '<span class="text-green">Yes</span>';
										    		}
										    		else{
										    			$result .= '<span class="text-green">No</span>';
										    		}
										    	$result .= '</label>
										  	</div>
										</div>

										<div class="col-sm-12">
										  	<div class="form-group row">
											    <label class="col-sm-12 col-form-label">C2. What is your arrival time in PMI if Walk In? (<i>Anong oras ka dumating sa PMI kung ikaw ay naglakad? </i>)';
										    		if(isset($request["walk_in_arrival_time"])){
											    		$result .= '<span class="text-green">' . $request["walk_in_arrival_time"] . '</span>';
												    	if(empty($request["walk_in_arrival_time"])){
												    		$result .= '<span class="text-green">No answer</span>';
												    	}
											    	}
											    	else{
											    		$result .= '<span class="text-green">No answer</span>';
											    	}
											    $result .= '</label>
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
			</html>';

			$mail->Body = $result;

		    $mail->AltBody = 'This is the system generated email';


		    $mail->send();
		    // echo $mail_body;
		  //  echo 'Message has been sent';
		  return 1;
		} catch (Exception $e) {
		    return 0;
		  //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
?>