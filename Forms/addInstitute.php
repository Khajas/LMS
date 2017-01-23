<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Institution</title>
	</head>
	<body>
	<! I will this php code snippet later to get the information on our 
	employer or some else, who added this institution
	php start tag here--
	$sa_oc=$_GET['san'];
	$id=$_GET['id']; 
	php end tag here-->

	<p><h1>Create Institution</h1></p>
	<!instituteId, it's auto increment so there is no need to fetch it>
	<! instiName, should entered manually >
	<fieldset>
		<form  name="addInstitute" action="" method=""> <! You might see "?instituteName=" while submitting, because default method is GET >
			<p>New Institute Name:<input type="text" name="instituteName" size="30" /></p>
			<p>	<input type = "submit" value = "Add Institution" />
				<input type = "reset" value = "Clear Name" /></p>
		</form>
	</fieldset>
	</body>
</html>