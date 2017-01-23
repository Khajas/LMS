<! Title "Add New Course to a section of a class" >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add New Course</title>
	</head>
	<body>
	<p><h1>Add New Course</h1></p>
	<fieldset>
		<form  name="addNewCourse" action="" method=""> <! You might see "?courseName=" while submitting, 
														because default method is GET >
			<! Let's try fetching instituteId and branchId from session variable 
				and populate all the employees of the branch of that institute>
			<p>Course Name :<input type="text" name="courseName">
			<p>Syllabus :<input type="text" name="courseName">
			<p>	<input type = "submit" value = "Add New Course"/>
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<!TABLE STRUCTURE course
(courseId INT(4) NOT NULL AUTO_INCREMENT,
courseName VARCHAR(255),
syllabus VARCHAR(255),
PRIMARY KEY(courseId));
// Why syllabus is varchar, do we need a text area or text input field?
>
