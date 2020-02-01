<?php
  $name = "My Name is bossROD";

  echo "Length: ".strlen($name);
  echo "<br>";
  echo "Word Count: ".str_word_count($name);
  echo "<br>";
  echo "Reverse: ".strrev($name);
  echo "<br>";
  echo "Position: ".strpos($name, "bossROD");;
  echo "<br>";
  echo "Replace: ".str_replace("ROD", "JOY", $name);
?>