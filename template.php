<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="auth-style.css">
    <!--bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap links --> 
    <!--Font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"> <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"> 
    <!--Font links-->


</head>
<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
    <img src="./images/logo.png" alt="" width="70px">
    <a class="navbar-brand" href="index.php" id="logo"> <span id="span1"></span>White Lily<span> Jewellery Shop</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span> <img src="./images/menu.png" alt="" width="30px"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67, 0, 86);">
            <li><a class="dropdown-item" href="#">Necklaces</a></li>
            <li><a class="dropdown-item" href="#">Rings</a></li>
            <li><a class="dropdown-item" href="#">Chains</a></li>
            <li><a class="dropdown-item" href="#">Bracelets</a></li>
            <li><a class="dropdown-item" href="#">Pendants</a></li>
            <li><a class="dropdown-item" href="#">Earrings</a></li>
       
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="top-navbar">
    <p></p>
        <div class="icons">

            <a href="login.php"><img src="./images/login.png" alt="" width="37px">Login</a>
        </div>

    </div>
      <form class="d-flex" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
    </nav>

    <!-- navbar -->


    <!-- Code for contact page -->
    <div id="code">
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            if(isset($_POST['id']) && isset($_POST['password']))
            {
                require_once($_SERVER['DOCUMENT_ROOT'] . '/auth/scripts/db.php');

                $id_type= str_contains($_POST['id'], '@');
                $query = 'SELECT * FROM users WHERE ' . ($id_type ? 'email' : 'username') . '=:id';

                $sth = $db->prepare($query);
                $sth->bindParam(':id', $_POST['id']);
                $sth->execute();
                $row = $sth->fetch(PDO::FETCH_ASSOC);

                if($_POST['id'] == ($id_type ? $row['email'] : $row['username']) && password_verify($_POST['password'], $row['password']))
                {
                    if($row['verified'] == FALSE)
                        header('Location: /auth/login.php?failed=1&reason=1'); # Email has not been verified
                    else
                    {
                        $_SESSION['auth'] = [
                            'forename' => $row['forename'],
                            'surname' => $row['surname'],
                            'username' => $row['username'],
                            'email' => $row['email'],
                            'password' => $row['password'],
                            'privileges' => $row['privileges'],
                        ];

                        if(isset($_POST['remember-me']))
                            $query = 'UPDATE users SET remember_me=TRUE WHERE ' . ($id_type ? 'email' : 'username') . ':=id';
                            /***
                                Code here.
                            ***/
                        header('Location: /index.php');
                    }
                }
                else
                    header('Location: /auth/login.php?failed=1&reason=0'); # Username or password is incorrect
            }
        ?>
        <div class="auth-container">
            <div class="auth-div">
                <form method="post" action="login.php" class="auth-form">
                    <h2>LOGIN</h2>
                    <label>Username or email</label>
                    <input type="text" class="auth-input" name="id" required>
                    <label>Password</label>
                    <input type="password" class="auth-input" name="password" required>
                    <label>Remember me</label>
                    <input type="checkbox" class="auth-input" name="remember-me">
                    <a id="fr" href="forgot-password.php">Forgot your password?</a>
                    <input type="submit" class="auth-input" value="Sign in">
                    <br>
                    <p>Don't have an account yet? <a href="/auth/register.php">Register now</a></p>
                    <?php
                        if(isset($_GET['failed']))
                            if(isset($_GET['reason']))
                                if($_GET['reason'] == 0)
                                    echo "<pre style=\"color: red;\"\"><em>(Your login credentials are incorrect).</em></pre>";
                                else if($_GET['reason'] == 1)
                                    echo "<pre style=\"color: red;\"\"><em>(You have to verify your email address to activate your account).</em></pre>";
                    ?>
                </form>
            </div>
        </div>
    </div>
     <!-- Code for contact page -->



<!-- footer -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Lily Jewellery Shop</h4>
          <p>
            Birmingham <br>
            Coventry <br>
            London <br>
          </p>
          <strong>Phone:</strong> +44-7383588080 <br>
          <strong>Email:</strong> Lily-Jewellery@gmail.com <br>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Usefull Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Necklaces</a></li>
            <li><a href="#">Rings</a></li>
            <li><a href="#">Chains</a></li>
            <li><a href="#">Bracelets</a></li>
            <li><a href="#">Pendants</a></li>
            <li><a href="#">Earrings</a></li>
            <li><a href="#">Watches</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Please follow us on Social Media</p>
          <div class="social-links mt-3">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-skype"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Lily Jewellery Shop</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by:  <a href="#"> Team Number 12 (Aston University, Birmingham)</a>
    </div>

  </div>
</footer>
<!-- fotter -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
