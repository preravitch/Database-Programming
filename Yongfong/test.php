<?php 
    

    $connect = new mysqli('localhost','root','','yong');
    if($connect->connect_errno){
        echo $connect->connect_errno.": ".$connect->connect_error;
    }
    
?>