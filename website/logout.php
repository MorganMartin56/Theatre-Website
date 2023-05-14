<?php
//logout by destroying session
  session_start();
  session_destroy();
  sleep(1.5);
  header ("Location: index.php");
?>
