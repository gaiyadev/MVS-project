<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Students Fees Record</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/tables.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer " id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
    <a class="navbar-brand" href="tables.php">Cashier Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color: #2b3873;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text" style="color: #fff;">Dashboard</span>
          </a>
        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text" style="color: #fff;">Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a data-toggle="modal" data-target="#mymodal" style="background-color: #3481B8; color: #fff;">Change Password</a>
            </li>
           
          </ul>
        </li>       
        
     </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item" style="background-color: #2b3873;">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
     <!--  --> <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
           <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>-->
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div> -->
        </li>
       <!--   <li class="nav-item">
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
        </li>-->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color: #fff;" data-toggle="popover" title="Logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="cashier-panel.php" style="color: #fff;">Home</a>
        </li>
        <li class="breadcrumb-item">         
          <a href="add-student.php" style="color: #fff;" class="btn-primary btn">Add Student <span class="fa fa-plus"></span></a>
        </li>
         <li class="breadcrumb-item" style="color: #fff;" >SSS1 A</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header" style="background-color: ; color: ; border: none;"  >
          <i class="fa fa-table" ></i> List of All Student that Pay school Fees</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table  table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead style="background-color: #3481B8; color: #fff;">
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>                  
                  <th>Gender</th>
                  <th>D.O.P</th>
                  <th> Fees</th>
                  <th>Balance</th>
                  <th>Term</th>
                  <th>Action</th>
                  <th>Payment_Date</th>
                </tr>
              </thead>
              <tfoot style="background-color: #3481B8; color: #fff;">
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>                  
                  <th>Gender</th>
                  <th>D.O.P</th>
                  <th> Fees</th>
                  <th>Balance</th>
                  <th>Term</th>
                  <th>Action</th>
                  <th>Payment_Date</th>
                </tr>
              </tfoot>
              <tbody style="background-color:;">
                <tr>
                  <td>1</td>
                  <td>obed</td>
                  <td>mathias</td>
                  <td>Gaiya</td>
                  <td>male</td>
                  <td>68</td>
                  <td>500</td>
                  <td>obed@gmail.com</td>                               
                  <td>First</td>
                  <td><a href="#" class="fa fa-edit"></a> <a href="" class="fa fa-trash" style="margin-left: 10px;"></a></td>
                  <td>696</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer" style="background-color: #2b3873; color: #fff;">
      <div class="container">
        <div class="text-center">
           <small>Copyright © My Virtual School <?php echo date("Y"); ?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" style="background-color: #3481B8; border: none;">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <form action="" method="post">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" name="logout">Logout</button>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
