<?php

if (isset($_POST["submit"])){
  $mysqli = new mysqli("localhost", "root", '', "project1");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

  $FName = $_POST['Firstname'];
  $Passport = $_POST['p_id'];
  $LName = $_POST['Lastname'];
  $Gender = $_POST['Gender'];
  $Age = $_POST['Age'];
  $Nation = $_POST['Nationality'];
  $Address = $_POST['Addresses'];
  $PC = $_POST['Postcode'];
  $Email = $_POST['email'];
  
  $q = "INSERT INTO passenger (Passport_ID,First_Name,Last_Name,Gender,Age,Nationalities,Email,Address,Postcode)
   VALUES ('$Passport','$FName','$LName','$Gender','$Age','$Nation','$Email','$Address','$PC')";
  mysqli_query($mysqli, $q);
}
  ?>