<!DOCTYPE html>
<html>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="file"> <br> <br>
            <input type="submit" value="Upload image" name="submit">
        </form>
        <br>
        
        <?php
            if(isset($_POST['submit'])){
                $filepath = "uploads/" . $_FILES["file"]["name"];
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)){
                    echo"<img src=".$filepath." height=400 width=500 />";
                }
                else{
                    echo "Error";
                }
            }
        ?>
    </body>
</html>