<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update User</title>
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

    .btn.btn-primary:hover {
      cursor: pointer;
    }
    .card-body {
      /*background-color: #3481B8;*/

    }

    label {
      color: #fff;

    }
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center text-uppercase" style="font-weight: bold; font-size: 1.3em;">Update User</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="fname">First Name<span style="color: red;">*</span></label>
                <input class="form-control" id="fname" name="firstname" type="text"   required="required" autofocus="autofocus">
              </div>

              <div class="col-md-4">
                <label for="mname">Middle Name</label>
                <input class="form-control" id="mname" type="text" name="middlename" >
              </div>

               <div class="col-md-4">
                <label for="lname">Last Name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="lname" name="lastname"  required="required">
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
                <label for="username">Username<span style="color: red;">*</span></label>
                <input class="form-control" id="username" type="text" name="username" required="required">
              </div>               

            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="phone">Phone Number<span style="color: red;">*</span></label>
                <input class="form-control" id="phone" type="text" name="phone"  required="required">
              </div>
              <div class="col-md-6">
                <label for="rank">Rank<span style="color: red;">*</span></label>
                <input class="form-control" id="rank" type="text" name="rank"  required="required">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="Email">Email Address<span style="color: red;">*</span></label>
            <input class="form-control" id="Email" name="email" type="email"  required="required">
          </div>

         <!--   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Password">Password<span style="color: red;">*</span></label>
                <input class="form-control" id="Password" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="ConfirmPassword">Confirm Password<span style="color: red;">*</span></label>
                <input class="form-control" id="ConfirmPassword" type="password" name="ConfirmPassword" placeholder="Confirm password">
              </div>
            </div>
          </div>-->
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="update">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="cards.php" style="color: #fff; font-weight: bold;">Home Page</a>          
        </div>
        <br/>
        <div class="bottom-line"></div>
         <div class="text-center text-primary">
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
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
