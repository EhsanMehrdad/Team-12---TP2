
    <!DOCTYPE html>
<html lang="en">
<?php
session_start();

require_once('connected.php');
?>
<?php
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
$pidnum=1;
$currentpage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$row= $db->prepare("SELECT * From products WHERE pid= :pagen");
    $row->bindParam(':pagen', $pidnum);
    $row->execute();
    $products=$row->fetch(PDO::FETCH_ASSOC)

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" type="image/x-icon" href="./images/Lily.png">
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
          <a class="nav-link" href="#">Product</a>
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

    <!-- Code for products -->
    <div id="code">
      <h1><div class="container" id="products">
  <h1 class="text-center">Necklaces</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <a href="./indiproduct/kwajo.php?page=pid=<?=$products['pid']?>" ><div class="card">
        <img src="./images/<?=$products['img']?>" alt="">
        <div class="card-body">
          <h3 class="text-center"><?=$products['name']?></h3>
          <p class="text-center">Diamond/Black Diamond</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2><?=$products['price']?> <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/n2product.php"><div class="card">
        <img src="./images/necklaces2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Olga Pendant Necklace</h3>
          <p class="text-center">Different Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£250.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/n3product.php"><div class="card">
        <img src="./images/necklaces3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Adela necklace</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.200.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/n4product.php"><div class="card">
        <img src="./images/necklaces4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Herlimes Necklace</h3>
          <p class="text-center">Diamond Colours</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£95.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div> </a>
</div> 
<div id="code">
      <h1><div class="container" id="products">
  <h1 class="text-center">Rings</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/r1product.php"><div class="card">
        <img src="./images/rings1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Harriet Ring</h3>
          <p class="text-center">VS/VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£435.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/n1product.php"><div class="card">
        <img src="./images/rings2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Autya Ring</h3>
          <p class="text-center">Different Diamond Colours</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.529.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/r2product.php"><div class="card">
        <img src="./images/rings3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Gianina Ring</h3>
          <p class="text-center">Different Stones Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£353.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/r4product.php"><div class="card">
        <img src="./images/rings4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Esme Ring</h3>
          <p class="text-center">Different Stones Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£846.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div></a>
</div> 
<div id="code">
      <h1><div class="container" id="products">
  <h1 class="text-center">Chains</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/c1product.php"><div class="card">
        <img src="./images/chains1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Chain Nonna 3,7 mm</h3>
          <p class="text-center">Gold</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£394.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/c2product.php"><div class="card">
        <img src="./images/chains2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Paperclip Maron Chain</h3>
          <p class="text-center">Chain Lengths Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£910.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/c3product.php"><div class="card">
        <img src="./images/chains3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Vienna Chain 5,45 mm</h3>
          <p class="text-center">Different Chain Lengths Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£856.00<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/c4product.php"><div class="card">
        <img src="./images/chains4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Navis Chain</h3>
          <p class="text-center">Different Chain Lengths Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£550.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div>
    </div>
  </div> </a>
</div> 
</h1>
    </div>
    <div id="code">
      <h1><div class="container" id="products">
  <h1 class="text-center">Bracelets</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/b1product.php"><div class="card">
        <img src="./Product page images/bracelets1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Ely Bracelets</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£869.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/b2product.php"><div class="card">
        <img src="./Product page images/bracelets2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Aide Bracelet</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.104.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/b3product.php"><div class="card">
        <img src="./Product page images/bracelets3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Cariel Bracelets</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£2.706.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/b4product.php"><div class="card">
        <img src="./Product page images/bracelets4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Carlisa Bracelet</h3>
          <p class="text-center">Diamond Colours</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.750.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
  </div> 
</div> 
<div id="code">
<h1><div class="container" id="products">
  <h1 class="text-center">Earrings</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/e1product.php"><div class="card">
        <img src="./Product page images/earrings1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Hector Earrings</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£500.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/e2product.php"><div class="card">
        <img src="./Product page images/earrings2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Salvester Earrings</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£2.104.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/e3product.php"><div class="card">
        <img src="./Product page images/earrings3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Sectum Earrings</h3>
          <p class="text-center">VVS Diamond Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£3.000.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/e4product.php"><div class="card">
        <img src="./Product page images/earrings4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Sofia Earrings</h3>
          <p class="text-center">Diamond Colours</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£2.241.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
  </div> 
</div> 
<div id="code">
<h1><div class="container" id="products">
  <h1 class="text-center">Pendants</h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/p1product.php"><div class="card">
        <img src="./Product page images/pendants1.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Arista Pendants</h3>
          <p class="text-center">Different Colours</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£702.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/p2product.php"><div class="card">
        <img src="./Product page images/pendants2.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Trint Pendant</h3>
          <p class="text-center">Gold Quality</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.250.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/p3product.php"><div class="card">
        <img src="./Product page images/pendants3.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Faitto Pendant</h3>
          <p class="text-center">Different Metal Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.000.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
    <div class="col-md-3 py-3 py-md-0">
    <a href="./indiproduct/p4product.php"><div class="card">
        <img src="./Product page images/pendants4.jpg" alt="">
        <div class="card-body">
          <h3 class="text-center">Roher Pendant</h3>
          <p class="text-center">Different Metal Available</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h2>£1.241.00 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
        </div>
      </div></a>
    </div>
  </div> 
</div> 
<div id="code">
    <!-- Code for products -->



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