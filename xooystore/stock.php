<html>
<?php
    $connect = new mysqli('localhost','root','','xooyy');
    $q="SELECT * FROM product";
    $result = mysqli_query($connect, $q);
    
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Image</th><th>Flavor</th><th>Price</th><th>Edit</th><th>Delete</th></tr>';
        while ($data = $result->fetch_array()) {
        
        echo "<tr>";
        echo    "<td>".$data['Product_ID']."</td>";
        ?>    <td><img src="./images/<?php echo $data['imgname']; ?>" width="375" height="225"></td> <?php
        echo    "<td>".$data['Flavour']."</td>";
        echo    "<td>".$data['Product_price']."</td>"; 
        echo "<td><a href='editstock.php?id=".$data['Product_ID']."'> Edit</a></td>";
        echo "<td><a href='delstock.php?id=".$data['Product_ID']."'> Delete</a></td>";
        echo "</tr>";
        }
        echo '</table>';
        
        
        
?>
<form action="addstock.php">
    <input type="submit" value="Add Stock" />
</form>

</html>