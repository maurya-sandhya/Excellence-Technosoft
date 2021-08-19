<?php
error_reporting(0);

if(isset($_POST['submit']))
{
	include("code.php");
    $userobj=new user();
		$fnameErr="";
		$lnameErr="";
		$emailErr="";
		$dobErr="";
		$mobileErr="";
		$designationErr="";
		$genderErr="";
		$hobErr="";
		
		if(empty($_POST['fname'])){
		
		$fnameErr="* First name is required";
	}
	else if(strlen($_POST['fname']>2||strlen($_POST['fname']<10))){
		$fnameErr="Invalid name";
		
	}
	else{
		$fname=$_POST['fname'];
	}
	
	if(empty($_POST['lname'])){
		$lnameErr=" * Last name is required";
	}
	else if(strlen($_POST['lname']>2||strlen($_POST['lname']<10))){
		$lnameErr="Invalid namme";
	}
	else{
		$lname=$_POST['lname'];
	}
	
	if(empty($_POST['email'])){
		$emailErr=" * Email is required";
	}else{
		 $email=$_POST['email'];
	}
	
	if(empty($_POST['dob'])){
		$dobErr="* Date of birth is required";
	}else{
		 $dob=$_POST['dob'];
	}
	
	if(empty($_POST['mobile'])){
		$mobileErr="* Mobile number is required";
	}
	else if(strlen((string)$_POST['mobile'])==10){
		$mobileErr="Invalid Mobile number";
	}
	else{
		 $mobile=$_POST['mobile'];
	}
	
	if(empty($_POST['designation'])){
		$designationErr="* Designation is required";
	}else{
		 $designation=$_POST['designation'];
	}
	
	if(empty($_POST['gender'])){
		$genderErr="* Gender is required";
	}else{
		 $gender=$_POST['gender'];
	}
	
	if(empty($_POST['hob'])){
		$hobErr="* Hobbies is required";
	}else{
		 $hobbies=implode(',',$_POST['hob']);
	}
	
if($fnameErr==""||$lnameErr==""||$emailErr==""||$dobErr==""||$mobileErr==""||$designationErr==""||$genderErr==""||$hobErr=="")
{
	$userobj->insert();
}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User-Registration Form</title>
  </head>
  <body>
    
     <div class="container">
          <div class="row">
              <div class="col-md-12">
                   <div id="showimages"></div>
              </div>
              <div class="col-md-7 offset-3 mt-5">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h6>User Registration Form</h6>
                      </div>
                      <div class="card-body">
                          <div cla="row">
                              <div class="col-md-12 text-right mb-3">
                                  <a href="show.php" class="btn btn-info">Show User Record</a>
                              </div>
                          </div>
                           <form method="post" action="UserForm.php">
                               
                                <div class="form-group">
                                    <lable><strong>First Name :</strong></lable>
                                    <input type="text" name="fname" class="form-control" id="ufname"/>
									<span style="color:red"><?php echo $fnameErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Last Name :</strong></lable>
                                    <input type="text" name="lname" class="form-control" id="ulname"/>
									<span style="color:red"><?php echo $lnameErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Email :</strong></lable>
                                    <input type="email" name="email" class="form-control" id="email"/>
									<span style="color:red"><?php echo $emailErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Date of Birth :</strong></lable>
                                    <input type="date" name="dob" class="form-control" id="dob"/>
									<span style="color:red"><?php echo $dobErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Mobile Number :</strong></lable>
                                    <input type="number" name="mobile" class="form-control" id="mobile"/>
									<span style="color:red"><?php echo $mobileErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Designation :</strong></lable>
                                    <input type="text" name="designation" class="form-control" id="designation"/>
									<span style="color:red"><?php echo $designationErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Gender :</strong></lable>
                                    <lable><input type="radio" name="gender" value="male"/>Male</lable>
                                    <lable><input type="radio" name="gender" value="female"/>Female</lable>
									&nbsp;&nbsp;<span style="color:red"><?php echo $genderErr; ?></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Hobbies :</strong></lable>
                                    <lable><input type="checkbox" name="hob[]" value="singing"/>Singing</lable>
                                    <lable><input type="checkbox" name="hob[]" value="dancing"/>Dancing</lable>
                                    <lable><input type="checkbox" name="hob[]" value="cooking"/>Cooking</lable>
                                    <lable><input type="checkbox" name="hob[]" value="stiching"/>Stiching</lable>
									&nbsp;&nbsp;<span style="color:red"><?php echo $hobErr; ?></span>
                                </div>
                                <hr>
                                <div class="form-group text-center">
                                    <button type="submit" name="submit" class="btn btn-success btn-sm">Register</button>
                                </div>
                           </form>
                      </div>
                  </div>
              </div>
          </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>