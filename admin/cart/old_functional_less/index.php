<?php
require 'connect.php';
$result = mysqli_query($con,'select * from products');
?>

<table cellpadding="2" cellspacing="4" border="0">
    <caption>Products details fetched</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>By</th>
            <th>Name</th>
            <th>Image</th>
            <th>Type</th>
            <th>SKU</th>
            <th>Description</th>
            <th>Price</th>
            <th>Offer</th>
            <th>Volume</th>
            <th>Creation Date</th>
            <th>Buy</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($product = mysqli_fetch_object($result)) { ?>
        <tr>
            <td><?php echo $product->id;?></td>
            <td><?php echo $product->by;?></td>
            <td><?php echo $product->name;?></td>
            <td><img src="../<?php echo $product->image;?>" width="100%"></td>
            <td><?php echo $product->type;?></td>
            <td><?php echo $product->sku;?></td>
            <td><?php echo $product->description;?></td>
            <td><?php echo $product->price;?></td>
            <td><?php echo $product->offer;?></td>
            <td><?php echo $product->volume;?></td>
            <td><?php echo $product->created_at;?></td>
            <td><a href="cart.php?sku=<?php echo $product->sku;?>">Order Now</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

