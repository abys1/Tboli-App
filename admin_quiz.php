<!-- <?php
      session_start();
      $user_id = $_SESSION['user_id'];
?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin dashboard</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	

        
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <style>
      
 
  /* Adjusted width for modal */
  #addEmployeeModal .modal-dialog {
    max-width: 800px;
    width: 100%;
    margin: auto;
  }
  .active {
    font-size: 15px;
  }
  
  .inactive {
    font-size: 15px;
  }

      </style>
      
  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
             <nav id="sidebar">
            <div class="sidebar-header">
            <h3><img src="img/logoT.png" class="img-fluid"/><br>T'Boli</br></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Dashboard</span></a>
                </li>

                <li class="">
                    <a href="admin_add.php"><i class="fas fa-user"></i><span>Admin</span></a>
                </li>
		
                <li class="">
                    <a href="admin_student.php"><i class="fas fa-user"></i><span>Student</span></a>
                </li>

                <li class="">
                    <a href="admin_teacher.php"><i class="fas fa-user"></i><span>Teachers</span></a>
                </li>

                <li class="">
                    <a href="admin_upload.php"><i class="fas fa-user"></i><span>Upload Lesson/Content</span></a>
                </li>

                <li class="">
                    <a href="admin_Quiz.php"><i class="fas fa-user"></i><span>Quiz</span></a>
                </li>

                <li class="">
                    <a href="admin_modulerequest.php"><i class="fas fa-user"></i><span>Module request</span></a>
                </li>
                
               
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <nav id="sidebar">
            <div class="sidebar-header">
            <h3><img src="img/logoT.png" class="img-fluid"/><br>T'Boli</br></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Dashboard</span></a>
                </li>

                <li class="">
                    <a href="admin_add.php"><i class="fas fa-user"></i><span>Admin</span></a>
                </li>
		
                <li class="">
                    <a href="admin_student.php"><i class="fas fa-user"></i><span>Student</span></a>
                </li>

                <li class="">
                    <a href="admin_teacher.php"><i class="fas fa-user"></i><span>Teachers</span></a>
                </li>

                <li class="">
    <a href="admin_upload.php"><i class="fas fa-upload"></i><span>Upload Lesson/Content</span></a>
</li>


<li class="">
    <a href="admin_Quiz.php"><i class="fas fa-puzzle-piece"></i><span>Quiz</span></a>
</li>

                <li class="">
    <a href="admin_modulerequest.php"><i class="fas fa-file-alt"></i><span>Module request</span></a>
</li>

                
                <li class="">
                    <a href="admin_assign_teacher.php"><i class="fas fa-user"></i><span>Assign Teacher to Lesson</span></a>
                </li>

                <li class="">
    <a href="admin_progress.php"><i class="fas fa-chart-line"></i><span>Progress</span></a>
</li>

              
                <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="fas fa-chart-bar"></i> Reports
</a>

                    
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="admin_ABM.php">List of Student</a>
                        </li>
                        <li>
                            <a href="admin_STEM.php">List of Teachers</a>
                        </li>
                        <li>
                            <a href="admin_HUMMS.php">List of Area</a>
                        </li>
                        <li>
                            <a href="admin_EIM.php">List of Lesson</a>
                        </li>
                        <li>
                            <a href="admin_FBS.php">List of Class w/Teacher</a>
                        </li>
                    </ul>
                </li>
                    </ul>
                </li>           
            </ul>          
        </nav>
		
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                      <div class="xp-searchbar">
                        <form>
                          <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" id="searchInput">
                            <div class="input-group-append">
                              <button class="btn" type="submit" id="searchButton">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                    <nav class="navbar p-0">
                              <ul class="nav navbar-nav flex-row ml-auto">   
                                
                                  </li>
                                  <li class="nav-item">
                          
                                  </li>
                                  <li class="nav-item dropdown">
                                      <a class="nav-link" href="#" data-toggle="dropdown">
                      <img src="img/admin.png" style="width:40px; border-radius:50%;"/>
                      <span class="xp-user-live"></span>
                      </a>
                      <ul class="dropdown-menu small-menu">
                          <li>
                          <a href="profile.php?user_id=<?php echo $_SESSION['user_id']?>">
                            <span class="material-icons">person_outline</span>Profile</a>
                          </li>
                          <li>
                              <a href="admin_dashboard.php?logout=true"><span class="material-icons">logout</span>Logout</a>
                          </li>
                      </ul>
                          </li>
                      </ul>   
                    </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		   
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Manage Quiz</h2>
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
        <a href="#fileUploadModal" class="btn btn-success" data-toggle="modal">

		  <i class="material-icons">&#xE147;</i> <span>Add Questions</span></a>

        </div>
      </div>
    </div>
    <br>
    <div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="#" alt="#"> -->
  <div class="card-body">
    <h5 class="card-title">Letters Quiz 01</h5>
    <h5>True or False</h5>
    <p class="card-text">The answer to this type of question can only be true or false. A correct answer gets full points,
                              and an incorrect answer gets zero points.</p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div> <br>
<div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="#" alt="#"> -->
  <div class="card-body">
    <h5 class="card-title">Letters Quiz 02</h5>
    <h5>Multiple Choice</h5>
    <p class="card-text">The answer to this type of question is selected from a set of choices. A correct answer gets full points,
                              and an incorrect answer gets zero points.</p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
      

<!-- Upload Files Modal -->
<div class="modal fade" id="fileUploadModal" tabindex="-1" aria-labelledby="fileUploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileUploadModalLabel">Add Questions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                      
                <a href="admin_trueorfalse.php" class="btn btn-secondary" data-bs-dismiss="modal">True or False</a>
<p>The answer to this type of question can only be true or false. A correct answer gets full points, and an incorrect answer gets zero points.</p><br>

<a href="admin_multiplechoice.php" class="btn btn-secondary" data-bs-dismiss="modal">Multiple Choice (One Answer)</a>
<p>The answer to this type of question is selected from a set of choices. A correct answer gets full points, and an incorrect answer gets zero points.</p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ken..."></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
       // Add Student button click event
       $("#add-student").click(function(e) {
            e.preventDefault();
            // Add your logic to handle the click event of the "Add Student" button
            $("#fileUploadModal").modal("show");
        });
</script>
<script>
// Get the input element, button, and table
var input = document.getElementById("searchInput");
var button = document.getElementById("searchButton");
var table = document.getElementById("student_table");



  // Loop through all table rows and hide those that don't match the search query
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var found = false;

    for (var j = 0; j < cells.length; j++) {
      var cellValue = cells[j].textContent || cells[j].innerText;

      if (cellValue.toLowerCase().indexOf(filter) > -1) {
        found = true;
        break;
      }
    }

    if (found) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
</script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
</script>

  </body>
  
  </html>


