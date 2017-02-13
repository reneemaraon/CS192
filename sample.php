<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <a href="#" class="navbar-left"><img src="pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
    <a class="navbar-brand" href="#">UP Office of Admissions</a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Records</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
</nav>

<!-- baba -->
  <div class="container">
    <div class="row" >
      <div class="col-sm-3">
          <ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
            <li><a href="#"  class="active">View List of Personnel</a></li>
            <li><a href="#">Add Record</a></li>
            <li><a href="#">Invitation</a></li>
            <li><a href="#">Response</a></li>
            <li><a href="#">Assignment</a></li>
            <li><a href="#">UPCAT Attendance</a></li>
        </ul>
      </div>
      <div class="col-sm-9">
            <!-- CONTENT -->
            <h3> List of UPCAT Personnel </h3>
            <br>
            <form class="form-inline">
              <label class="sr-only" for="inlineFormInput">Year</label>
              <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Year">

              <label class="sr-only" for="inlineFormInputGroup">Name</label>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Name">

            
              <label class="sr-only" for="inlineFormInputGroup">UCODE</label>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="UCODE">


              <button type="submit" class="btn btn-primary">Search</button>
               </form>


      </div>
    </div>
</div>
</body>
</html>
