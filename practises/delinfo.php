<?php 
    $p_id = $_GET['id'];

    $connect = new mysqli('localhost','root','','test');
    if($connect->connect_errno){
        echo $connect->connect_errno.": ".$connect->connect_error;
    }
    $q="DELETE from product where p_id = $p_id";

    if(!$connect->query($q)){
        echo "DELETE failed. Error: ".$connect->error;

    }
    $connect->close();
    header("Location: connect.php");
?>