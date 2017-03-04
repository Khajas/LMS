<! Title "Assign a course co-ordinator for a section" >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: March 4, 2017>
<! Last Modified: March 4, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Assign Course Co-ordinator</title>
	</head>
	<body>
	<p><h1>Assign Course Co-ordinator</h1></p>
	<fieldset>
		<form  name="addCourse" action="" method=""> <! You might see "?addCourse=" while submitting, 
														because default method is GET >
			<! Let's try fetching instituteId and branchId from session variable 
				and populate all the employees of the branch of that institute>
			<p>Teacher:<select name="teachedName">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute, branch name, standard and section selected>
			</select>
			<p>Standard :<select name="standard">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name>
			</select>
			<p>Section :<select name="section">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name and standard selected>
			</select>
			<p>Academic Year:<select name="academicYear">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name and standard selected>
			</select>
			<p>	<input type = "submit" value = "Assign Co-ordinator" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>