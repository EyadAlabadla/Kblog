<?php

  session_start();
  session_unset();
  session_destroy();
  header('Location: http://eyadalabadla.com/Kblog/index.php');

?>

