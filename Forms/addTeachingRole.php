<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Teaching Role</title>
	</head>
	<body>
	<p><h1>Add Teaching Role</h1></p>
	<fieldset>
		<form  name="addTeachingRole" action="" method=""> <! You might see "?addTeachingRole=" while submitting, 
														because default method is GET >
			<! Let's try fetching instituteId and branchId from session variable 
				and populate all the employees of the branch of that institute>
			<p>Employee :<select name="empName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name>
			</select>
			<p>Teaching Role :<select name="teachingRole">
				<option value="">--select--</option>
				<option value="">Primary Teacher</option>
				<option value="">High School Teacher</option>
				<option value="">Head of the department</option>
				<option value="">Others</option>
			</select>
			<p>Experience: <input type="text" name="experience"/> </p>
			</p>
			<p>	<input type = "submit" value = "Add Role" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! TABLE STRUCTURE teaching
(empId VARCHAR(255) NOT NULL ,
 teachingRole VARCHAR(255),
 experience VARCHAR (255),
 PRIMARY KEY(empId),
 FOREIGN KEY (empId) REFERENCES employee(empId) )
 // Do we need to specify head of the department or any other attributes here??
 // Let's keep this so that we may give bonus or salary increments for employee with specific title
 >
