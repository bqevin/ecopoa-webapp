
<?php
session_start();
include('db_config.php');

$product_name = mysql_real_escape_string($_POST['product_name']);
$product_type = mysql_real_escape_string($_POST['product_type']);
$sku = mysql_real_escape_string($_POST['sku']);
$email = $_SESSION['email'];
$price = mysql_real_escape_string($_POST['price']);
$volume = mysql_real_escape_string($_POST['volume']);
$description = mysql_real_escape_string($_POST['description']);
$targetPath = $_SESSION['image'];


if(empty($product_name) or empty($sku) or empty($price) or empty($description))
{
  header("Location:upload.php?msg=1");
}
else if(!empty($product_name) or !empty($sku) or !empty($price) or !empty($description))
{
   $qry = mysql_query("SELECT sku FROM products WHERE sku='$sku'");
   if(mysql_num_rows($qry)>0)
   {
     header("Location:upload.php?msg=2");
    }
    else if(mysql_num_rows($qry)==0)
    {
      $qry_sku = mysql_query("SELECT * FROM products WHERE sku='$sku'");
      if(!$qry_sku)
      {
        die('Internal Error. Cannot complete the query now, Please try again later!');
      }
      $row = mysql_fetch_array($qry_sku);
      if(mysql_num_rows($qry_sku)>0)
      {
        header("Location:upload.php?msg=2");
      }
      else if(mysql_num_rows($qry_sku)==0)
      {
       // $confirm_code = rand();
        $insert = "INSERT INTO `products`(
            `by`,
            `name`,
            `image`,
            `type`,
            `sku`,
            `price`,
            `description`,
            `offer`,
            `volume`)
        VALUES ('$email','$product_name','$targetPath','$product_type','$sku','$price','$description',0,'$volume')";
        // $insert = "INSERT INTO products(by,name,image,type,sku,offer,description, volume, price) VALUES ('$email','$product_name','$image_link','$product_type','$sku','0','$description', '$volume', '$price')";
        if(!mysql_query($insert))
        {
          die('Couldn\'t save your product right now due to technical glitch. Please try again later'.mysql_error());
        }
        else
        {
             header("Location:upload.php?msg=5");
             unset($targetPath);
        }
      }
      }
      }

 ?>

