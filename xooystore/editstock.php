<?php
    $p_id = $_GET['id'];
    $connect = new mysqli('localhost','root','','xooy');
    if($connect->connect_errno){
        echo $connect->connect_errno.": ".$connect->connect_error;
        }
        $q="SELECT Product_ID,Flavour,Product_Lot FROM product where Product_ID=$p_id";
        $result = $connect->query($q);
        echo "<form action='updatestock.php' method='post'>";
        while($row=$result->fetch_array()){
            echo "Product ID: <input type=text name=id value=".$row['Product_ID']." Disabled><br>";
            echo "<input type=hidden name=p_id value='".$row['Product_ID']."'>";
            echo "Product Name: <input type=text name=p_name value=".$row['Flavour']."><br>";
            echo "Product Lot: <input type=text name=p_lot value=".$row['Product_Lot']."><br>";
            echo "<input type=submit value=submit>";
        }
        $connect->close();
?>