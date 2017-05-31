<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
      <?php
    session_start();
    if($_SESSION['user'] && $_SESSION['rights'] == 1){
    }
    else if($_SESSION['user'] && $_SESSION['rights'] == 4)
    {

    }
    else if($_SESSION['user'] && $_SESSION['rights'] == 5)
    {

    }
    else{
      header('location: ../error.php');
    }
    $user = $_SESSION['user'];
  ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="screen">
  </head>
  
  <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <a href="#" class="navbar-left"><img src="../pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
    <a class="navbar-brand" href="../home.php">UP Office of Admissions</a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../home.php">Home</a></li>
      <li><a href="../profile.php">Profile</a></li>
      <li><a href="../Rates">Records</a></li>
      <li><a href="../itinerary.php">Itinerary</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<!-- baba -->
  <div class="container-fluid">
    <div class="row" >
      <div class="col-sm-2">
          <ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
            <li><a href="../home.php">View List of Personnel</a></li>
            <li><a href="../addrecord.php">Add Record</a></li>
            <li><a href="../invitation.php">Invitation</a></li>
            <li><a href="../Response" class="active">Response</a></li>
            <li><a href="../attendanceregional.php">Assignment (Regional)</a></li>
            <li><a href="../attendancediliman.php">Assignment (Diliman)</a></li>
            <li><a href="../Attendance">UPCAT Attendance</a></li>

        </ul>
      </div>
      <div class="col-sm-10">

    <div id="wrap">   
      <!-- Feedback message zone -->
      <div id="message"></div>

            <div id="toolbar">
              <input type="text" id="filter1" name="filter" placeholder="Name"  />
              <input type="text" id="filter2" name="filter" placeholder="Assignment"  />

            </div>
      <!-- Grid contents -->
      <div id="tablecontent"></div>
    
      <!-- Paginator control -->
      <div id="paginator"></div>
    </div> 
          
        </div>
      </div>
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
                $("#filter1").keyup(function() {
                    datagrid.editableGrid.filter( $(this).val(),[1]);

                    // To filter on some columns, you can set an array of column index 
                    //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
                  });
                $("#filter2").keyup(function() {
                    datagrid.editableGrid.filter( $(this).val(),[2]);

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
        
  </body>

</html>
