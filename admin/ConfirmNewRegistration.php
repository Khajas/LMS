<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 30, 2017>
<! Last Modified: Jan 30, 2017>
<! Purpose: Confirm Registration for students and employees >
<html lang="en" dir="ltr">
	<head>
		<title>Confirm Registration</title>
		<script>
			function goBack(){
				window.history.back();
			}
		</script>
	</head>
	<body>
		<p><h1>Confirm Registration</h1><p>
		<fieldset>
			<form name="new_registration" action="admin_ctrl.php" method="POST">
				<?php
					echo "<p>Name: "; echo $_POST['new_name']; echo "</p>";
					echo "<p>ID: "; echo $_POST['new_id']; echo "</p>";
					echo "<p>Email: "; echo $_POST['new_email']; echo"</p>";
					echo "<p>Type: "; echo $_POST['new_type']; echo"</p><br><br>";
				?>
				<input type="submit" value="Confirm & notify"/>
			</form>
			<button onclick="goBack()"> Back </button>
		</fieldset>
	</body>
</html>