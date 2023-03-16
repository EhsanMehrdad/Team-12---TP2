<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["pid"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['pid'] === $_POST["pid"]){
        $value['stock'] = $_POST["stock"];
        break; // Stop the loop after we've found the products
    }
}
  	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
    <link rel="stylesheet" href="basket.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
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

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<a href="basket1.php">previous page</a>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>STOCK</td>
<td>PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $products){
?>
<tr>
<td>
<img src='<?php echo $products["image"]; ?>' width="200" height="200" />
</td>
<td><?php echo $products["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='pid' value="<?php echo $products["pid"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='pid' value="<?php echo $products["pid"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='stock' class='stock' onChange="this.form.submit()">
<option <?php if($products["stock"]==0) echo "selected";?>
value="0">0</option> 
<option <?php if($products["stock"]==1) echo "selected";?>
value="1">1</option>
<option <?php if($products["stock"]==2) echo "selected";?>
value="2">2</option>
<option <?php if($products["stock"]==3) echo "selected";?>
value="3">3</option>
<option <?php if($products["stock"]==4) echo "selected";?>
value="4">4</option>
<option <?php if($products["stock"]==5) echo "selected";?>
value="5">5</option>
<option <?php if($products["stock"]==6) echo "selected";?>
value="6">6</option>
<option <?php if($products["stock"]==7) echo "selected";?>
value="7">7</option>
<option <?php if($products["stock"]==8) echo "selected";?>
value="8">8</option>
<option <?php if($products["stock"]==9) echo "selected";?>
value="9">9</option>
<option <?php if($products["stock"]==10) echo "selected";?>
value="10">10</option>
<option <?php if($products["stock"]==11) echo "selected";?>
value="11">11</option>
<option <?php if($products["stock"]==12) echo "selected";?>
value="12">12</option>
<option <?php if($products["stock"]==13) echo "selected";?>
value="13">13</option>
<option <?php if($products["stock"]==14) echo "selected";?>
value="14">14</option>
<option <?php if($products["stock"]==15) echo "selected";?>
value="15">15</option>
<option <?php if($products["stock"]==16) echo "selected";?>
value="16">16</option>
<option <?php if($products["stock"]==17) echo "selected";?>
value="17">17</option>
<option <?php if($products["stock"]==18) echo "selected";?>
value="18">18</option>
<option <?php if($products["stock"]==19) echo "selected";?>
value="19">19</option>
<option <?php if($products["stock"]==20) echo "selected";?>
value="20">20</option>
</select>
</form>
</td>
<td><?php echo $products["stock"]; ?></td>
<td><?php echo "£".$products["price"]; ?></td>
<td><?php echo "£".$products["price"]*$products["stock"]; ?></td>
</tr>
<?php
$total_price += ($products["price"]*$products["stock"]);
}
?>
<tr>
<td colspan="5" alignment="right">
<strong>TOTAL: <?php echo "£".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}
  else{
	   echo "<h3>Your cart is empty!</h3>";
      }
  ?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status;?>
</div>

<a href="checkout1.php">checkout page</a>

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

</body>
</html>