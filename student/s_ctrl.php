<! Programmer Khaja Anwar Ali siddiqui >
<! Date Created: Jan 27, 2017>
<! Last Modified: Jan 27, 2017>
<! Purpose: Controlled Class for Student Login >
<?php
include('../common_files/persistance.php');
class student_ctrl{
	// Private variables
	private $student_id;	
	private $course_list;
	private $class_id;
	private $section_id;	// Unuseds
	private $logged_in;
	// Object to persistance class
	private $p_obj;
	
	function set_object(){
		$this->p_obj=new persistance();
	}
	
	function auth_student($s_id, $passwd){
		$this->logged_in=$this->p_obj->auth_person($s_id, $passwd);
		echo "Password: ";  echo $passwd;
	}
	
	function get_auth_status(){
		return $this->logged_in;
	}
	// Memeber functions
	// This following function is like a constructor
	function init_var($sid){
		if(!$this->logged_in){
			// Ask the user to log again
			return;
		}
		$this->student_id=$sid;
		// Get the class id, based on student id from persistance
		// and assign it to the private variable
		$this->class_id=$this->p_obj->get_class_id($this->student_id);
		$this->course_list=$this->p_obj->get_course_list($this->student_id);
		$this->section_id=$this->p_obj->get_section_id($this->student_id);
	}
	
	// Getters
	function get_id(){
		return $this->student_id;
	}
	function get_class_id(){
		return $this->class_id;
	}
	function get_section_id(){
		return $this->section_id;
	}
	function get_courseList(){
		return $this->course_list;
	}
	// Get marks
	function get_marks($cr_id, $exam_id){
		return $this->p_obj->get_makrs($this->student_id, $cr_id, $exam_id);
	}
	// Get announcements
	function get_announcements(){
			$this->ann_list=$p_obj->get_announcements($cr_id,"student"); // Why emp_id here?
	}
	function get_personal_info(){
		return $this->p_obj->get_personal_info($this->student_id,"student");	//"Student because info should be read only
																		// Or can we make this in interface??
	}
	function updatePersonalInfo(){
		// Here a check should be done on 
		// the fields that needs to be updated
	}
	function getStudentCousreGrade($cr_id){
		return $this->p_obj->getStudentCourseGrade($this->student_id, $cr_id);
	}
	function logout(){
		$this->logged_in=false;
		// redirect to the home or login page
	}
}
?>
<?php
include('Login.html');
	$obj= new student_ctrl();
	$sid=$_POST['s_id'];
	$passwd=md5($_POST['passwd']);
	$obj->set_object();
	$obj->auth_student($sid, $passwd);
	if(!$obj->get_auth_status()){
		header('Login.html');
		exit();
	}
	$obj->init_var($sid);
	echo $obj->get_id();
?>