<!DOCTYPE html>
<html>
<head>
</head>
<title>Login</title>
<link rel="stylesheet" href="logincss.css">
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
        <h1>Log in</h1>
        <p class="subhead">New to the site? <a href="xooyRegist.php">SIGN UP</a></p>
        <form action="xooyLogin.php" method="post">
            <input type='email' class="input" name="email" placeholder="Username" required>
            <input type='password' class="input" name="pass" placeholder="Enter password" required>
            <input type='submit' name='submit' value='LOGIN' class='sign-up-btn'>
            <a class="forgot" href="checkpass.php">Forgot Password?</a>

            <hr>
            <p class="or">OR</p>
            <button type='button' class='fb-btn'><i class="fa-brands fa-facebook"></i> Connect with Facebook</button>
            <button type='button' class='g-btn'><i class="fa-brands fa-google"></i> Connect with Google</button>
        </form>
        <?php

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            

            $q="SELECT Email,Password,usertype FROM user WHERE (Email LIKE '$email' and Password LIKE '$pass');";
            if($result=$mysqli->query($q)){
                if($row=$result->fetch_array()){
                    echo "<p style='font-weight: bold; color: blue; margin: 0; font-size: 15px'>Log in complete</p>";
                    $_SESSION["valid"] = true;
                    $_SESSION["email"] = $email;
                    if($row['usertype'] == 'admin'){

                        $_SESSION['admin_name'] = $row['name'];
                        header('location:stock.php');
               
                     }elseif($row['usertype'] == 'user'){
               
                        $_SESSION['user_name'] = $row['name'];
                        header('location:home.php');
               
                     }
            
                } else{
                    echo "<p style='font-weight: bold; color: red; margin: 0; font-size: 15px'>Log in failed</p>";
                }
            } else {
                echo "fail connection";
            }
        }
        ?>
    </div>  



</body>


</html>