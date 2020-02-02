<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Forgot Password</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
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
    .card.card-login {
      border: none;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       border-radius: 5px;
    background-color: #2874B2;
    padding: 40px;
    }
    h4,p, a {
      color: #fff;
    }
    a:hover {
      color: #fff;
    }
    .btn-block:hover {
      cursor: pointer;
    }
    .btn-block{
      border: none;
    }
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center" style="font-weight: bold; font-size: 1.3em;">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4 style="">Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form  action="#" method="post">
         <div class="input-group form-group-lg">
             <span class="input-group-addon" style="background-color: #3481B8; color: #fff; border: none;">
                <span class="fa fa-envelope"></span>
                 </span>
                <input type="email" class="form-control" placeholder="Email " required="required" autofocus="autofocus">
          </div><br/>
          <button class="btn btn-primary btn-block btn-lg"  name="reset">Reset Password</button>
        </form>
        <div class="text-center"><br/>
          
          <a class="d-block small" href="cards.php">Home Page</a>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <footer class="sticky-footer container-fluid" style="background-color: #2b3873; color: #fff; width: 100%; overflow: auto;">
      <div class="container-fluid footer">
        <div class="text-center">
          <small>Copyright © My Virtual School <?php echo date("Y"); ?> All Rights Reseved</small>
        </div>
      </div>
    </footer>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
