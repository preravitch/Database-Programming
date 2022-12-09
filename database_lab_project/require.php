<?php
require_once('connect.php');
$FName = $_POST['Firstname'];
$Passport = $_POST['Passport Id'];
$LName = $_POST['Lastname'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Nation = $_POST['Nationality'];
$Address = $_POST['Addresses'];
$PC = $_POST['Postcode'];
$Email = $_POST['email'];

$q = "INSERT INTO passenger (Passport_ID,First_Name,Last_Name,Gender,Age,Nationalities,Email,Address,Postcode,Country)
 VALUES ('$Passport','$FName','$LName','$Gender','$Age','$Nation','$Address','$PC','$Email')";
$result = $mysqli->query($q);
if (!$result){
    echo("Failed to register");
}
?>