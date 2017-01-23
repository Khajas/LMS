<! Title "Add Student grade for a exam" >
<! Fetch class/section and course detials from session >
<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 22, 2017>
<! Last Modified: Jan 22, 2017>
<html lang="en" dir="ltr">
	<head>
		<title>Add Grade</title>
	</head>
	<body>
	<p><h1>Add Grade</h1></p>
	<fieldset>
		<form  name="studentExamGrade" action="" method=""> <! You might see "?studentExamGrade=" while submitting, 
														because default method is GET >
			<! any pre-requisites ? >
			<p> Student ID: <select name="sid">
				<option value="">--select--</option>
				<!Fetch the student that are enrolled into this section>
				</select>
			</p>
			<! IMPORTANT: Fetch the cours name from GET and use it to fetch examId 
				and populate the recent five dates or exams of current academic year >
			<p>Exam Id: <select name="examId">
				<option value="">--select--</option>
				<!Fetch the student that are enrolled into this section>
				</select>
			</p>
			<p>Exam Date :<select name="examDate"> <! Let it be all the dates in the current academic year>
				<option value="">--select--</option>
				<!Fetch the student that are enrolled into this section>
				</select>
			</p>
			<p>Grade: <input type="text" name="grade"/></p>
			<p>	<input type = "submit" value = "Add Grade"/>
				<input type = "reset" value = "Clear All" /></p>
		</form>
	</fieldset>
	</body>
</html>

<!TABLE STRUCTURE studentExamGrade
( sId VARCHAR(255) NOT NULL ,
examId INT(4) NOT NULL,
examDate Date NOT NULL,
PRIMARY KEY(sId, examId, examDate),
FOREIGN KEY (examId,examDate) REFERENCES exam(examId,examDate) , 
FOREIGN KEY (sId) REFERENCES student(sId));
// Where is the Grade Field ?? :D
>
