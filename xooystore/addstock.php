<?php
    $connect = new mysqli('localhost','root','','xooy');
    $q="SELECT Product_ID,Flavour,Product_Lot FROM product";
    if($result=$connect->query($q)){
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Flavor</th><th>Quanity</th><th>Edit</th></tr>';
        while($row=$result->fetch_array()){
        echo "<tr>";
        echo "<td>".$row['Product_ID']."</td>";
        echo "<td>".$row['Flavour']."</td>";
        echo "<td>".$row['Product_Lot']."</td>";
        echo "<td><a href='editstock.php?id="
        .$row['Product_ID']."'> Edit</a></td>";
        echo "</tr>";
        }
        echo '</table>';
        $result->free();
        }else{
        echo "Retrieval failed: ".$mysqli->error ;
        }
?>