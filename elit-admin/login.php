<?php

    $admin = @$_COOKIE['userAkun'];

    //include './fungsi/akun.php';

    if (!empty($admin)) 
    {
       echo
       "
        <script>
          window.location='index.php';
        </script>
       ";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="../img/LogoHitam.png">
</head>

<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <div class="row">
                      <div class="col">
                        <img src="../img/LogoHitam.png" width="85%">
                      </div>
                      <div class="col" style="padding:10px;">
                        <h1 class="h4 text-gray-900 mb-4">Administrator</h1>
                      </div>
                    </div>
                  </div>
                  <form class="user" method="post" action="login-respon.php">
                    <div class="form-group">
                      <input name="email" required type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input name="password" required type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                    <input type="submit" value="LOGIN" class="btn btn-warning btn-user btn-block" style="font-weight: bold; font-size:20px; letter-spacing:5px;">
                    <hr>
                    
                  </form>
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
