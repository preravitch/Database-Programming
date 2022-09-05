<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="sticky.css">
</head>

<body>
	<form action="sticky_st.php" method="POST">
		<b>Title</b>: <input type="text" name="title" id="title" size="30" > <br><br>
		<b>Note</b>: <textarea name="note" cols="30" rows="5" ></textarea> <br>
		<input type="submit" value="Post!" name="submit" >
	</form>
	<hr>
	<!-- Put Display Content here -->
	<div class="post">
		<div class="title">
		<?php
		if (isset($_POST['submit'])){// only execute after submit
			echo $_POST['title'];// POST the title		
			$file = fopen("Sticky_note.txt","a");// open a file named "Sticky_note.txt"
			fwrite($file, $_POST['title']."\n");// write the title in the text file
		}
		?>
		</div>
		<div class="note">
		<?php
		if (isset($_POST['submit'])){// only execute after submit
	    	echo $_POST['note'];// POST the note
			fwrite($file, $_POST['note']."\n");// write the title in the text file
			fclose($file);// close the text file
		}
		?>
		</div>
		<div class="notefoot">
		<?php
		// count how many notes, output: "__ notes have been made"
		if (isset($_POST['submit'])){
			$count = 0;
			$file = fopen("Sticky_note.txt","r");
			while(!feof($file)){
				$line = fgets($file);
				$count++;
			}
			fclose($file);
			echo ($count-1)/2, " notes have been made";
		}
		?>
		</div>
	</div>
</body>

</html>