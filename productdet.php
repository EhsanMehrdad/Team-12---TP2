<!DOCTYPE html>
<html lang="en">
<?php
session_start();

require_once('connected.php');
?>
<?php

if(isset($_GET['pid'])){
    $row= $db->prepare("SELECT * From products WHERE pid = ?");
    $row->execute([$_GET['pid']]);
    $products=$row->fetch(PDO::FETCH_ASSOC);
    if(!$products){
        exit('Product does not exist');
    }
}else{
    exit('Product does not exist');
}


  /*
    if(isset($_POST['submit'])){
    if(!isset($_SESSION['auth'])){
    echo "<script>alert('You must register an account and login to submit review.')</script>";}
    else if(empty($_POST['rating']) || empty($_POST['review'])){
      echo "<script>alert('Must complete all fields.')</script>";

    }
    else if(!is_numeric($_POST['rating']) || $_POST['rating'] != strval(round($_POST['rating'])) || $_POST['rating'] < 1 || $_POST['rating'] > 5){
      echo "<script>alert('Expected numbers 1-5.')</script>";
    }
    else
    {
  
        $rating = round($_POST['rating']);
        $time = time();
        $reviw = $_POST['review'];
        $row = $db->prepare("INSERT INTO feedback ( username, review, rating, seconds_since_epoch) 
        VALUES (?,?,?,?)");
        $row->bindParam(1,  $_SESSION['auth'], PDO::PARAM_STR);
        $row->bindParam(2, $review, PDO::PARAM_STR);
        $row->bindParam(3,$rating, PDO::PARAM_STR);
        $row->bindParam(4,$time, PDO::PARAM_STR);
        $result= $row->execute();
        echo "<script>alert('Review submission successful.')</script>";


    }
}*/

if(isset($_POST['submit'])){
  
        $rating = round($_POST['rating']);
        $time = time();
        $reviw = $_POST['review'];
        $model=$_POST['prodmod'];
        $row = $db->prepare("INSERT INTO feedback ( review, rating, seconds_since_epoch, model) 
        VALUES (?,?,?,?)");
        $row->bindParam(1, $reviw, PDO::PARAM_STR);
        $row->bindParam(2,$rating, PDO::PARAM_STR);
        $row->bindParam(3,$time, PDO::PARAM_STR);
        $row->bindParam(4,$model, PDO::PARAM_STR);
        $result= $row->execute();
        echo "<script>alert('Review submission successful.')</script>";
}

$low= $db->prepare("SELECT * From feedback WHERE model = ? ");
    $low->execute([$_GET['model']]);
    $reviews=$low->fetchAll(PDO::FETCH_ASSOC);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Jewellery Shop</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
    <link rel="stylesheet" href="kwajo.css">
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
    <a class="navbar-brand" href="index.php" id="logo"><span id="span1"></span>White Lily<span> Jewellery Shop</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span> <img src="./images/menu.png" alt="" width="30px"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product2.php">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67, 0, 86);">
            <li><a class="dropdown-item" href="CatNecklace.php">Necklaces</a></li>
            <li><a class="dropdown-item" href="CatRings.php">Rings</a></li>
            <li><a class="dropdown-item" href="CatChains.php">Chains</a></li>
            <li><a class="dropdown-item" href="CatBracelets.php">Bracelets</a></li>
            <li><a class="dropdown-item" href="CatPendants.php">Pendants</a></li>
            <li><a class="dropdown-item" href="CatEarrings.php">Earrings</a></li>
            <li><a class="dropdown-item" href="Cat.php">Latest Products</a></li>
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
            <a href="login.php"><img src="./images/basket.png" alt="" width="37px">Basket</a>
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

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "./images/<?=$products['img']?>" alt = "Autya Ring">
                    </div>
                </div>
                <div class = "product-div-right">
                <span class = "product-name"><?=$products['name']?></span>
                    <span class = "product-price">£<?=$products['price']?>.00</span>
                    <p class = "product-description"><?=$products['description']?></p>
                    

                    <br>
      <p>Diamond</p>
      
    <div class="radio-container">
        <div>
      <input type="radio" id="Black Diamond" name="os" />
      <label for="Black Diamond">Black diamond</label>
</div>

<div>
      <input type="radio" id="Yellow Diamond" name="os" />
      <label for="Yellow Diamond">Yellow Diamond</label>
</div>

        <div>
      <input type="radio" id="Blue Diamond" name="os" />
      <label for="Blue Diamond">Blue Diamond</label>
</div>
<div>
      <input type="radio" id="Green Diamond" name="os" />
      <label for="Green Diamond">Green Diamond</label>
</div>
<div>
      <input type="radio" id="Brown Diamond" name="os" />
      <label for="Brown Diamond">Brown Diamond</label>
</div>
<div>
      <input type="radio" id="Lab Grown Diamond" name="os" />
      <label for="Lab Grown Diamond">Lab Grown Diamond</label>
</div>
    </div>
    <form method="post" action="kwajo.php?page=cart&pid=<?=$products['pid']?>&model=<?=$products['model']?>">

                    <div class = "btn-groups">
                    <?php if ($products['stock']>=1):?>
                    <input id="numitems" type="number" name="numitem" value="1" min="1" max="<?=$products['stock']?>">
                    <?php else: ?>
                    <p>OUT OF STOCK!</P>
                    <?php endif; ?>
                    <button name="sub" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <div class = "container">
    <div class = "product-div">
    <div class = "product-div-left">
  <p class="revname">Write A Review</p>
   <form class="formin" method="post" action="kwajo.php?page=productdet&pid=<?=$products['pid']?>&model=<?=$products['model']?>">
    <div>
      <p id= "no-edit" >Rating </p>
      <input type="number"  name="rating" placeholder="1-5" min="1" max="5" />
    </div>
    <div>
      <p id= "no-edit" > Comment </p>
      <textarea type="text"  name="review" placeholder="Things that are great aboutit. Things that arn't great about it." ></textarea>
    </div>
        <input type="hidden" name="prodmod" value="<?=$products['model']?>">
    <div >
		<button name="submit" class="btnn">Submit</button>
</div>
      
   </form>
</div>
<div class = "product-div-right">
<p class="revname">Reviews</p><br>
<?php foreach ($reviews as $revs): ?>
<div id="review-tab" >
<div style="margin-bottom:12px;">
<p class="revnd" style="color:purple;">name</p>
<p class="revnd"style="margin-left: 450px; color:purple;">rating: <?=$revs['rating']?>/5</p>
</div>  
<p id="review-desc" ><?= $revs['review'];?></p>
</div>
<?php endforeach; ?>

</div>
</div>
  </div>

    <!--hot offers-->
    <br>
<div class="container" id="hot-offers">
  <h1 class="text-center">Hot Offers</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/pen1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Sterling Silver Love</h3>
          <p class="text-center"> Was £200</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>Now £100<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/pen2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Angel Wings</h3>
          <p class="text-center">Was £300</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>Now £150<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/e1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">9ct Yellow Gold Leaf </h3>
          <p class="text-center">Was £100</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>Now £50 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/b2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">warovski Subtle Bracelet </h3>
          <p class="text-center">Was £100</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>Now £50 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>  
</div>
    <!--hot offers-->




    
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
      Designed by:  <a href="#"> Team Number 12 (Aston University, Birmingham) </a>
    </div>

  </div>
</footer>
<!-- fotter -->

</body>
</html>