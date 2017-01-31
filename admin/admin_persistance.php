<?php
class admin_persistance{
	private $connection_pdo_local;
	function addEntry($new_name, $new_id, $new_email, $new_type){
		if($new_type=="student"){
			$sql_st="insert into student(sid, studentName, studentEmail) values('$new_id', '$new_name', '$new_email')";
			echo "\"insert into student(sid, studentName, studentEmail) values('$new_id', '$new_name', '$new_email')\";";
			$result=$this->connection_pdo_local->query($sql_st);
		}
		else{
	
		}
		// here insert the field into db
	}
	function sendEmail($new_id){
		echo "Please use the following link to register http://localhost/LMS/Forms/addStudent.php?id=$new_id";
	}
	function connect_local(){
		$host = 'localhost';
        $user = 'web';
        $password='mylms';
        $db = 'lmsdb';
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $this->connection_pdo_local = new PDO("mysql:host=$host;dbname=$db",$user,$password);
        try{
			$this->connection_pdo_local->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connection_pdo_local->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		}
		catch(PDOException $e){
			echo "Connection to database failed: ";
			echo $e->getMessage();
			exit();
		}
	}
	/*  public function getCustomer($cust_id){
                        $sql_st="select * from customers where id=$cust_id;";
                        $result_remote=$conn_remote->query($sql_st);
                        $listDet=$result_remote->fetchAll();
                        return $listDet;
                }
				*/
}
?>