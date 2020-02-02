<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Student/Parents Login Page</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="#" rel="stylesheet">
  <link  rel="stylesheet" href="css/bootstrap.min.css" >
       <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <!-- Internet Explorer -->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<style type="text/css">
body {
  width: 100%;
  background-color: #fff;
  margin: 0px;
  padding: 0px;
        
} 
 input[type=checkbox]:hover {
      cursor: pointer;
    }       

.form-signin {
  max-width: 330px;
  padding: 25px;
  border-radius: 10px;
  margin: 60px auto;
  box-sizing: border-box;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0  
   rgba(0, 0, 0, 0.19);
   background-color:  #2b3873; /*#2569a1;*/
}



.form-signin .form-signin-heading,
.form-signin {
  margin-bottom: 17px;
  color: white;

}

.form-signin .form-signin-heading {
  text-align: center;
}

.form-signin{
  font-weight: bold;
}

.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px; 
}


 input[type="text"]{
  margin-bottom: 1px;
  border-radius: 5px;
  padding: 5px 10px;
  box-sizing: border-box;
  border-color: #3481B8;
}


input[type="password"] {
  margin-bottom: 5px;
  border-radius: 5px;
  padding: 5px 10px;
  box-sizing: border-box;
   border-color: #3481B8;
}
button[type=submit] {
  background-color: #3481B8;
  border: none;
  color: #fff;
}
button[type=submit]:hover {
 opacity: .8;
 border: none;
  color: #fff;
 background-color: #3481B8;
}

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
    img {
      margin-left: 85px;
      opacity: .6;
      border-width: 2px;
      border-style: solid;
      border-color: #3481B8;
    }
    img:hover {
      
      opacity: 1;
      border-width: 2px;
      border-style: solid;
      border-color: transparent;
    }
</style>
  
</head>

<body class="fixed-nav sticky-footer" id="page-top">

  <div class="container-fluid">

    <form class="form-signin" action="#" method="post" >
      <img src="img/user.png" class="img-responsive img-circle" width="100" height="100" align="center">
        <h2 class="form-signin-heading">Students/Parents</h2>     

         <div class="input-group form-group-lg">
             <span class="input-group-addon" style="background-color: #3481B8; color: #fff; border: none;">
                <span class="glyphicon glyphicon-user"></span>
                 </span>
                     <input type="text" class="form-control" placeholder="Username " required="required" autofocus="autofocus">
          </div> <!-- /end -->

          <div class="input-group form-group-lg">
             <span class="input-group-addon" style="background-color: #3481B8; color: #fff; border: none;">
                <span class="glyphicon glyphicon-lock"></span>
              </span>
                <input type="password" class="form-control" placeholder="Password " required="required">
          </div> <!-- /end -->

         <div class="checkbox form-group-lg" style="margin-left: 80px; ">
          <label>
            <input type="checkbox" value="remember-me" name="checkbox"> Remember me
          </label>
        </div>

        <!-- <p class="text-center"><a href="forgot.php" style="color:white;">Forgot password</a></p>-->
        <button class="btn btn-lg btn-default btn-block" type="submit" name="login">Login</button><br/>
         
      </form>

   
  </div> <!-- /cntainer -->
<br/>
  <footer class="sticky-footer container-fluid" style="background-color: #2b3873; color: #fff; width: 100%; overflow: auto;">
      <div class="container-fluid footer">
        <div class="text-center">
          <small>Copyright © My Virtual School <?php echo date("Y"); ?> All Rights Reseved</small>
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
