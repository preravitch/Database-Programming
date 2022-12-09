<?php
    $p_id = $_GET['id'];
    $connect = new mysqli('localhost','root','','xooyy');
   
    $q="SELECT * FROM product where Product_ID=$p_id";
    $result = $connect->query($q);
    echo "<form action='updatestock.php' method='post'>";
    while($row=mysqli_fetch_array($result)){ 
      echo  "Product ID: <input type=text name=id value=".$row['Product_ID']." Disabled><br>";
      echo  "<input type=hidden name=p_id value=".$row['Product_ID'].">";
      ?><img src="./images/<?php echo $row['imgname']; ?>" width="375", height="225"><br>
<?php
      echo  "Product Name: <input type=text name=p_name value=".$row['Flavour']." required><br>";
      echo  "Product Price: <input type=text name=price value=".$row['Product_price']." required><br>";
      echo  "<input type=submit value=submit>";
     }
        $connect->close();
?>