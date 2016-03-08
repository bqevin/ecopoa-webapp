<?php
session_start();
include('db_config.php');
$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));

$login = mysql_query("SELECT * FROM users WHERE email='$email'");
$row = mysql_fetch_array($login);
if(mysql_num_rows($login)>0)
{
   $db_password = $row['password'];
   // $first_name = $row['first_name'];
   // $last_name = $row['last_name'];
   // $email = $row['email'];
   // $shop_name = $row['shop_name'];
   // $admin = $row['admin'];
   // $created_at = $row['created_at'];
   if($db_password == $password)
   {
   $_SESSION['shop'] = $row['shop_name'];
   $_SESSION['email'] = $row['email'];
   $_SESSION['fname'] = $row['first_name'];
   $_SESSION['lname'] = $row['last_name'];
   $_SESSION['created'] = $row['created_at'];

   header("Location:upload.php");
   }
   else
   {
      header("Location:index.php?response=wrong");
   }
}
else
{
  header("Location:index.php?response=notMember");
}
?>
