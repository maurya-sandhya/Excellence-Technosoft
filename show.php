<?php
include("code.php");
$userobj=new user();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Data</title>
  </head>
  <body>
  <div class="container">
          <div class="row">
              <div class="col-md-12">
                   <div id="showimages"></div>
              </div>
              <div class="col-md- o6ffset-3 mt-5">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h6>Users Records</h6>
                      </div>
                      <div class="card-body">
                          <div cla="row">
                              <div class="col-md-12 text-right mb-3">
                                   <a href="UserForm.php"  class="btn btn-info">Add User</a>
                              </div>
                          </div>
                           <table class="table table-bordered">
                               <tr>
                                   <th>Sr.No.</th>
                                   <th>First Name</th>
                                   <th>Last Name</th>
                                   <th>Email</th>
                                   <th>DOB</th>
                                   <th>Mobile No.</th>
                                   <th>Designation</th>
                                   <th>Gender</th>
                                   <th>Hobbies</th>
                               </tr>
                           <?php
						   $i=1;
                             $users=$userobj->display();
                             foreach($users as $userdata){
                            ?>
				                            
											<tr>
											<td><?php echo $i;?></td>
											<td><?php echo $userdata['fname'] ?></td>
											<td><?php echo $userdata['lname'] ?></td>
											<td><?php echo $userdata['email'] ?></td>
											<td><?php echo $userdata['dob'] ?></td>
											<td><?php echo $userdata['mobile'] ?></td>
											<td><?php echo $userdata['designation'] ?></td>
											<td><?php echo $userdata['gender'] ?></td>
											<td><?php echo $userdata['hobbies'] ?></td>
											</tr>
									<?php
									  $i++;
                                       }
                                      ?>		
											
                           </table>
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
