<?php
if(isset($_POST["submit"])){
  $user = $_POST["username"];
  $pass = $_POST["pass"];
  echo "<h1> your username is " . $user . " and password is " . $pass . "</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
  <input type="text" name="username" id="">
  <input type="password" name="pass" id="">
  <br>
  <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>