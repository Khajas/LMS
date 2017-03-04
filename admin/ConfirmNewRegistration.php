<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 30, 2017>
<! Last Modified: Jan 30, 2017>
<! Purpose: Confirm Registration for students and employees >
<html lang="en" dir="ltr">
	<head>
		<title>Confirm Registration</title>
		<script type="text/javaScript">
			function goBack(){
				window.history.back();
			}
		</script>
	</head>
	<body>
		<p><h1>Confirm Registration</h1><p>
		<fieldset>
			<form name="new_registration" id="myId" action="confirmNewRegistration.php">
				<?php
					if($_SERVER['REQUEST_METHOD']== "GET"){
						goAhead($_GET['new_name'],$_GET['new_id'], $_GET['new_email'], $_GET['new_type']);
					}else{
						$name=$_POST['new_name'];
						$id=$_POST['new_id'];
						$email=$_POST['new_email'];
						$type=$_POST['new_type'];
							echo "<p>Name: "; echo $name; echo "</p>";
							echo "<p>ID: "; echo $id; echo "</p>";
							echo "<p>Email: "; echo $email; echo"</p>";
							echo "<p>Type: "; echo $type; echo"</p><br><br>";
						// Hide the fields here, to be captured by GET
						echo "<input type=\"hidden\" name=\"new_name\" value=$name>";
						echo "<input type=\"hidden\" name=\"new_id\" value=$id>";
						echo "<input type=\"hidden\" name=\"new_email\" value=$email>";
						echo "<input type=\"hidden\" name=\"new_type\" value=$type>";
					}
					function goAhead($name, $id, $email, $type){
						include('admin_ctrl.php');
						$obj_cntrl=new controller();
						$obj_cntrl->init($name, $id, $email, $type);
						$obj_cntrl->addEntry();
						$obj_cntrl -> sendEmail();
						header("Location: ./NewRegistration.html");
					}	
				?>
				<input type="submit" value="Confirm & notify"/>
			</form>
			<button onclick="goBack()"> Back </button>
			<button onclick=""> Homepage </button>
		</fieldset>
	</body>
</html>