<?php

require("connection.php");

if($con)
{
  session_start();
  $title = rawurlencode($_POST["title"]);
  $content = rawurlencode($_POST["content"]);
  $email = $_SESSION['user'];
  
  $query = "insert into Blogs(user_email,title,content) values('$email','$title','$content');";
  if(mysqli_query($con,$query))
  {
    mysqli_close();
    header('Location: http://eyadalabadla.com/Kblog/user_blogs.php');
  }else
  {
    mysqli_close();
    header('Location: http://eyadalabadla.com/Kblog/profile.php?status=insertError');
  }
  
}


?>