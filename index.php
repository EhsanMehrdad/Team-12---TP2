<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Jewellery Shop</title>
    <link rel="icon" type="image/x-icon" href="./images/lily.png">
    <link rel="stylesheet" href="style.css">
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
            <li><a class="dropdown-item" href="#">Latest Products</a></li>
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







<!-- banner -->
<section class="banner">
<div class="content">

  <h1><span>Welcome to Our Shop</span>
  <br>
  Enjoy <span id="span2">50%</span> Off With Us
  </h1>
  <p> We offer best quality products to appreciate your trust 
    <br>Buy quality products with reasonable price! 
  </p>
  <div class="btn"><button>Shop Now</button></div>
</div>
  <div class="img">
    <img src="./images/Banner1.png" alt="">
  </div>
</section>

<!-- banner -->
 

<!-- landing page Carousel -->

<div class="carousel">

    <div class="carousel__track-container">
      <ul class="carousel__track">
        <li class="carousel__slide current-slide">
          <img class="carousel__image" src="./images/carousel3.jpg" alt="">
        </li>
        <li class="carousel__slide">
          <img class="carousel__image" src="./images/carousel2.jpg" alt="">
        </li>
        <li class="carousel__slide">
          <img class="carousel__image" src="./images/carousel4.jpg" alt="">
        </li>
      </ul>
    </div>

    <div class="carousel__nav">
      <button class="carousel__indicator current-slide"></button>
      <button class="carousel__indicator"></button>
      <button class="carousel__indicator"></button>
    </div>
  </div>

<!-- landing page Carousel -->


<!-- products -->
<div class="container" id="products">
  <h1 class="text-center">PRODUCTS</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/p1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Gold Earring</h3>
          <p class="text-center">9ct Yellow Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£75 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/c1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Love Crystal Necklace</h3>
          <p class="text-center">CDE Necklaces</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/c2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Name Necklace</h3>
          <p class="text-center">Silver/Rose/Gold - Customised Dainty</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£65 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/b1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Multilayer Bracelets</h3>
          <p class="text-center">Gold/Silver/Rose</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£95 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div> 
</div> 
<!-- products -->



<!-- hot offers -->
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
<!-- hot offers -->






<!-- other cards -->
<div class="container" id="other-cards">
  <div class="row">
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./images/ring.jpg" alt="">
            <div class="card-img-overlay">
              <h3>Best Rings</h3>
              <h5>The Latest Collection</h5>
              <p>Up To 50% Off</p>
              <div class="btn3"><button>Shop Now</button></div>
            </div>
        </div>
      </div>
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./images/necklace1.jpg" alt="">
            <div class="card-img-overlay">
              <h3>Best Necklaces</h3>
              <h5>The Latest Collection</h5>
              <p>Up To 50% Off</p>
              <div class="btn3"><button>Shop Now</button></div>
            </div>
        </div>
      </div>
  </div>
</div>
<!-- other cards -->


<!-- Home content -->
<section class="summer-sale">
<div class="content">
  <h1><span id="span1">Summer Sale!</span>
  <br>  
  <span>All Jewellery Products</span>
  <br>
  Up To <span id="span2">50%</span> Off
  </h1>
  <div class="btn"><button>Shop Now</button></div>
</div>
  <div class="img">
    <img src="./images/background.png" alt="">
  </div>
</section>
<!-- Home content -->


<!-- our-collection section -->
<div class="container" id="our-collection">
<h1 class="text-center">Our Collection For You</h1>
 <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ear1.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Earring Aesclin</h3>
          <p class="text-center">High quality 24 carat</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£950 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ear2.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Earring Mabina</h3>
          <p class="text-center">3D Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,100 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ear3.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Earring Purisima</h3>
          <p class="text-center">High quality 24 carat</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ear4.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Earring Ezia</h3>
          <p class="text-center">Gold, 21 carat</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/brac1.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Bracelet Blejan</h3>
          <p class="text-center">585 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£2,900 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/brac2.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Bracelet Onuth</h3>
          <p class="text-center">750 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£3,500 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/brac3.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Bracelet Rodika</h3>
          <p class="text-center">585 Yellow & White Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,700 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/brac4.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Bracelet Blejan</h3>
          <p class="text-center">585 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£3,900 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ring1.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Ring Amirella</h3>
          <p class="text-center">Brown Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£3,200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ring2.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Ring Frida</h3>
          <p class="text-center">Gold, 21 carat</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,850 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ring3.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Ring Marjatta</h3>
          <p class="text-center">Gold, 24 carat</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£2,950 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/ring4.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Ring Leandra</h3>
          <p class="text-center">Brown Diamond - VS1</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,400 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/neck1.png" alt="">
        <div class="card-body">
          <h3 class="text-center"> Pendant Lisa</h3>
          <p class="text-center">585 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,100 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/neck2.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Pendant Zoya</h3>
          <p class="text-center">585 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£750 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/neck3.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Necklace Bitaniya</h3>
          <p class="text-center">750 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£950 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/neck4.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Pendant Ingelas</h3>
          <p class="text-center">585 Yellow Gold & Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£560 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/chain1.png" alt="">
        <div class="card-body">
          <h3 class="text-center"> Chain Serapis</h3>
          <p class="text-center">585 Yellow Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1,100 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/chain2.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Chain Bersel</h3>
          <p class="text-center">585 Yellow Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£450 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/chain3.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Chain Jandi</h3>
          <p class="text-center">585 Yellow Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£680 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/chain4.png" alt="">
        <div class="card-body">
          <h3 class="text-center">Chain Paperclip and Rolo</h3>
          <p class="text-center">585 Yellow Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£630 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- our-collection section -->








<!-- Lastest products -->

<div class="container" id="other">
<h1 class="text-center">Our Lateset Products</h1>
  <div class="row">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/p2.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Necklaces</h3>
            <p>Latest Necklace Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/p3.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Rings</h3>
            <p>Latest Ring Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/chain1.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Chains</h3>
            <p>Latest Chain Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="container" id="row2">
  <div class="row">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/brac1.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Bracelets</h3>
            <p>Latest Bracelet Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/pen3.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Pendants</h3>
            <p>Latest Pendant Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/p11.jpg" alt="">
          <div class="card-img-overlay">
            <h3>Latest Earrings</h3>
            <p>Latest Earring Collection Up To 50% Off</p>
            <div class="btn1"><button>Let's See</button></div>
          </div>
      </div>
    </div>
  </div>
  </div>
<!-- Lastest products -->


<!-- newsletter -->
<div class="container" id="newsletter">
<h3 class="text-center">Did you enjoy?</h3>
  <h3 class="text-center">Subscribe To The White Lily Shop For Latest Products</h3>
    <div class="input text-center">
      <input type="text" placeholder="Enter Your Email...">
      <button id="subscribe">SUBSCRIBE</button>
    </div>
</div>
<!-- newsletter -->




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
<a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>