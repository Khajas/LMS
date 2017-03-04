<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Branch</title>
	</head>
	<body>
	<p><h1>Add Branch</h1></p>
	<!instituteId, it's auto increment so there is no need to fetch it>
	<! instiName, should entered manually >
	<fieldset>
		<form  name="addBranch" action="" method=""> <! You might see "?instituteName=" while submitting, because default method is GET >
			<p>New Branch Name:<input type="text" name="branchName" size="30" /></p>
			<p>Branch Id:<input type="text" name="instituteBranchId" size="30" /></p>
			<p>Address Line 1:<input type="text" name="instituteBranchId" size="30" /></p>
			<p>Address Line 2:<input type="text" name="instituteBranchId" size="30" /></p>
			<p>Phone Number:<input type="text" name="instituteBranchId" size="30" /></p>
			<!Fetch institute id from session variables>
			<p>	<input type = "submit" value = "Add Branch" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<! TABLE STRUCTURE
branch(branchId INT(4) NOT NULL AUTO_INCREMENT, 
instituteBranchId VARCHAR(255),
branchName VARCHAR(255), 
branchAddr1 VARCHAR(255), 
branchAddr2 VARCHAR(255), 
phoneNum INT(10), 
instituteId INT(4), 
PRIMARY KEY (branchId), 
FOREIGN KEY (instituteId) REFERENCES institute(instituteId) );
>