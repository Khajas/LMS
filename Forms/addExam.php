<! Title "Add New Exam to a section of a class" >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add New Exam</title>
	</head>
	<body>
	<p><h1>Add New Exam</h1></p>
	<fieldset>
		<form  name="addExamCourse" action="" method=""> <! You might see "?addExamCourse=" while submitting, 
														because default method is GET >
			<! any pre-requisites ? >
			<p>Exam Name:<input type="text" name="examName"> // No such field in db
			<p>Exam Date :<input type="Date" name="examDate">
			<p>Course Id:<select name="courseId">
				<option value="">--select--</option>
				<! Fetch the values dynamically here depending on the institute and branch name and standard/section selected>
				</select>
			</p>
			<p>	<input type = "submit" value = "Add Exam Details"/>
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>


<! TABLE STRUCTURE exam
(examId INT(4) NOT NULL AUTO_INCREMENT,
examDate DATE,
courseId INT(4),
PRIMARY KEY(examId,examDate),
FOREIGN KEY (courseId) REFERENCES course(courseId) );
// We should have exam name too ?? Any specific reason that we skipped it?
// Course Id or course Name, which is more readable ? we have 01 or MATH01 ?
// Do we need section also ? To narrow down the course Id's(we can fetch it and use, need to have it in our table
>