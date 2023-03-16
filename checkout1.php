<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
    <link rel="stylesheet" href="checkout.css">
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
            <a href="basket1.php"><img src="./images/basket.png" alt="" width="37px">Basket</a>
        </div>

    </div>
      <form class="d-flex" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
    </nav>

<!--checkout form--> 
<br>   
<div class="r">
  <div class="col-75">
    <div class="containers">
      <form action="/cart/order-complete.php">

        <div class="row">
          <div class="col-50">
            <h3>White lily checkout page</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Billy lloyd">

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Lily-Jewellery@gmail.com">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Birmingham B44">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Birmingham">

            <div class="row">
              <div class="col-50">

                <label for="state">Region</label>
                <input type="text" id="city" name="city" placeholder="England">

              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Billy lloyd">
           
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
           
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">

                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              
              </div>
            </div>
          </div>
        </div>
        <a href="receipt.php">continue</a>
      </form>
    </div>
  </div>

<footer>
<!-- offer -->
<div class="container" id="offer">
<h1 class="text-center">Only With Lily Jewellery</h1>
  <div class="row">
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-cart-shopping"></i>
      <h3>Free Shopping</h3>
      <p>On orders over £500</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-rotate-left"></i>
      <h3>Free Returns</h3>
      <p>Within 30 days</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-truck"></i>
      <h3>Fast Delivery</h3>
      <p>All England</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <i class="fa-solid fa-thumbs-up"></i>
      <h3>Big choice</h3>
      <p>Of products</p>
    </div>
  </div>
</div>
<!-- offer -->
</body>

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


</html>