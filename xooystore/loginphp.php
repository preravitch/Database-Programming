<!DOCTYPE html>
<?php
    $connect = new mysqli('localhost','root','','xooy');
?>
<html>
    <header>
        <title>Xooy's Store Home</title>
    </header>
    <link rel="stylesheet" href="cssLogin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5f4125f797.js" crossorigin="anonymous"></script>
<body>
        <div class="top">
            
                You have registered! <a href="login.html"> Log in now</a>
            
        </div>
        <?php
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $q="SELECT Email,Password FROM user WHERE (Email LIKE '$email' and Password LIKE '$pass');";
            if($result=$connect->query($q)){
                if($row=$result->fetch_array()){
                    echo "yeay";
                } else{
                    echo "fail nigga";
                }
            } else {
                echo "fail connection";
            }
            echo "$email";
        ?>
</body>
</html>