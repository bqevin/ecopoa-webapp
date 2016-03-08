<?php
include('db_config.php');

$first_name = mysql_real_escape_string($_POST['first_name']);
$last_name = mysql_real_escape_string($_POST['last_name']);
$shop_name = mysql_real_escape_string($_POST['display_name']);
$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));


if(empty($first_name) or empty($last_name) or empty($email) or empty($password))
{
  header("Location:index.php?response=blank");
}
else
{
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
  header("Location:index.php?response=invalid");
}
else if(!empty($first_name) or !empty($last_name) or !empty($email) or !empty($password))
{
   $qry = mysql_query("SELECT email FROM users WHERE email='$email'");
   if(mysql_num_rows($qry)>0)
   {
     header("Location:index.php?response=memberAlready");
    }
    else if(mysql_num_rows($qry)==0)
    {
      $qry_email = mysql_query("SELECT * FROM users WHERE email='$email'");
      if(!$qry_email)
      {
        die('Internal Error. Cannot complete the query now, Please try again later!');
      }
      $row = mysql_fetch_array($qry_email);
      if(mysql_num_rows($qry_email)>0)
      {
        header("Location:index.php?response=4");
      }
      else if(mysql_num_rows($qry_email)==0)
      {
       // $confirm_code = rand();
        $insert = "INSERT INTO users(first_name,last_name,shop_name,email,password,admin) VALUES ('$first_name','$last_name','$shop_name','$email','$password','0')";
        if(!mysql_query($insert))
        {
          die('Couldnot save your information right now. Please try again later');
        }
        else
        {
             header("Location:index.php?response=success");
        }
      }
      }
      }
      }


 ?>