<?php
include('admin_persistance.php');
class controller{
	private $name=$_POST['new_name'];
	private $id;
	private $email;
	private $type;
	private $p_obj;
	function init($new_name, $new_id, $new_email, $new_type){
		$this->p_obj=new admin_persistance();
		$this->name=$new_name; $this->id=$new_id; $this->email=$new_email; $this->type=$new_type;
		echo $this->id;
	}
	function addEntry(){
		$this->p_obj->connect_local();
		$this->p_obj->addEntry($this->name, $this->id, $this->email, $this->type);
	}
	function sendEmail(){
		$this->p_obj->sendEmail($this->id);
	}
}
?>