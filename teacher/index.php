<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Faculties</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="report.php" style="text-decoration:none;">Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>
<img src="../img/icons.png" align="right" width="20px"/>
<center>

<div class="row">
    <div class="mit">
    <img src="../img/mit.jpg" width="1263px" />

  </div>

</div>
</div>
<div>
<h5>Made by Ashwin Sharma and Mayank Sahariya</h5>
<h5>Attendance Management System 2022</h5>
</div>

</center>

</body>
</html>
