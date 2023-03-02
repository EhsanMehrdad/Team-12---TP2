
<?php
session_start();
include('basket2.php');
$status="";
if (isset($_POST['pid']) && $_POST['name']!=""){
$pid = $_POST['pid'];
$result = mysqli_query(
$db,
"SELECT * FROM `products` WHERE `pid`='$pid'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$pid = $row['pid'];
$price = $row['price'];
$quantity = $row['quantity'];

$cartArray = array(
	$pid=>array(
	'name'=>$name,
	'pid'=>$pid,
	'price'=>$price,
	'quantity'=>$quantity,)
);


if(empty($_SESSION["cart"])) {
    $_SESSION["cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["cart"]);
    if(in_array($pid,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["cart"] = array_merge(
    $_SESSION["cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<?php
if(!empty($_SESSION["cart"])) {
$cart_count = count(array_keys($_SESSION["cart"]));
?>
<div class="cart_div">
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<?php
$result = mysqli_query($db,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='pid' value=".$row['pid']." />
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <div class='quanitity'>$".$row['quantity']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($db);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>