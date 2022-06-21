<?php

// Q1 FizzBuzz
for ($i = 1; $i <= 100; $i++) {

  if ($i % 3 === 0 && $i % 5 === 0) {
    echo 'FizzBuzz';
    echo '<br>';
  } else if ($i % 3 === 0) {
    echo 'Fizz';
    echo '<br>';
  } else if ($i % 5 === 0) {
    echo 'Buzz';
    echo '<br>';
  } else {
    echo $i;
    echo '<br>';
  }
  
}

// Q2 素数出力
for ($i = 1; $i <= 100; $i++) {

  $num = 0;

  for ($j = 1; $j <= $i; $j++) {
    if ($i % $j === 0) {
      $num += 1;
    }
  }

  if ($num === 2) {
    echo $i;
    echo '<br>';
  }
}

// Q3


?>