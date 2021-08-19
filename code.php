<?php
class user{
	function dbcon(){
		mysql_connect("localhost","root","");
		mysql_select_db("technosoft");
	}

	function insert()
	{
		$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			 $dob=$_POST['dob'];
			 $mobile=$_POST['mobile'];
			 $designation=$_POST['designation'];
			 $gender=$_POST['gender'];
			 $hobbies=implode(',',$_POST['hob']);
		$this->dbcon();
		$query="insert into user_info (fname,lname,email,dob,mobile,designation,gender,hobbies,reg_date) values('$fname','$lname','$email','$dob','$mobile','$designation','$gender','$hobbies', curdate())";
		mysql_query($query);
		header("Location:show.php");
	}
	function display()
	{
		$this->dbcon();
			$select="select * from user_info";
			$res=mysql_query($select);
			  $data=array();
		    while ($row=mysql_fetch_array($res,MYSQL_BOTH)) {
		           $data[]= $row;
		    }
			 return $data;	
	}
}
?>