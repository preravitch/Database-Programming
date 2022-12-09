<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "project1");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}
?>