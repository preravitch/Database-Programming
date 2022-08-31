<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="sticky.css">
</head>

<body>
	<form action="sticky.php" method="POST">
		<b>Title</b>: <input type="text" name="title" id="title" size="30" > <br><br>
		<b>Note</b>: <textarea name="note" cols="30" rows="5" ></textarea> <br>
		<input type="submit" value="Post!" name="submit" >
	</form>
	<hr>
	<!-- Put Display Content here -->
	<div class="post">
		<div class="title">
		<?php
		// only execute after submit
		// POST the title		
		// open a file named "Sticky_note.txt"
		// write the title in the text file
		}
		?>
		</div>
		<div class="note">
		<?php
		// only execute after submit
	    // POST the note
		// write the title in the text file
		// close the text file
		}
		?>
		</div>
		<div class="notefoot">
		<?php
		// count how many notes, output: "__ notes have been made"
		?>
		</div>
	</div>
</body>

</html>