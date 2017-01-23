<! Title "Add A Teacher for a course" >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Assign Teacher</title>
	</head>
	<body>
	<p><h1>Assign Teacher</h1></p>
	<fieldset>
		<form  name="assignTeacher" action="" method=""> <! You might see "?assignTeacher=" while submitting, 
														because default method is GET >
			<! Fetch all the teachers for a given branch and institution >
			<p> Teacher : <select name="empName">
				<option value="">--select--</option>
				<!Fetch the student that are enrolled into this section>
				</select>
			</p>
			<! using the empName, get the empId >
			<p>Course Id: <select name="courseId">
				<option value="">--select--</option>
				<!Fetch the course id of courses taught in school, how about section and standard ??>
				</select>
			<p>	<input type = "submit" value = "Add Grade"/>
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>

	</body>
</html
<!TABLE STRUCTURE teaches
(empId VARCHAR(255) NOT NULL ,
 courseId INT(4) NOT NULL ,
 PRIMARY KEY(empId, courseId),
 FOREIGN KEY (empId) REFERENCES employee(empId) ,
 FOREIGN KEY (courseId) REFERENCES course(courseId)  );
 >
