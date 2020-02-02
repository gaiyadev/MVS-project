<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register Student Payment Details</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- custom css -->
  <link href="" rel="stylesheet">

  <style type="text/css">
    body {
      background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left, #3481B8 , #fff, #2874B2); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, #3481B8, #fff, #2874B2); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #3481B8, #fff,  #2874B2); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #3481B8, #fff, #2874B2); /* Standard syntax */
    }
    .card-header {
      background-color: #2874B2;
      color: #fff;
    }
    .card.card-register {
      border: none;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       border-radius: 5px;
    background-color: #2874B2;
    padding: 40px;
    }
    .card-body {
      /*background-color: #3481B8;*/

    }

    label {
      color: #fff;

    }
        
    .btn.btn-primary:hover {
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center text-uppercase" style="font-weight: bold; font-size: 1.3em;">Add Student Fees</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="fname">First Name<span style="color: red;">*</span></label>
                <input class="form-control" id="fname" name="firstname" type="text"  placeholder=" First Name" required="required" autofocus="autofocus">
              </div>

              <div class="col-md-4">
                <label for="mname">Middle Name</label>
                <input class="form-control" id="mname" type="text" name="middlename" placeholder=" Middle Name">
              </div>

               <div class="col-md-4">
                <label for="lname">Last Name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="lname" name="lastname" placeholder=" Last Name" required="required">
              </div>

            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sex" class=" control-label">Gender<span style="color: red;">*</span></label>
                <div>
                  <select name="gender" class="form-control" id="sex" required="required">
                    <option>Select Gender:</option>
                    <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
                </div>
          </div>
              </div>

              <div class="col-md-6">
                <label for="dop">Date Of Payment<span style="color: red;">*</span></label>
                <input class="form-control" id="dop" type="date" name="dop"  required="required">
              </div>               

            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="tf">Total Fees<span style="color: red;">*</span></label>
                <input class="form-control" id="tf" type="text" name="tf" placeholder="Total Fees" required="required">
              </div>
              <div class="col-md-6">
                <label for="Balance">Balance<span style="color: red;">*</span></label>
                <input class="form-control" id="Balance" type="text" name="balance" placeholder="Balance">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="fn">Cashier's Name<span style="color: red;">*</span></label>
            <input class="form-control" id="fn" name="chasier" type="text" placeholder="Full Name" required="required">
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="section">Section<span style="color: red;">*</span></label>
                <input class="form-control" id="section" name="section" type="text" placeholder="Section" required="required">
              </div>
              <div class="col-md-6">
                <label for="term">Term<span style="color: red;">*</span></label>
                <input class="form-control" id="term" type="text" name="term" placeholder="Term" required="required">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="save">Save</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="sss1b-record.php" style="color: #fff; font-weight: bold;">Home Page</a>          
        </div>
        <br/>
        <div class="bottom-line"></div>
         <div class="text-center text-primary" style=" color: #fff;">
          <small style="color: #fff; font-weight: bold;">Copyright © My Virtual School <?php echo date("Y"); ?></small>
        </div>
       <!--  <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
         -->

      </div>
    </div>
  </div>

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
</body>

</html>
