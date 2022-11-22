<?php
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_lot = $_POST['p_lot'];
    $connect = new mysqli('localhost','root','','xooy');
    if($connect->connect_errno){
    echo $connect->connect_errno.": ".$connect->connect_error;
    }
    $q="UPDATE product SET Flavour='$p_name', Product_Lot='$p_lot'
    where Product_ID=$p_id";
    if(!$connect->query($q)){
    echo "UPDATE failed. Error: ".$connect->error ;

    }
    $connect->close();
    //redirect
    header("Location: addstock.php");
?>