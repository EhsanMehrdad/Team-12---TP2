<?php session_start(); $_SESSION['validation'] = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="auth-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            abstract class Validation 
            {
                const forename = 1;
                const surname = 2;
                const username_taken = 4;
                const username_len = 8;
                const username_sym = 16;
                const email_format = 32;
                const email_taken = 64;
                const password_len = 128;
                const password_upper = 256;
                const password_lower = 512;
                const password_number = 1024;
            };
           /* class Validation extends SplEnum {
                const forename = 1;
                const surname = 2;
                const username_taken = 4;
                const username_len = 8;
                const username_sym = 16;
                const email = 32;
                const password_len = 64;
                const password_upper = 128;
                const password_lower = 256;
                const password_number = 512;
            }*/

            if(isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
            {
                /* Stage 0: Connect to database */
                require_once($_SERVER['DOCUMENT_ROOT'] . '/auth/scripts/db.php');

                /* Stage 0.5: Save form fields in session */
                $_SESSION['register']['forename'] = $_POST['forename'];
                $_SESSION['register']['surname'] = $_POST['surname'];
                $_SESSION['register']['username'] = $_POST['username'];
                $_SESSION['register']['email'] = $_POST['email'];
                $_SESSION['register']['password'] = $_POST['password'];

                /* Stage 1: Perform validation on registration fields */

                /* >>Username */
                $query = 'SELECT username FROM users';
                $sth = $db->prepare($query);
                $sth->execute();
                $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row)
                {
                    if($row['username'] == $_POST['username'])
                    {
                        $_SESSION['validation'] |= Validation::username_taken; 
                        break;
                    }
                }
                if(strlen($_POST['username']) > 16 || strlen($_POST['username']) < 3)
                    $_SESSION['validation'] |= Validation::username_len;
                if(!ctype_alnum($_POST['username']))
                    $_SESSION['validation'] |= Validation::username_sym;

                /* >>Forename */
                if(!ctype_alpha($_POST['forename']))
                    $_SESSION['validation'] |= Validation::forename;

                /* >>Surname */
                if(!ctype_alpha($_POST['surname']))
                    $_SESSION['validation'] |= Validation::surname;

                /* >>Email */
                $query = 'SELECT email FROM users';
                $sth = $db->prepare($query);
                $sth->execute();
                $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row)
                {
                    if($row['email'] == $_POST['email'])
                    {
                        $_SESSION['validation'] |= Validation::email_taken; 
                        break;
                    }
                }
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    $_SESSION['validation'] |= Validation::email_format;

                /* >>Password */
                if(strlen($_POST["password"]) < 8)
                    $_SESSION['validation'] |= Validation::password_len;
                if(!preg_match("#[0-9]+#", $_POST['password']))
                    $_SESSION['validation'] |= Validation::password_number;
                if(!preg_match("#[A-Z]+#", $_POST['password']))
                    $_SESSION['validation'] |= Validation::password_upper;
                if(!preg_match("#[a-z]+#", $_POST['password']))
                    $_SESSION['validation'] |= Validation::password_lower;

                if(!($_SESSION['validation']))
                {
                    /* Stage 2: Update database with valid registration details 
                        (ignoring email verification for now via verified = TRUE */
                    $verification_token = hash('sha256', uniqid($_POST['username'], true));
                    $query = 'INSERT INTO users (forename, surname, username, email, password, verification_token, verified) VALUES (:forename, :surname, :username, :email, :password, :verification_token, TRUE)';
                    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $sth = $db->prepare($query);
                    $sth->bindParam(':forename', $_POST['forename']);
                    $sth->bindParam(':surname', $_POST['surname']);
                    $sth->bindParam(':username', $_POST['username']);
                    $sth->bindParam(':email', $_POST['email']);
                    $sth->bindParam(':password', $hash);
                    $sth->bindParam(':verification_token', $verification_token);
                    $sth->execute();

                    /* Stage 3: Initiate email verification process (redirecting to index.php for now) */
                    //echo 'Send this URL to client: http://localhost/auth/scripts/verify.php?username='.$_POST['username'].'&verify='.$verification_token;
                    //header('Location: /auth/scripts/verify.php');
                    header('Location: /index.php');
                }
            }
        ?>
        <div class="auth-container">
            <div class="auth-div">
                <form method="post" action="register.php" class="auth-form">
                    <h2>REGISTER</h2>
                    <label>Forename</label>
                    <input type="text" id="register-forename" name="forename" <?php if(isset($_SESSION['register']['forename'])) echo ' value="' . $_SESSION['register']['forename'] . '" '; ?> class="auth-input" required>
                    <?php 
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::forename)
                            echo "<pre><em>Must contain alphabetic characters only.</em></pre>";
                    ?>
                    <label>Surname</label>
                    <input type="text" id="register-surname" name="surname" <?php if(isset($_SESSION['register']['surname'])) echo ' value="' . $_SESSION['register']['surname'] . '" '; ?> class="auth-input" required>
                    <?php 
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::surname)
                            echo "<pre><em>Must contain alphabetic characters only.</em></pre>";
                    ?>
                    <label>Username</label>
                    <input type="text" id="register-username" name="username" <?php if(isset($_SESSION['register']['username'])) echo ' value="' . $_SESSION['register']['username'] . '" '; ?>  class="auth-input" required>
                    <?php 
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::username_taken)
                            echo "<pre><em>This username is already taken.</em></pre>";
                        else if($_SESSION['validation'] && $_SESSION['validation'] & Validation::username_len)
                            echo "<pre><em>Must be between 3-16 characters.</em></pre>";
                        else if($_SESSION['validation'] && $_SESSION['validation'] & Validation::username_sym)
                            echo "<pre><em>Must contain alphanumeric characters only.</em></pre>";
                    ?>
                    <label>Email</label>
                    <input type="text" id="register-email" name="email" <?php if(isset($_SESSION['register']['email'])) echo ' value="' . $_SESSION['register']['email'] . '" '; ?> class="auth-input" required>
                    <?php
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::email_taken)
                            echo "<pre><em>This email address is already associated with an account.</em></pre>";
                        else if($_SESSION['validation'] && $_SESSION['validation'] & Validation::email_format)
                            echo "<pre><em>This is not a valid email address.</em></pre>";
                    ?>
                    <label>Password</label>
                    <input type="password" id="login-pass" name="password" <?php if(isset($_SESSION['register']['password'])) echo ' value="' . $_SESSION['register']['password'] . '" '; ?> class="auth-input" required>
                    <?php
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::password_len)
                            echo "<pre><em>Must be 8 or more characters.</em></pre>";
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::password_number)
                            echo "<pre><em>Must contain at least one numeric character.</em></pre>";
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::password_upper)
                            echo "<pre><em>Must contain at least one uppercase character.</em></pre>";
                        if($_SESSION['validation'] && $_SESSION['validation'] & Validation::password_lower)
                            echo "<pre><em>Must contain at least one lowercase character.</em></pre>";
                    ?>
                    <input type="submit" id="register-button" class="auth-input" value="Register">
                    <p>Already have a login and password? <a href="/auth/login.php">Sign in</a></p>
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
