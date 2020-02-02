<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Users Login Panel</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/cards.css" rel="stylesheet">

  <style type="text/css">
    body {
      background: red; /* For browsers that do not support gradients */
      background: -webkit-linear-gradient(left, #3481B8 , #fff, #2874B2); /* For Safari 5.1 to 6.0 */
      background: -o-linear-gradient(right, #3481B8, #fff, #2874B2); /* For Opera 11.1 to 12.0 */
      background: -moz-linear-gradient(right, #3481B8, #fff,  #2874B2); /* For Firefox 3.6 to 15 */
      background: linear-gradient(to bottom right, #3481B8, #fff, #2874B2); /* Standard syntax */
      padding: 0px;
      margin: 0px;
      width: 100%;
    }

    #current{
      margin-left: 300px;
      font-size: 1.3em;
      font-weight: 1000px;
      color: #fff;
      padding: 10px 18px;
      box-sizing: border-box;
      border: 1px solid #3481B8;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
      background-color: #2b3873;

    }
    
    @media (max-width: 1000px) {
      #current{
        visibility: hidden;
      }
      .first {
       margin-top: 3px;
        margin-left: -230px;
      }
      .second {
        margin-left: -265px;
        margin-top: 10px;
      }
       .third {
        margin-left: -268px;
        margin-top: -25px;
        float: left;
      }
      .fourth {
        margin-left: 0px;
        float: right;
      }
      .fifth {
        float: right;
        margin-left: auto;
      }
    }


                                                       

    @media (max-width: 700px)  {
      #current{
        visibility: hidden;
      }
      .first {
       margin-top: 3px;
        margin-left: -70px;
      }
      .second {
        margin-left: -265px;
        margin-top: 3px;
      }
       .third {
        margin-left: -264px;
        margin-top: -25px;
      }
      .fourth {
        margin-left: 152px;
        margin-top: 3px;
      }
      .fifth {
        margin-left: 152px;
        margin-top: 3px;
      }
    }


  </style>
</head>

<body class="fixed-nav sticky-footer" id="page-top" onload="updateClock();">

  <div class="container-fluid">
    <!-- for time -->
    <div class="row"> 
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        
        <script type="text/javascript">
          function updateClock() {
          var now = new Date();
          var time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
          document.getElementById('current').innerHTML = time;
          setTimeout(updateClock, 1000);
        }
      </script>

        <p id="current" data-toggle="popover" title="24hrs Time" class="btn btn-lg"></p>

      </div>
    </div><!-- /end -->

    <div class="row first">
    <div class="col-md-4">  </div> <!-- /col1 -->

    <div class="col-md-4">
      <div class="card text-white o-hidden h-100" style="background-color: #2b3873; width: 300px; margin-left: 90px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="Super">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-group"></i>;
              </div>
              <div class="mr-5">Super Admin</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="superadmin.php"  data-toggle="popover" title="Login" >
              <span class="float-left">Login</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
    </div> <!-- /col2 -->

    <div class="col-md-4">  </div> <!-- /col4 -->

  </div> <!-- /row1 -->

  <div class="row">
    <div class="col-md-4"> </div> <!-- /col1 -->

    
    </div> <!-- /conl2 -->
  </div>

    <div class="col-md-4"> </div> <!-- /col4 -->

  </div>

  <div class="row second">
    <div class="col-md-6">
      <div class="card text-white o-hidden h-100" style="background-color: #3871ac; width: 300px; margin-left: 300px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="it">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-flash"></i>;
              </div>
              <div class="mr-5">I.C. T. Officer</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="ict.php" data-toggle="popover" title="Login">
              <span class="float-left">Login</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
    </div>
    
    <div class="col-md-6 fourth">
      <div class="card text-white o-hidden h-100" style="background-color: #2b3873; width: 300px; margin-left: 148px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">Cashier</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="cashier.php" data-toggle="popover" title="Login">
              <span class="float-left">Login</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
    </div>
  </div>
  <!-- /rwo2 -->
  <div class="row third">
    <div class="col-md-6">
      <div class="card text-white o-hidden h-100" style="background-color: #2b3873; width: 300px; margin-left: 300px; margin-top: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-eye"></i>;
              </div>
              <div class="mr-5">Proprietor</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="pro.php" data-toggle="popover" title="Login">
              <span class="float-left">Login</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
    </div>
    
    <div class="col-md-6 fifth">
      <div class="card text-white o-hidden h-100" style="background-color: #3871ac; width: 300px; margin-left: 148px; margin-top: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>;
              </div>
              <div class="mr-5">School Database</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="schooldb.php" data-toggle="popover" title="Login">
              <span class="float-left">Login</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
    </div>
    </div>
  </div>

  <!-- /cntainer -->
<br/>
  <footer class="sticky-footer container-fluid" style="background-color: #2b3873; color: #fff; width: 100%; overflow: auto;">
      <div class="container-fluid footer">
        <div class="text-center">
          <small>Copyright © My Virtual School <?php echo date("Y"); ?> All Rights Reserved</small>
        </div>
      </div>
    </footer>

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
