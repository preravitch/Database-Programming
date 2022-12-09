<!DOCTYPE html>
<html>
<head>
</head>
<title>Register</title>
<link rel="stylesheet" href="registercss.css">
<script src="https://kit.fontawesome.com/5f4125f797.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<body>
<?php
    $mysqli = new mysqli('localhost','root','','xooyy');
    session_start();
?>
    <div class="sign-up-form">
        <img class="user" src="user.png">
        <h1>Sign Up</h1>
        <p class="subhead">Have an account? <a href="xooyLogin.php">LOG IN</a></p>
        <form action="xooyRegist.php" method="post">
        <input type='email' class="input" name='email' placeholder="Enter your email" required>
        <input type='password' class="input" name='pass' placeholder="Enter password" required>
        <input type='password' class="input" name='cpass' placeholder="Confirm password" required>
        <input type='submit' name='submit' value='SIGN UP' class='sign-up-btn'>

        <hr>
        <p class="or">OR</p>
        <button type='button' class='fb-btn'><i class="fa-brands fa-facebook"></i> Connect with Facebook</button>
        <button type='button' class='g-btn'><i class="fa-brands fa-google"></i> Connect with Google</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
                $select = mysqli_query($mysqli, "SELECT email FROM user WHERE email = '$email'") or exit(mysqli_error($mysqli));
                if(mysqli_num_rows($select)) {
                exit("<p style='font-weight: bold; color: red; margin: 0; font-size: 15px'>This email is already being used</p>");
                } else {
                if($pass!=$cpass){
                    echo "<p style='font-weight: bold; color: red; margin: 0; font-size: 15px'>Password not matched</p>";
                } else {
                $q="INSERT INTO user(Username, Password, FName, LName, Email, Phone, Gender, Address, national_id, Member_Type,usertype) 
                VALUES ('$email','$pass',' ',' ','$email',' ',' ',' ',' ',' ','user');";
                    if($mysqli->query($q)){
                        echo "<p style='font-weight: bold; color: blue; margin: 0; font-size: 15px'>Sign-up complete</p>";
                        header("location: xooyLogin.php");
                    }
            }
        }
        
    }
        
    ?>
    </div>  




</body>


</html>