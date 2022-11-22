<!DOCTYPE html>
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
                <h1>Register</h1>
                <div class="subhead">
                Already have an account? <a href="login.html">Log in</a>
                </div>
                <form action="registerphp.php" method="post">
                    <input type = "input-box" name="email" placeholder="Your Email">
                    <input type = "password" name="pass" placeholder="Your Password">
                    <input type = "password" name="cpass" placeholder="Confirm Password">
                    <input type = "input-box" name="fname" placeholder="First name">
                    <input type = "input-box" name="lname" placeholder="Last name">
                    <input type="radio" name="gender" value="Male" > Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Na" checked> Na
                    <input type = "input-box" name="tel" placeholder="Phone no.">
                    <input type = "textbox" name="addr" placeholder="Address">
                    <input type = "input-box" name="natid" placeholder="National ID">
                    <input type="submit" name="" value="Register">
                </form>
                <hr>
                <div class = "bottom">
                    <a href="" class="fb-link"><i class="fa-brands fa-facebook"></i> Connect with Facebook</a>
                    <a href="" class="go-link"><i class="fa-brands fa-google"></i></i> Connect with Google</a>
                    <a href="" class="twitter-link"><i class="fa-brands fa-twitter"></i> Connect with Twitter</a>
                </div>
        </div>
</body>
</html>