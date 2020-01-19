<?php
  session_start();
  if(!isset($_SESSION["authed"])){
    header("location: 127.0.0.1:3000");
  }
?>