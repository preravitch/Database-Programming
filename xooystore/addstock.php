<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;
    $flavour = $_POST['flavour'];
    $p_price=$_POST['p_price'];
 
    $db = mysqli_connect("localhost", "root", "", "xooyy");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO product (Flavour,imgname,Product_price) VALUES ('$flavour','$filename',$p_price)";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("Location: stock.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="addstock.css" />
</head>
 
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                Flavour: <input type="text" name="flavour" value="" required><br>
                Product Image: <input class="form-control" type="file" name="uploadfile" value="" required/>
                Price: <input type="text" name="p_price" value='' required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
        <?php
        $query = " select * from product ";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./images/<?php echo $data['imgname']; ?>">
 
        <?php
        }
        ?>
    </div>
</body>
 
</html>

	