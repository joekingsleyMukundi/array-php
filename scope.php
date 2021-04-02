<?php
$x = "outside";
function converter(){
  global $x;
  $x = "inside";
};
echo $x;
converter();
echo $x;