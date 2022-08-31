<html>
<!-- link to the style sheet "default1.css"-->
<link rel="stylesheet" href="default1.css">
<!-- Add the given image "back.jpg" as illustrated (no repeat and cover the page) -->
<body style="background: url('back.jpg'); background-repeat: no-repeat; background-size: cover;">
<!-- Add php content to restrict only the user with password to enter --> 

<!-- php file begin-->
<?php 
	//<!--Assign the variables for username and password (user name: Admin and Password: 1234) 
	$username = $_POST["username"];
	$pass = $_POST["passwd"];
	$pass1 = $_POST["cpasswd"];

	if($username == "Admin" && $pass== "1234" && $pass1== "1234")
		{
			$_SESSION["username"] = $username;    
		}
	else
		{
			echo "<h1>", "You do not have access to this page!" ,"</h1>";
			
			//----print a text saying that you will have __ seconds to get the redirect button (30 times, using a for loop)---
			for($sec = 30;$sec > 0;$sec--){
				echo "<p>You will be given the redirecting button after $sec seconds<br></p>";
			}
			echo "<button onclick='history.go(-1);'>Back </button>";
			
			//-- use the button to move to previous page---
			
			exit;
		} //-->
//<!--php file end-->
?>
<!-- the heading is given as " Welcome Mr./Mrs./Ms. User Name", change the font to Arial, size of font to 200%, make the text appear in center-->
<h1 style="font-family:Arial; font-size: 200%; text-align: center;"> Welcome <?php echo $_POST["title"]," ",$_POST["firstname"], " ",$_POST["lastname"], "!!!" ; ?><br> </h1>
<!-- add the image "avatar.png", height to 240 pixels-->
<img src="avatar.png" height="240">

<!-- change the font to Arial,size of font to 170%--> 
<h3 style="font-family:Arial; font-size: 170%;"> This is your profile </h3>

<!-- change the font to Arial-->
<p>
<?php 
	echo "Name:", " " ,$_POST["title"]," ",$_POST["firstname"], " ",$_POST["lastname"],"<br>";
	//--add "User Group: usergroup"-- 
	echo "User Group:", " " ,$_POST["usergroup"],"<br>";
	
	//-- add "Email address: Email"-- 
	echo "Email address:", " ",$_POST["email"],"<br>";
	//-- Find the gender and output "Gender: gender"-- 
	if($_POST["title"] == "Mr.") {
		$gender = "Male";
	} else {
		$gender = "Female";
	}
	echo "Gender: $gender <br>";
	
	
	
	
	//-- Find the age and output as "Age in years: age"--
	$bday = $_POST["birth"]; // Your date of birth
	$today = date("Y-m-d");
	$diff = date_diff(date_create($bday), date_create($today));
	echo "Age: ".$diff->format('%y')."<br>";
	
	//-- set default time zone--
	date_default_timezone_set("Asia/Bangkok");
	//-- print the login type as " Login time (local): time on date"-- 
	
	echo "Login time (local): ", date("g:i:sa")," on ",date("Y/m/d");
	
?>
</p> 

<!-- change font to Arial, bold and font size to 150%-->
<p style="font-family:Arial; font-weight: bold; font-size:150%"> Welcome to the ITS 351/CSS 326 system <br></p>
<p style="font-family: Arial">
Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn Database programming. 
There is no need to download anything - just click on the chapter you wish to begin from, and follow the instructions. <br> </p>

<!-- Remeber how you formatted the links in previous lab-->

<ul id="menu">
	<li><a href="https://www.learn-php.org/en/Hello%2C_World%21" target="_blank">Hello World!</a></li>
	<li><a href="https://www.learn-php.org/en/Variables_and_Types" target="_blank"> Variables</a></li>
	<li><a href="https://www.learn-php.org/en/For_loops" target="_blank"> For Loops</a></li>
	<li><a href="https://www.learn-php.org/en/Functions" target="_blank"> Functions</a></li>
	<li><a href="https://www.learn-php.org/en/While_loops" target="_blank"> While loops</a></li>
</ul>

<!-- Change to bold, font to Arial and text size to 120% and Center the text-->
<p style="font-family:Arial; font-weight: bold; font-size:120%; text-align: center;"> Good Luck!</p>
<button onclick="history.go(-1);">Back </button>
</body>
</html>