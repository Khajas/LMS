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
			</p>
			<p>	<input type = "submit" value = "Add Student" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! TABLE STRUCTURE student
sid VARCHAR(255) NOT NULL ,
studentName VARCHAR(255),
stuAddr1 VARCHAR(255),
stuAddr2 VARCHAR(255),
stuPhone INT(10), 
branchId INT(4), 
standard VARCHAR(255), 
section VARCHAR(255),  
PRIMARY KEY(sid), 
FOREIGN KEY (standard,section) REFERENCES class(standard,section), 
FOREIGN KEY (branchId) REFERENCES branch(branchId) );
// Branch Id is hidden from the support specialist, so do we need to replace this with Institute name and branch Name ?
// There is no password for students ?
// How about globalizing the student id's ??
// Where are we adding standards to a school?? and Sections to Standards ??
>