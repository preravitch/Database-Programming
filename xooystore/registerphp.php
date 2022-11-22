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
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $tel = $_POST['tel'];
            $gender = $_POST['gender'];
            $addr = $_POST['addr'];
            $natid = $_POST['natid'];
            $q="INSERT INTO user(Username, Password, FName, LName, Email, Phone, Gender, Address, national_id, Member_Level) 
            VALUES ('$email','$pass','$fname','$lname','$email','$tel','$gender','$addr','$natid',1500);";
            if($connect->query($q)){
                echo "registeration complete";
            }
            echo "$email";
        ?>
</body>
</html>