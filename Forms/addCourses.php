<! Title "Add Course to a section of a class >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Course</title>
	</head>
	<body>
	<p><h1>Add Course</h1></p>
	<fieldset>
		<form  name="addCourse" action="" method=""> <! You might see "?addCourse=" while submitting, 
														because default method is GET >
			<! Let's try fetching instituteId and branchId from session variable 
				and populate all the employees of the branch of that institute>
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
			<p>Course ID:<select name="courseId">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute, branch name, standard and section selected>
			</select>
			<p>	<input type = "submit" value = "Add Course" />
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>
<! Table Structure classCourse
(standard VARCHAR(255) NOT NULL ,
section VARCHAR(255) NOT NULL,
academicYear INT(4) NOT NULL,
courseId INT(4) NOT NULL,
PRIMARY KEY(standard,section,academicYear,courseId),
FOREIGN KEY (standard,section,academicYear) REFERENCES class(standard,section,academicYear) , 
FOREIGN KEY (courseId) REFERENCES course(courseId)  );
// Institute Id, Branch Id, Employee Id(IT support) should be session varaibales or global
& must be available all the times//
>