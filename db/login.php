<?php

require("connection.php");

if($con)
{
  $email = $_POST["email"];
  $password = md5($_POST["password"]);
  $query = "select email from User where email='$email' and password='$password';";

  if($result = mysqli_query($con,$query))
  {
    mysqli_close();
    if(mysqli_num_rows($result) > 0)
    {
      session_start();
      $_SESSION["user"] = $email;
      $_SESSION["logged"] = true;
      if(isset($_POST["remember"]))
      {
        setcookie("rememberuser",$email,time()+30*24*60,"/");
        setcookie("rememberpass",$_POST["password"],time()+30*24*60,"/");
      }else
      {
        setcookie("rememberuser","",time()-30*24*60,"/");
        setcookie("rememberpass","",time()-30*24*60,"/");
      }
      header('Location: http://eyadalabadla.com/Kblog/profile.php');
    }
    else
    {
      $logged = false;
      header('Location: http://eyadalabadla.com/Kblog/index.php?status=loginError');
    }
  }else
  {
    mysqli_close();
    $logged = false;
  }
  
}


?>

