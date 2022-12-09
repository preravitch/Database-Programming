<?php
$p_id = $_GET['id'];
$mysqli = new mysqli('localhost','root','','xooyy');
if($mysqli->connect_errno){
echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
$q="DELETE FROM product where Product_id=$p_id";
if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;

}
$mysqli->close();
//redirect
header("Location: stock.php");
?>