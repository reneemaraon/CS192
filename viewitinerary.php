<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script>
	function getLines(val) {
		if (val=="ByLand"){
			data='<option>Select Line</option>';
			data+='<option>FLORIDA</option><option>GENESIS</option>';
			data+='<option>JAC</option>';
			data+='<option>NORTH STAR</option>';
			data+='<option>PARTAS</option>';
			data+='<option>PHILTRANCO</option>';
			data+='<option>UPCAT VEHICLE</option>';
			data+='<option>VICTORY</option>';
			data+='<option>ZestAir</option>';
			$("#lines").html(data);		
		}
		else if (val=="Airlines"){
			data='<option>Select Line</option>';
			data+='<option>CebuPac</option>'
			data+='<option>JAC</option>'
			data+='<option>PAL</option>'
			data+='<option>PALex</option>'
			$("#lines").html(data);		
			$("#hi").html('char');
		}
	}
</script>
</head>
<body>
  	  <?php
    session_start();
    if($_SESSION['user']){
    }
    else{
      header('location: login.php');
    }
    $user = $_SESSION['user'];
  ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
		</div>
		<a href="#" class="navbar-left"><img src="pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
		<a class="navbar-brand" href="#">UP Office of Admissions</a>
		<ul class="nav navbar-nav">
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="Rates">Records</a></li>
			<li class = "active"><a href="itinerary.php">Itinerary</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<!-- baba -->
	<div class="container">
		<center>
			<h2 class="specialcolor">UPCAT Flight Schedule and Itinerary</h2>
		<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("upcatdb") or die("Cannot connect to database");
			      
			$query = mysql_query("SELECT * FROM `itinerary details t` WHERE tcc=".$_GET["id"]);
			$row = mysql_fetch_array($query);
			$save = $row;

			$query = mysql_query("SELECT date FROM `upcat_schedule` WHERE id=1");
			$day1 = mysql_fetch_array($query);
			$query = mysql_query("SELECT date FROM `upcat_schedule` WHERE id=2");
			$day2 = mysql_fetch_array($query);

			$query = mysql_query("SELECT * FROM `flight_sched` WHERE tctrcode=".$_GET["id"]);
			$row = mysql_fetch_array($query);
			$flightdetails = $row;
			$date1 = date_create($day1["date"]);
			$date2 = date_create($day2["date"]);
			echo "<h4>";
			echo date_format($date1, 'F d');
			echo " - ";
			echo date_format($date2, 'd, Y');
			echo "</h4>";
			echo "</center>";

			echo '<div class="container">';
		 ?>
		 	<br>
		 	<h3><b>Test Center:</b> <?php echo $save['tcc']; echo " - "; echo $save['TEST CENTER']?> </h3>
		 	<br>
		
			<div class="form-inline">
				<label for="suffix">Transportation</label>
				<select class="form-control" id="transpo" name="transpo" onChange="getLines(this.value);">
					<option>Select Mode</option>
					<option <?php if ($flightdetails['Transport']=='Airlines') {echo 'selected="selected"';}?>>Airlines</option>
					<option <?php if ($flightdetails['Transport']=='ByLand') {echo 'selected="selected"';}?>>ByLand</option>
				</select>	
				<select class="form-control" id="lines" name="lines">
					<option>Select Line</option>
					<?php
						$ByLand=array('FLORIDA','JAC','NORTH STAR','PARTAS','PHILTRANCO','UPCAT VEHICLE','VICTORY','ZestAir');

						$Airlines=['CebuPac','PAL','PALex'];
						if ($flightdetails['Transport']=='ByLand'){
							for ($i=0; $i<count($ByLand); $i++){
								if ($flightdetails['ALBCO']==$ByLand[$i]){
									echo '<option selected="selected">'.$ByLand[$i].'</option>';
								}
								else{
									echo '<option>'.$ByLand[$i].'</option>';
								}
							}
						}
						else if ($flightdetails['Transport']=='Airlines'){
							for ($i=0; $i<count($Airlines); $i++){
								if ($flightdetails['ALBCO']==$Airlines[$i]){
									echo '<option selected="selected">'.$Airlines[$i].'</option>';
								}
								else{
									echo '<option>'.$Airlines[$i].'</option>';
								}
							}
						}

					?>
				</select>				
				<label for="terminal">Terminal</label>
				<input type="text" class="form-control" id="terminal" name="terminal" value="<?php echo $flightdetails['NAIA_terminal']; ?>">
				

			</div>
			<br>
		 	<div class="col-sm-8">
		 			<div class="row">
		 			<center><h4 class="specialcolor"><b>Departure from Manila</b></h4></center>
		 			<hr / >
		 			<div class="col-sm-3">
						<div class="form-group">
							<label for="date">Date</label>
							<select class="form-control" id="date" name="date">
								<option>Select Date</option>
								<?php 
								echo '<option';
								$date1 = date_create($day1["date"]);	
								date_sub($date1,date_interval_create_from_date_string('4 days'));
								if ($flightdetails['Mla_tstctr_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';

								echo '<option';
								$date1 = date_create($day1["date"]);	
								date_sub($date1,date_interval_create_from_date_string('3 days'));
								if ($flightdetails['Mla_tstctr_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';

								echo '<option';
								$date1 = date_create($day1["date"]);	
								date_sub($date1,date_interval_create_from_date_string('2 days'));
								if ($flightdetails['Mla_tstctr_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';

								echo '<option';
								$date1 = date_create($day1["date"]);	
								date_sub($date1,date_interval_create_from_date_string('1 days'));
								if ($flightdetails['Mla_tstctr_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';																
								?>
								</option>							
							</select>
							<label for="Time">Time</label>
							<input type="text" class="form-control" id="time" name="time" value="<?php echo substr($flightdetails['Mla_tstctr_dep'],11,5); ?>">

						</div>
		 			</div>
		 			<div class="col-sm-8">
					<label for="destination">Destination</label>
					<input type="text" class="form-control" id="destination" name="destination" value="<?php echo $flightdetails['Mla_tstctr_destination']; ?>">
					<label for="connectingtrip">Connecting Trip</label>
					<input type="text" class="form-control" id="connectingtrip" name="connectingtrip" value="<?php echo $flightdetails['Mla_tstctr_Con_trip']; ?>">
						<div class="row">
						<div class="col-sm-6">
							<label for="flightno">Flight No.</label>
							<input type="text" class="form-control" id="flightno" name="flightno" value="<?php echo $flightdetails['Mla_tstctr_FlightNo']; ?>">
						</div>
						<div class="col-sm-6">
							<label for="onewayfare">One Way Fare</label>
							<input type="text" class="form-control" id="onewayfare" name="onewayfare" value="<?php echo $flightdetails['Mla_tstctr_1wayfare']; ?>">
						</div>
						</div>
						<div class="row">
						<div class="col-sm-6">
							<label for="expectedarrival1">Expected Date of Arrival</label>
							<input type="text" class="form-control" id="expectedarrival1" name="expectedarrival1" value="<?php echo date_format(date_create($flightdetails['Mla_tstctr_EDA']),'F d Y'); ?>">
						</div>
						<div class="col-sm-6">
							<label for="expectedtime1">Time</label>
							<input type="text" class="form-control" id="expectedtime1" name="expectedtime1" value="<?php echo substr($flightdetails['Mla_tstctr_ETA'],11,5); ?>">
						</div>

						</div>
					<label for="remarks1">Remarks</label>
					<input type="text" class="form-control" id="remarks" name="remarks" value="<?php echo $flightdetails['Mla_Remarks']; ?>">						
					</div>
		 	</div>
		 	<br> <br>
		 	<div class="row">
		 			<center><h4 class="specialcolor"><b>Departure from Testing Center</b></h4></center>
		 			<hr / >
		 			<div class="col-sm-3">
						<div class="form-group">
							<label for="date2">Date</label>
							<select class="form-control" id="date2" name="date2">
								<option>Select Date</option>
								<?php 
								echo '<option';
								$date1 = date_create($day2["date"]);	
								date_add($date1,date_interval_create_from_date_string('1 days'));
								if ($flightdetails['TstCtr_Mla_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';
								
								echo '<option';
								$date1 = date_create($day2["date"]);	
								date_add($date1,date_interval_create_from_date_string('2 days'));
								if ($flightdetails['TstCtr_Mla_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';

								echo '<option';
								$date1 = date_create($day2["date"]);	
								date_add($date1,date_interval_create_from_date_string('3 days'));
								if ($flightdetails['TstCtr_Mla_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';

								echo '<option';
								$date1 = date_create($day2["date"]);	
								date_add($date1,date_interval_create_from_date_string('4 days'));
								if ($flightdetails['TstCtr_Mla_date']==$date1){
									echo ' selected="selected"';
								} 
								echo '>'.date_format($date1,'F d, Y');;
								echo '</option>';
								?>
								
		
							</select>
							<label for="time2">Time</label>
							<input type="text" class="form-control" id="time2" name="time2" value="<?php echo substr($flightdetails['TstCtr_Mla_dep'],11,5); ?>">

						</div>
		 			</div>
		 			<div class="col-sm-8">
					<label for="destination2">Destination</label>
					<input type="text" class="form-control" id="destination2" name="destination2" value="<?php echo $flightdetails['TstCtr_Mla_Destination']; ?>">
					<label for="connectingtrip2">Connecting Trip</label>
					<input type="text" class="form-control" id="connectingtrip2" name="connectingtrip2" value="<?php echo $flightdetails['TstCtr_Mla_Con_trip']; ?>">
						<div class="row">
						<div class="col-sm-6">
							<label for="flightno2">Flight No.</label>
							<input type="text" class="form-control" id="flightno2" name="flightno2" value="<?php echo $flightdetails['TstCtr_Mla_FlightNo']; ?>">
						</div>
						<div class="col-sm-6">
							<label for="onewayfare2">One Way Fare</label>
							<input type="text" class="form-control" id="onewayfare2" name="onewayfare2" value="<?php echo $flightdetails['TstCtr_Mla_1wayfare']; ?>">
						</div>
						</div>
						<div class="row">
						<div class="col-sm-6">
							<label for="expectedarrival2">Expected Date of Arrival</label>
							<input type="text" class="form-control" id="expectedarrival2" name="expectedarrival2" value="<?php echo date_format(date_create($flightdetails['tstctr_Mla_EDA']),'F d Y'); ?>">
						</div>
						<div class="col-sm-6">
							<label for="expectedtime1">Time</label>
							<input type="text" class="form-control" id="expectedtime2" name="expectedtime2" value="<?php echo substr($flightdetails['TstCtr_Mla_ETA'],11,5); ?>">
						</div>

						</div>
					<label for="remarks2">Remarks</label>
					<input type="text" class="form-control" id="remarks2" name="remarks2" value="<?php echo $flightdetails['Tctr_Remarks']; ?>">						
					<br><br>	 		
					</div>	
		 	</div>
		 	<!-- container -->
			</div>

		 	<div class="col-sm-4">
		 		<br><br><br>
		 		<div class="row">		 			
					<label for="numofpersons">No. of Persons</label>
					<input type="text" class="form-control" id="numofpersons" name="numofpersons" value="<?php echo $flightdetails['N_persons']; ?>">
		 			<label for="avservicefee">Aviation Service Fee</label>
					<input type="text" class="form-control" id="avservicefee" name="avservicefee" value="<?php echo $flightdetails['ASF']; ?>">
		 			<label for="insurance">Insurance (YQ)</label>
					<input type="text" class="form-control" id="insurance" name="insurance" value="<?php echo $flightdetails['INS']; ?>">
		 			<label for="terminalfee">Terminal Fee (DPSC)</label>
					<input type="text" class="form-control" id="terminalfee" name="terminalfee" value="<?php echo $flightdetails['DPSC']; ?>">
		 			<br>
		 			<label for="totalwovat">Total w/o VAT</label>
		 				<center><h4 id="totalwovat"><?php echo number_format($flightdetails['Total_No_Vat'],2); ?></h4></center>
		 			<label for="vat">12% VAT</label>
		 				<center><h4 id="vat"><?php echo number_format($flightdetails['VAT'],2); ?></h4></center>
		 			<label for="totalwvat">Total with VAT</label>
		 				<center><h4 id="totalwvat"><?php echo number_format($flightdetails['Total_w_Vat'],2); ?></h4></center>
		 			
		 		</div>
		 		<hr />
		 		<center>
				<input type = "submit"; name = "submit"; value = "SAVE" class="btn btn-primary">
		 		</center>
		 		
		 	</div>


	</div>
</div>
</body>
</html>
