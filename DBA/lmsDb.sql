 # AUTHOR: SHOAIB MOMIN
 # Created: Jan 22, 2017
 # Last Modified : Feb 1,2017

SET foreign_key_checks =0;

Drop TABLE IF EXISTS institute, branch, employee, class, student, classCourse, course, exam, studentExamGrade, teaches, announcement ;
create table institute(instituteId INT(4) NOT NULL AUTO_INCREMENT, instiName VARCHAR(255), PRIMARY KEY(instituteId));

create table branch(branchId INT(4) NOT NULL AUTO_INCREMENT, instituteBranchId VARCHAR(255),branchName VARCHAR(255), branchAddr1 VARCHAR(255), branchAddr2 VARCHAR(255), phoneNum INT(10), instituteId INT(4), PRIMARY KEY (branchId), FOREIGN KEY (instituteId) REFERENCES institute(instituteId) );

create table employee(empId VARCHAR(255) NOT NULL , ueid VARCHAR(255), empName VARCHAR(255), empPassword VARCHAR(255), empAddr1 VARCHAR(255), empAddr2 VARCHAR(255), empPhone INT(10), empEmail VARCHAR(255), empRole VARCHAR(255), salary DOUBLE(12,2), joinDate Date, branchId INT(4), PRIMARY KEY(empId), FOREIGN KEY (branchId) REFERENCES branch(branchId) ); 

create table class(standard VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, academicYear VARCHAR(255) NOT NULL, branchId INT(4), PRIMARY KEY(standard,section,academicYear), FOREIGN KEY (branchId) REFERENCES branch(branchId) );

create table student(sid VARCHAR(255) NOT NULL , usid VARCHAR(255), studentName VARCHAR(255), stuPassword VARCHAR(255),  stuAddr1 VARCHAR(255), stuAddr2 VARCHAR(255), stuPhone INT(10),stuEmail VARCHAR(255),  branchId INT(4), standard VARCHAR(255), section VARCHAR(255),  PRIMARY KEY(sid), FOREIGN KEY (standard,section) REFERENCES class(standard,section), FOREIGN KEY (branchId) REFERENCES branch(branchId) );



create table classCourse(standard VARCHAR(255) NOT NULL , section VARCHAR(255) NOT NULL,academicYear VARCHAR(255) NOT NULL,  courseId INT(4) NOT NULL, PRIMARY KEY(standard,section,academicYear,courseId), FOREIGN KEY (standard,section,academicYear) REFERENCES class(standard,section,academicYear) , FOREIGN KEY (courseId) REFERENCES course(courseId)  );

create table course(courseId INT(4) NOT NULL AUTO_INCREMENT,standard VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, academicYear VARCHAR(255) NOT NULL, courseName VARCHAR(255), syllabus VARCHAR(255), PRIMARY KEY(courseId,standard,section,academicYear), FOREIGN KEY (standard, section, academicYear) REFERENCES class(standard, section, academicYear));

create table exam(examId INT(4) NOT NULL AUTO_INCREMENT,standard VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, academicYear VARCHAR(255) NOT NULL, examName VARCHAR(255), examDate DATE, courseId INT(4), PRIMARY KEY(examId,examDate,courseId,standard,section,academicYear),  FOREIGN KEY (courseId,standard,section,academicYear) REFERENCES course(courseId,standard,section,academicYear) );

create table studentExamGrade(sId VARCHAR(255) NOT NULL , examId INT(4) NOT NULL, examDate Date NOT NULL, grade VARCHAR(255), PRIMARY KEY(sId, examId, examDate), FOREIGN KEY (examId,examDate) REFERENCES exam(examId,examDate) , FOREIGN KEY (sId) REFERENCES student(sId)  );

create table teaches(empId VARCHAR(255) NOT NULL , courseId INT(4) NOT NULL,standard VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, academicYear VARCHAR(255) NOT NULL, PRIMARY KEY(empId, courseId,standard,section,academicYear), FOREIGN KEY (empId) REFERENCES employee(empId) , FOREIGN KEY (courseId,standard,section,academicYear) REFERENCES course(courseId,standard,section,academicYear)  );

create table announcement(announceId INT(4) NOT NULL, announceTxt VARCHAR(255), announceDate DATE, empId VARCHAR(255), courseId INT(4), standard VARCHAR(255), section VARCHAR(255), academicYear VARCHAR(255), PRIMARY KEY(announceId), FOREIGN KEY (empID) REFERENCES employee(empId), FOREIGN KEY (courseId,standard,section,academicYear) REFERENCES course(courseId,standard,section,academicYear));


SET foreign_key_checks =1;



