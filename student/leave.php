<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>


<?php

//establishing connection
include('connect.php');

  try{

    //validation of empty fields

        if(empty($_POST['fname'])){
          throw new Exception("Email cann't be empty.");
        }

          if(empty($_POST['sr_id'])){
             throw new Exception("Username cann't be empty.");
          }

            if(empty($_POST['Leaveapp'])){
               throw new Exception("Password cann't be empty.");
            }

        //insertion of data to database table admininfo
        $result = mysql_query("insert into leaveapp(st_name,st_id,App) values('$_POST[fname]','$_POST[sr_id]','$_POST[Leaveapp]')");
        $success_msg="Submitted Successfully!";

  
  }
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!--  CSS framework -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- JavaScript framework -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<!-- head ended -->

<!-- body started -->
<body>

<!-- Menus started-->
<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="report.php" style="text-decoration:none;">Report Section</a>
  <a href="account.php" style="text-decoration:none;">My Account</a>
  <a href="leave.php" style="text-decoration:none;">Leave Application</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>
<!-- Menus ended -->

<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">

  <div class="content">
    <h3>Leave Application</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">

  <div class="form-group">

  <label for="input1" class="col-sm-3 control-label">Full Name</label>
      <div class="col-sm-4">
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="Enter your full name"/>
          </div>
      </div>

  </div>

        <div class="form-group">
           <label for="input1" class="col-sm-3 control-label">Your Reg. No.</label>
              <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="Enter your reg. no." />
              </div>
        </div>
        <div class="form-group">

            <label for="input1" class="col-sm-3 control-label">Application</label>
             <div class="col-sm-4">
             <div class="col-sm-7">
                <textarea name="Leaveapp" id="input1" cols="30" rows="10" placeholder="Write Your leave application here"></textarea>
              </div>
          </div>
        <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Submit" name="sr_btn" />
    </form>

    <div class="content"><br></div>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">

  </div>
