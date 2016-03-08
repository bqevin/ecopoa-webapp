<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
require 'connect.php';
require 'item.php';
if (isset($_GET['sku'])) {
    $result = mysqli_query($con, 'select * from products where sku='.$_GET['sku']);
    $product = mysqli_fetch_object($result);
    $item = new Item();
    $item->sku = $product->sku;
    $item->by = $product->by;
    $item->type = $product->type;
    $item->price = $product->price;
    $item->offer = $product->offer;
    $item->quantity = 1;
    $item->name = $product->name;
    $item->image = $product->image;
    //Check if product is already in cart
    $index = -1;
    $cart=unserialize(serialize($_SESSION['cart']));
    for ($i=0; $i <count($cart); $i++) {
        if ($cart[$i]->sku==$_GET['sku']) {
           $index = $i;
           break;
        }
        if ($index == -1) {
           $_SESSION['cart'][]=$item;
        }
        else{
            $cart[$index]->quantity++;
            $_SESSION['cart'] = $cart;
        }
    }
}

//Delete Product in Cart
if (isset($_GET['index'])) {
    $cart =unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
?>
<table cellpadding="2" cellspacing="4" border="0">
    <caption>Products details fetched</caption>
    <thead>
        <tr>
            <th>Option</th>
            <th>SKU</th>
            <th>By</th>
            <th>Name</th>
            <th>Image</th>
            <th>Type</th>
            <th>Price</th>
            <th>Offer</th>
            <th>Quantity</th>
            <th>Sub Total </th>
        </tr>
    </thead>
    <tbody>
    <?php
    $cart =unserialize(serialize($_SESSION['cart']));
    $s=0;
    $index = 0;
    for($i=0; $i<count($cart); $i++){
        $s += $cart[$i]->price * $cart[$i]->quantity;
    ?>
     <tr>
        <td><a href="cart.php?index=<?php echo $index;?>" onclick="return confirm('Are you sure you want to DELETE?');">Delete</a></td>
        <td><?php echo $cart[$i]->sku;?></td>
        <td><?php echo $cart[$i]->by;?></td>
        <td><?php echo $cart[$i]->name;?></td>
        <td><img src="../<?php echo $cart[$i]->image;?>" width="100%"></td>
        <td><?php echo $cart[$i]->type;?></td>
        <td><?php echo $cart[$i]->price;?></td>
        <td><?php echo $cart[$i]->offer;?></td>
        <td><?php echo $cart[$i]->quantity;?></td>
        <td><?php echo $cart[$i]->price * $cart[$i]->quantity;?></td>
     </tr>
    <?php
    $index++;
    }
    ?>
    <tr>
        <td><?php echo $s;?></td>
        <td><?php echo $cart[$i]->sku;?></td>
    </tr>

    </tbody>

</table>
<br><br>
<a href="index.php">Continue Shopping</a>