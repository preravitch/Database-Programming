<!DOCTYPE html>
<html>
<head><title>Forgot Password</title></head>
<link rel="stylesheet" href="checkpasscss.css">
<script src="https://kit.fontawesome.com/5f4125f797.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<body>
    <div class="forgotpass">
    <img src="key.png" style="width: 25%; height: 25%">
    <h1>Yo! Forgot Your Password?</h1>
    <p class="subhead"> Do not worry! Just give us your username and national ID and we will give you the password</p>
    <form name="login" action="checkpass.php"  method="post">
    <input type="text" class = "input" name="username" placeholder="Tell Us Your Username Here"><br>
        <input type="text" class = "input" name="id" placeholder="Next Your National ID"><br>
    <input class="button" type="submit" name="submit" value="What's My Password?">
    </form>
    <?php
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $national_id = $_POST['id'];
    $mysqli = new mysqli('localhost','root','','xooyy');
        if($mysqli->connect_errno){
            echo $mysqli->connect_errno.": ".$mysqli->connect_error;
        }
    
    $q="select * from user where username='".$username."' and national_id='".$national_id."'" ;
    $result = $mysqli->query($q);
    if (!$result) {
    die('Error: '.$q." ". $mysqli->error );
    }
    $count = $result->num_rows;
    if($count==1){
    $row = $result->fetch_array();
    $password = $row["Password"];
    echo "your password is ".$password;
    }
    else {
    echo "There is no Username in the system or National ID entered is incorrect. Please try again.";
    }
}

    ?>
     </div>
</body>
</html>
