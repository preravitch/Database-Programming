<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="sticky.css">
</head>

<body>
    <!--Input the correct action and method-->
	<form action="triangles.php" method="POST"-->
	
		<b>Parameter</b>: <input type='number' name='parameter' id='parameter'> <br><br>
		
		<input type="submit" value="Post!" name="submit" >
	</form>
	<hr>
	<!-- Put Display Content here -->
	<?php
	if (isset($_POST["submit"]))
	{
	/* Generate the tringle */  
		$p = $_POST['parameter'];
		for($x = 1;$x <= $p;$x++){
			for($y = 1;$y <= $x;$y++){
				echo "<img src='tri_sq.png' width='20' height='20'>"." ";
			}
			echo "<br>";
		}

		for($x = $p;$x >= 1;$x--){
			for($y = 1;$y < $x;$y++){
				echo "<img src='tri_sq.png' width='20' height='20'>"." ";
			}
			echo "<br>";
		}
		
	}
	?>
</body>

</html>