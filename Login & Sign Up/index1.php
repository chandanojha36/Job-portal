<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
  
</head>
<body>

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="images/Profile1.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                    
                        </div>
                        <div class="profile-usertitle-job">
                            Mr.Chandan 
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                   

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-th-list"></i>
                               Dashboard </a>
                            </li>
							
							<li>
							<a href="#">
							        <i class="glyphicon glyphicon-user"></i>
							  Profile</a>
						    </li>
							
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-search"></i>
                                Search Jobs </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="glyphicon glyphicon-edit"></i>
                                Apply For Jobs </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-folder-open"></i>
                                Create Resume </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>

             <!-- Start Dashboard Content -->
            <div class="col-md-9">
                <div class="profile-content">
				
				<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
                   <h4>Welcome To Jobseeker Dashboard ! </h4>
                   <br> 

                   <div class="gallery">
                    <a target="_blank" href="images/search_jobs.jpg">
                      <img src="images/search_jobs.jpg" alt="images/Search Jobs" width="600" height="400">
                    </a>
                    <div class="desc">Search Jobs</div>
                  </div>

                  <div class="gallery">
                    <a target="_blank" href="images/apply_jobs.png">
                      <img src="images/apply_jobs.png" alt="Search Jobs" width="600" height="400">
                    </a>
                    <div class="desc">Apply for Jobs</div>
                  </div>

                  <div class="gallery">
                    <a target="_blank" href="images/create_resume.png">
                      <img src="images/create_resume.png" alt="Search Jobs" width="600" height="400">
                    </a>
                    <div class="desc">Create Resume</div>
                  </div>
                   
                   
                </div>
            </div>
            <!-- End Dashboard Content -->
        </div>
    </div>
    
    
    
</body>
</html>