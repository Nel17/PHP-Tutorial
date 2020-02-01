<?php 
  function displayDetails($name, $age, $gender) {
    return $name." ".$age." ".$gender;
  }

  $myDetails = displayDetails("bossROD", 23, "Male");

  echo $myDetails;
?>