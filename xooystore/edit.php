<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
</head>
<link rel="stylesheet" href="edit.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Condensed&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<body>
    <?php
    $mysqli = new mysqli('localhost','root','','xooyy');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno.": ".$mysqli->connect_error;
    }
    session_start();
    ?>
    <div class="account-content">
        <?php $q="select * from user where username = '".$_SESSION['email']."'";
			$result=$mysqli->query($q);
				if(!$result){
					echo 'Query error: '.$mysqli->error;
		}
        $row=$result->fetch_array()
        ?>
        <form action="edit.php" method="post">
        <h1>Log-in details <button type="button" class="button" id="on" onclick="disableOff()">Edit</button><input type="submit" name="save" id="save" class="button" value="Save" style="margin-right: 10px;" disabled="disabled"></h1>
        <hr>
        <div class="email">
            <p>Email</p>
            <input class="input-email" id="email" name="email" type="email" placeholder=<?=$row['Email']?> disabled="disabled">
        </div>
        <div class="password">
            <div class="passcol">
                <p>Password</p>
                <input class="input-pass" id="pass" name="pass" type="password" placeholder=<?=$row['Password']?> disabled="disabled">
            </div>
            <div class="passcol">
                <p>Confirm password</p>
                <input class="input-pass" id="cpass" name="cpass" type="password" placeholder=<?=$row['Password']?> disabled="disabled">
            </div>
        </div>
        <h1>Personal details</h1>
        <hr>
        <div class="name">
            <div class="namecol">
                <p>First Name</p>
                <input class="input-about" id="fname", name="fname", type="text" disabled="disabled" placeholder=<?=$row['FName']?> >
            </div>
            <div class="namecol">
                <p>Last Name</p>
                <input class="input-about" id="lname" name="lname" type="text" disabled="disabled" placeholder=<?=$row['LName']?> >
            </div>
        </div>
        <div class="about">
            <p> Mobile phone No. </p>
            <input class="input-about" id="phone" name="phone" type="text" disabled="disabled" placeholder=<?=$row['Phone']?> >
        </div>
        <div class="about">
            <p>Authorized ID </p>
            <input class="input-about" id="id" name="id" type="text" disabled="disabled" placeholder=<?=$row['national_id']?> >
        </div>
        <div class="about">
            <p>Address</p>
            <input class="input-about" id="address" name="address" type="text" disabled="disabled" placeholder=<?=$row['Address']?> >
        </div>
        <div>
            <input type="submit" class="del" name="del" value="Delete Profile">
        </div>
        </form>
            <script>
  
                function disableOff() {
                    document.getElementById('pass').disabled = false;
                    document.getElementById('cpass').disabled = false;
                    document.getElementById('phone').disabled = false;
                    document.getElementById('address').disabled = false;
                    document.getElementById('id').disabled = false;
                    document.getElementById('save').disabled = false;
                    document.getElementById('fname').disabled = false;
                    document.getElementById('lname').disabled = false;
                }
            
            </script>
        <?php 
            if(isset($_POST['save']))
            {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                $address = $_POST['address'];
                if($_POST['email']=="")
                {
                    $email = $row['Email'];
                }
                if($_POST['pass']=="")
                {
                    $pass = $row['Password'];
                }
                if($_POST['phone']=="")
                {
                    $phone = $row['Phone'];
                }
                if($_POST['id']=="")
                {
                    $id = $row['national_id'];
                }
                if($_POST['address']=="")
                {
                    $address = $row['Address'];
                }
                $q="UPDATE user
                    SET Username = '$email', Password='$pass', Email='$email', Phone='$phone', Address='$address', national_id='$id'
                    WHERE username='".$_SESSION['email']."'";
                if($mysqli->query($q)){
                    $_SESSION['email'] = $email;
                    header("location: edit.php");
                }
                else
                {
                    echo "failed";
                }
            }
            if(isset($_POST['del']))
            {
                $qd = "DELETE FROM user where username = '".$_SESSION['email']."'";
                if($mysqli->query($qd))
                {
                    echo "Record deleted successfully";
                    $_SESSION["valid"] = false;
                    header("location: xooyLogin.php");
                } else {
                    echo "Error deleting record: ".$mysqli->error;
                }
            }

        ?>
    </div>

</body>
</html>