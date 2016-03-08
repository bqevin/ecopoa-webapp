<?php
session_start();
include('db_config.php');
include('templates/header.php');
?>
<!-- Call to Action -->
<aside class="call-to-action bg-primary">
<div class="container">
<div class="row">
    <div class="col-lg-12 text-center">
        <h3>Ready to make more sales, <?php echo $_SESSION['fname'];?>?</h3>
        <a href="#" data-toggle="modal" data-target="#add_m" class="btn btn-lg btn-light">Upload Product</a>
    </div>
</div>
</div>
</aside>
<?php
$email = $_SESSION['email'];
$products = mysql_query("SELECT * FROM products WHERE `by`='$email'");
if (!$products) {
   die('Could not get data: ' . mysql_error());
}
if(mysql_num_rows($products)>0)
{
while($row = mysql_fetch_assoc($products, MYSQL_ASSOC))
{
    echo "<div class='col-md-6'><div class='portfolio-item'><a href='#'><img class='img-portfolio img-responsive' src='{$row['image']}'></a></div></div>";
}
} else{
    echo "<h2 style='color:red;'>Oops! No items in store :(</h2>";
}
?>
