SET foreign_key_checks =0;
Drop TABLE IF EXISTS institute, branch, employee, class, student, nonTeaching, teaching, classCourse, course, exam, studentExamGrade, teaches ;
create table institute(instituteId INT(4) NOT NULL AUTO_INCREMENT, instiName VARCHAR(255), PRIMARY KEY(instituteId));

create table branch(branchId INT(4) NOT NULL AUTO_INCREMENT, instituteBranchId VARCHAR(255),branchName VARCHAR(255), branchAddr1 VARCHAR(255), branchAddr2 VARCHAR(255), phoneNum INT(10), instituteId INT(4), PRIMARY KEY (branchId), FOREIGN KEY (instituteId) REFERENCES institute(instituteId) );

create table employee(empId VARCHAR(255) NOT NULL , empName VARCHAR(255), salary DOUBLE(12,2), joinDate Date, branchId INT(4), PRIMARY KEY(empId), FOREIGN KEY (branchId) REFERENCES branch(branchId) ); 

create table class(standard VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, academicYear INT(4) NOT NULL, branchId INT(4), PRIMARY KEY(standard,section,academicYear), FOREIGN KEY (branchId) REFERENCES branch(branchId) );

create table student(sid VARCHAR(255) NOT NULL , studentName VARCHAR(255), stuAddr1 VARCHAR(255), stuAddr2 VARCHAR(255), stuPhone INT(10),  branchId INT(4), standard VARCHAR(255), section VARCHAR(255),  PRIMARY KEY(sid), FOREIGN KEY (standard,section) REFERENCES class(standard,section), FOREIGN KEY (branchId) REFERENCES branch(branchId) );

create table nonTeaching(empId VARCHAR(255) NOT NULL , nonTeachingRole VARCHAR(255), PRIMARY KEY(empId), FOREIGN KEY (empId) REFERENCES employee(empId) );

create table teaching(empId VARCHAR(255) NOT NULL , teachingRole VARCHAR(255), experience VARCHAR (255), PRIMARY KEY(empId), FOREIGN KEY (empId) REFERENCES employee(empId) );

create table classCourse(standard VARCHAR(255) NOT NULL , section VARCHAR(255) NOT NULL,academicYear INT(4) NOT NULL,  courseId INT(4) NOT NULL, PRIMARY KEY(standard,section,academicYear,courseId), FOREIGN KEY (standard,section,academicYear) REFERENCES class(standard,section,academicYear) , FOREIGN KEY (courseId) REFERENCES course(courseId)  );

create table course(courseId INT(4) NOT NULL AUTO_INCREMENT, courseName VARCHAR(255), syllabus VARCHAR(255), PRIMARY KEY(courseId));

create table exam(examId INT(4) NOT NULL AUTO_INCREMENT, examDate DATE, courseId INT(4), PRIMARY KEY(examId,examDate),  FOREIGN KEY (courseId) REFERENCES course(courseId) );

create table studentExamGrade(sId VARCHAR(255) NOT NULL , examId INT(4) NOT NULL, examDate Date NOT NULL,PRIMARY KEY(sId, examId, examDate), FOREIGN KEY (examId,examDate) REFERENCES exam(examId,examDate) , FOREIGN KEY (sId) REFERENCES student(sId)  );

create table teaches(empId VARCHAR(255) NOT NULL , courseId INT(4) NOT NULL, PRIMARY KEY(empId, courseId), FOREIGN KEY (empId) REFERENCES employee(empId) , FOREIGN KEY (courseId) REFERENCES course(courseId)  );
SET foreign_key_checks =1;



