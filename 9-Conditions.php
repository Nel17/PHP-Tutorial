<?php 
  if (1 == 1) {
    echo "True";
  } else {
    echo "False";
  }

  echo "<br>";

  $rod = 1;

  switch($rod) {
    case 1:
      echo "One"; break;
    case 2:
      echo "Two"; break;
    default:
      echo "Zero";
  }
?>