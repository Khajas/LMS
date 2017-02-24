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
			<form name="new_registration" action="NewRegistration.html" method="">
				<?php
				include('admin_ctrl.php');
				$name=$_POST['new_name'];
				$id=$_POST['new_id'];
				$email=$_POST['new_email'];
				$type=$_POST['new_type'];
					echo "<p>Name: "; echo $name; echo "</p>";
					echo "<p>ID: "; echo $id; echo "</p>";
					echo "<p>Email: "; echo $email; echo"</p>";
					echo "<p>Type: "; echo $type; echo"</p><br><br>";
					$obj_cntrl=new controller();
					$obj_cntrl->init($name, $id, $email, $type);
					$obj_cntrl->addEntry();
					$obj_cntrl -> sendEmail();
				?>
				<input type="submit" value="Confirm & notify"/>
			</form>
			<button onclick="goBack()"> Back </button>
		</fieldset>
	</body>
</html>