<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Class</title>
	</head>
	<body>
	<p><h1>Add Class</h1></p>
		<fieldset>
		<form  name="addClass" action="" method=""> <! You might see "?instituteName=" while submitting, 
														because default method is GET >
			<p>Standard :<input type="text" name="empId" size="30" /></p>
			<p>Section :<input type="text" name="empName" size="30" /></p>
			<p>Academic Year :<input type="text" name="salary" size="30" /></p>
			<p>Branch Name:<select name="branchName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute name>
			</select>
			</p>
			<p>	<input type = "submit" value = "Add Employee" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! Table Structure class
standard VARCHAR(255) NOT NULL,
section VARCHAR(255) NOT NULL,
academicYear INT(4) NOT NULL, 
branchId INT(4),
PRIMARY KEY(standard,section,academicYear),
FOREIGN KEY (branchId) REFERENCES branch(branchId)

// branchId is hidden from the support specialist ?? So let's consider branch Name or Institute Name

>