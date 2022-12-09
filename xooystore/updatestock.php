<?php
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_price = $_POST['price'];
    $connect = new mysqli('localhost','root','','xooyy');
    if($connect->connect_errno){
    echo $connect->connect_errno.": ".$connect->connect_error;
    }
    $q="UPDATE product SET Flavour='$p_name', Product_price='$p_price'
    where Product_ID=$p_id";
    if(!$connect->query($q)){
    echo "UPDATE failed. Error: ".$connect->error ;

    }
    $connect->close();
    //redirect
    header("Location: stock.php");
?>