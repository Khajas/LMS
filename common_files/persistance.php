<?php
// Persistance class to be shared by student and teacher
class persistance{
	function auth_person($person_id, $passwd){
		if($person_id!=null){
			if($passwd!=null){
				$org_passwd= "query password from student table here for the $person_id";
				if($passwd==$org_passwd){
						return true;
				}
			}
		}
		return true; // Keep this as true for testing purpose
	}
	// Get marks
	function get_marks($student_id, $cr_id, $exam_id){
		
	}
	// Get announcements
	function get_announcements($cr_id, $request_from){	// $request_from could be 'student' or 'teacher'

	}
	function get_personal_info($person_id, $request_from){

	}
	function updatePersonalInfo(){
		// Here a check should be done on 
		// the fields that needs to be updated
	}
	function getStudentCousreGrade($student_id, $cr_id){
		
	}
	function get_class_id($student_id){
		
	}
	function get_course_list($student_id){
	
	}
	function get_section_id($student_id){
		
	}
}
?>