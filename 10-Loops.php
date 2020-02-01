<?php 
$rod1 = 1;

while ($rod1 <= 4) {
  echo "current rod1: $rod1 <br>";

  $rod1 = $rod1 + 1;
}

echo "Done rod1! <br>";

$rod2 = 1;

do {
  echo "current rod2: $rod2 <br>";

  $rod2 = $rod2 + 1;
} while ($rod2 <= 5);

echo "Done rod2! <br>";

for ($rod3 = 0; $rod3 <= 5; $rod3++) {
  echo "current rod3: $rod3 <br>";
}

echo "Done rod3! <br>";

$rod4 = ["Code", "with", "boss", "ROD"];

foreach ($rod4 as $key => $value) {
  echo "current rod4: $key-$value <br>";
}

echo "Done rod4! <br>";
?>