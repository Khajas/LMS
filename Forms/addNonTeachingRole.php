<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Non Teaching Role</title>
	</head>
	<body>
	<p><h1>Add Non Teaching Role</h1></p>
	<fieldset>
		<form  name="addNonTeachingRole" action="" method=""> <! You might see "?addNonTeachingRole=" while submitting, 
														because default method is GET >
			<! Let's try fetching instituteId and branchId from session variable 
				and populate all the employees of the branch of that institute>
			<p>Employee :<select name="empName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name>
			</select>
			<p>Role :<select name="role">
				<option value="">--select--</option>
				<option value="">Accounting</option>
				<option value="">Security</option>
				<option value="">Transport</option>
				<option value="">Others</option>
			</select>
			</p>
			<p>	<input type = "submit" value = "Add Role" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! TABLE STRUCTURE nonTeaching
(empId VARCHAR(255) NOT NULL ,
nonTeachingRole VARCHAR(255),
PRIMARY KEY(empId),
// Any Conflicts on empName vs empId??
// How about the facility of adding a new role ??
// Let's keep this page for now, we may add new attributes to non teaching staff later
// Shall we specify teaching or non-teaching while creating an employee ??
FOREIGN KEY (empId) REFERENCES employee(empId) ) >
