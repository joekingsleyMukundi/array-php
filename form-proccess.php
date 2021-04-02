<?php
if(isset($_POST["submit"])){
  $user = $_POST["username"];
  $pass = $_POST["pass"];
  echo $user .  $pass;
}