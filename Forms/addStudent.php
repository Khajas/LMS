<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Student</title>
	</head>
	<body>
	<p><h1>Add Student</h1></p>
	<fieldset>
		<form  name="addStudent" action="" method=""> <! You might see "?addStudent=" while submitting, 
														because default method is GET >
			<p>Student ID:<input type="text" name="sid" size="30" /></p>
			<p>student Name:<input type="text" name="studentName" size="30" /></p>
			<p>Address Line1 :<input type="text" name="stuAddr1" size="30" /></p>
			<p>Address Line2 :<input type="text" name="stuAddr2" size="30" /></p>
			<p>Phone Number:<input type="tel" name="instituteBranchId" size="10" /></p>
			<! Else let's try fetching instituteId and branchId from session variable ? >
			<p>Branch Name:<select name="branchName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute name>
			</select>
			</p>
			<p>Standard: <select name="standard">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the branch of that institution>
			</select>
			</p>
			<p>Section: <select name="section">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the sections of that standard>
			</select>
			<p>Password:<input type="password" name="passwd" size="30" /></p>
			<p>Confirm password:<input type="password" name="c_passwd" size="30" /></p>
			</p>
			<p>	<input type = "submit" value = "Add Student" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! TABLE STRUCTURE student
Field 		Type 	Null 	Key 	Default 	Extra 	
sid 		varchar(255) 	NO 		PRI 	NULL	
usid 		varchar(255) 	YES 			NULL	
studentName varchar(255) 	YES 			NULL	
stuPassword varchar(255) 	YES 			NULL	
stuAddr1 	varchar(255) 	YES 			NULL	
stuAddr2 	varchar(255) 	YES 			NULL	
stuPhone 	int(10)		 	YES 			NULL	
branchId 	int(4) 			YES 	MUL		NULL	
standard 	varchar(255) 	YES 	MUL 	NULL	
section 	varchar(255) 	YES 			NULL	
>