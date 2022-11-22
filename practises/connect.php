<?php
    $connect = new mysqli('localhost','root','','test');
    if($result=$connect->query("SELECT * from product")){
        echo '<table border="1">';
        echo '<tr><th>Name</th><th>Price</th><th>Delete</th></tr>';
        while($row=$result->fetch_array()){
            echo "<tr>";
                    echo "<td>".$row['p_name']."</td>";
                    echo "<td>".$row['p_price']."</td>";
                    echo "<td><a href='delinfo.php?id=".$row['p_id']."'> Delete</a></td>";
        }
        echo '</table>';
        $result->free();
    }else{
        echo "failed: ".$connect->error;
    }
?>