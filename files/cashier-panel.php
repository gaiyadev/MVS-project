<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>School Fees System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/cards.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
    <a class="navbar-brand" href="cashier-panel.php">Cashier Panel </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: red;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color: #2b3873;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="cashier-panel.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text" style="color: #fff;">Dashboard</span>
          </a>
        </li>        
        
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="cashier-panel.php">
            <i class="fa fa-fw fa-group" style="color: #fff;"></i>
            <span class="nav-link-text" style="color: #fff;">Student</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-dollar" style="color: #fff;"></i>
            <span class="nav-link-text" style="color: #fff;">Fees Records</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-file" style="color: #fff;"></i>
            <span class="nav-link-text" style="color: #fff;">Report</span>
          </a>
        </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text" style="color: #fff;">Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents" style="background-color: #3481B8;">
            <li>
              <a data-toggle="modal" data-target="#mymodal" style="color: #fff;">Change Password</a>
            </li>
            
          </ul>
        </li>

        <!--     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text" style="color: #fff;">Users Control</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages" style="background-color: #3481B8;">
            <li>
              <a href="register.php" style="color: #fff;">Add User</a>
            </li>
            <li>
              <a href="manage-users.php" style="color: #fff;">Delete User</a>
            </li>
            <li>
              <a href="manage-users.php" style="color: #fff;">Update User</a>
            </li>
            <li>
              <a href="tables.php" style="color: #fff;">View Users</a>
            </li>
          </ul>
        </li>   -->    
        
      </ul>
      <ul class="navbar-nav sidenav-toggler" style="background-color: #2b3873; color: #fff;">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill">2</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown" style="border: none;">
            <h5 class="dropdown-header" style="background-color: #2874B2; color: #fff;">Developers:</h5>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-primary">
                <strong>
                  <i class=" fa-fw"></i>Gaiya M. Obed</strong>
              </span>
              <span class="small float-right text-primary">11:21 AM</span>
              <div class="dropdown-message small">Call for any of the services..Java, Python, Graphics </div>
              <div class="dropdown-message small">obedgaiya080@gmail.com<br/>07058149795</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-primary">
                <strong>
                  <i class="fa-fw"></i>Bitrus Nom</strong>
              </span>
              <span class="small float-right  text-primary">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              <div class="dropdown-message small">obedgaiya080@gmail.com<br/>07058149795</div>
            </a>
            <div class="dropdown-divider"></div>           
            
            <a class="dropdown-item small text-center" href="#" style="background-color: #2874B2; color: #fff;">Visit Us On: www.myvirtualteam.com.</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color: #fff;" data-toggle="popover" title="Logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" >
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="cashier-panel.php" style="color: #fff;">Student Fees System</a> </li>
       

        <li class="breadcrumb-item active" style="color: gold;">Courses</li>
      </ol>
      <h1 style="color: #fff; ">Courses</h1>
      <hr/>
      <!-- Icon Cards-->
      <div class="row" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white  o-hidden h-100" style="background-color: #2b3873;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-stethoscope"></i>
              </div>
              <div class="mr-5">Science</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="scienceclassfees.php">
              <span class="float-left">Record</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white o-hidden h-100" style="background-color: #3871ac;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>;
              </div>
              <div class="mr-5">Art</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Record</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white  o-hidden h-100" style="background-color:  #2b3873;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-dollar"></i>
              </div>
              <div class="mr-5">Commercial</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Record</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white  o-hidden h-100" style="background-color: #3871ac; ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">Junior Section</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Record</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer" style="background-color: #2b3873; color: #fff; overflow: auto;">
      <div class="container footer">
        <div class="text-center">
          <small>Copyright © My Virtual School <?php echo date("Y"); ?> All Rights Reserved</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" style="color: #2b3873;  background-color: #3481B8; color: #fff; border: none;">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title text-center" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <form action="#" method="post">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="button"  class="btn btn-primary" name="logout" >Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- modal classes -->
          <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true"> <!-- modal -->
            <div class="modal-dialog modal-sm"> <!-- modal dialog can be change to lg or sm -->
              <div class="modal-content">
                <div class="modal-header">
                 <!--   <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                  <h3 class="modal-title text-center" style="margin-left: 20px;">Change Password</h3>
                </div>
                <div class="modal-body"> <!-- modal body -->
                   <form class="form-horizontal"  action="change.php" method="post">
                        

                         <div class="input-group form-group-lg">
                          <span class="input-group-addon" style="background-color: #3481B8; color: #fff;">
                            <span class="fa fa-lock"></span>
                          </span>
                          <input type="password" class="form-control" name="oldpassword" placeholder="Current Password" required="required">
                         </div> <!-- /end -->

                          <div class="input-group form-group-lg">
                          <span class="input-group-addon" style="background-color: #3481B8; color: #fff;">
                            <span class="fa fa-lock"></span>
                          </span>
                          <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="required">
                         </div> <!-- /end -->

                          <div class="input-group form-group-lg">
                          <span class="input-group-addon" style="background-color: #3481B8; color: #fff;">
                            <span class="fa fa-lock"></span>
                          </span>
                          <input type="password" class="form-control" name="connew" placeholder="Confirm New Password" required="required">
                         </div> <!-- /end -->                        
                  
                </div> <!-- /.modal body -->
                <div class="modal-footer"> <!-- modal footer -->
                  <form action="" method="post">
                    <button type="submit"  name="change" class="btn btn-primary">Change<span class="glyphicon glyphicon-ok"></span>
                  </button>
                  
                  <!--  <input type="submit" class="btn btn-success" name="submit" value="submit">-->
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close<span class="glyphicon glyphicon-remove"></span></button>
                  </form>
                </div> <!-- /modal footer -->
              </form> <!-- /form -->
              </div>
            </div> <!-- /modal dialog -->
          </div> <!-- /moda/ -->


          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
     <script src="jquery.min.js"></script>
      <!-- ==================================
        INCHARGE OF COLLAPSE NAVIGATION BARS
    ========================================-->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
          
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
