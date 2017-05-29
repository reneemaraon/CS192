<!DOCTYPE html>
<html lang="en">
<head>
	<title>Records</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
				<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="screen">

	<script src="../js/bootstrap.min.js"></script>
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
		<a href="#" class="navbar-left"><img src="../pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
		<a class="navbar-brand" href="#">UP Office of Admissions</a>
		<ul class="nav navbar-nav">
			<li><a href="../home.php">Home</a></li>
			<li><a href="../profile.php">Profile</a></li>
			<li class="active"><a href="../Rates">Records</a></li>
			<li><a href="../itinerary.php">Itinerary</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<!-- baba -->
	<div class="container-fluid">
			<div class="col-sm-2">
					<ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
						<li><a href="../Rates">Rates</a></li>
						<li><a href="../Ucode"  class="active">Ucode</a></li>
						<li><a href="../Testingcenter">Testing Center</a></li>
						<li><a href="../FAR">FAR</a></li>
						<li><a href="../childdependent">Child Dependent</a></li>
						<li><a href="../banks">Banks</a></li>
						<li><a href="../CATDIREC">CATDIREC</a></li>
						<li><a href="../venue">Venue</a></li>

				</ul>

		</div>
		<div class="col-sm-9">

			<!-- dito start ng body -->
		<div id="wrap">

			<div id="toolbar">
				<input type="text" id="filter" name="filter" placeholder="Filter :type any text here"/>
					<div class="col-sm-2">
						<ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
							<li><a href="../adducode.php" class="active">Add Ucode</a></li>
						</ul>
					</div>
			</div>
			<!-- Grid contents -->
			<div id="tablecontent"></div>
		
			<!-- Paginator control -->
			<div id="paginator"></div>
		</div>  
		
		<script src="js/editablegrid-2.1.0-b25.js"></script>   
		<script src="js/jquery-1.11.1.min.js" ></script>
				<!-- EditableGrid test if jQuery UI is present. If present, a datepicker is automatically used for date type -->
				<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="js/demo.js" ></script>

		<script type="text/javascript">
		
						var datagrid = new DatabaseGrid();
			window.onload = function() { 

								// key typed in the filter field
								$("#filter").keyup(function() {
										datagrid.editableGrid.filter( $(this).val());

										// To filter on some columns, you can set an array of column index 
										//datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
									});

								$("#showaddformbutton").click( function()  {
									showAddForm();
								});
								$("#cancelbutton").click( function() {
									showAddForm();
								});

								$("#addbutton").click(function() {
									datagrid.addRow();
								});

				
			}; 
		</script>

				<!-- simple form, used to add a new row -->
				<div id="addform">

						<div class="row">
								<input type="text" id="name" name="name" placeholder="name" />
						</div>

						 <div class="row">
								<input type="text" id="firstname" name="firstname" placeholder="firstname" />
						</div>

						<div class="row tright">
							<a id="addbutton" class="button green" ><i class="fa fa-save"></i> Apply</a>
							<a id="cancelbutton" class="button delete">Cancel</a>
						</div>
				</div>
				
				<!-- ends here -->
		</div>
</div>
</body>
</html>
