<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Employee</title>
	</head>
	<body>
	<p><h1>Add Employee</h1></p>
	<!instituteId, it's auto increment so there is no need to fetch it>
	<! instiName, should entered manually >
	<fieldset>
		<form  name="addEmployee" action="" method=""> <! You might see "?instituteName=" while submitting, 
														because default method is GET >
			<p>Employee ID:<input type="text" name="empId" size="30" /></p>
			<p>Employee Name:<input type="text" name="empName" size="30" /></p>
			<p>Date of Joining:<input type="date" name="joinDate" size="30" /></p>
			<p>Phone Number:<input type="tel" name="instituteBranchId" size="10" /></p>
			<p>Institute Name:<select name="instituteName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here >
			</select>
			</p>
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

<! TABLE STRUCTURE employee
empId VARCHAR(255) NOT NULL , 
empName VARCHAR(255), 
salary DOUBLE(12,2), 
joinDate Date, 
branchId INT(4), 
// Branch Id is hidden from the support specialist, so do we need to replace this with Institute name and branch Name ?
PRIMARY KEY(empId), 
FOREIGN KEY (branchId) REFERENCES branch(branchId) ); 
// There is no password field for employee ??
>