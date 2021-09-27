<?php
$numero1 = 0;
$numero2 = 1;

echo "$numero1<br>";
echo "$numero2<br>";
for ($i=2; $i <10 ; $i++) { 
    $fibonacci = $numero1 + $numero2;
    echo "$fibonacci<br>";
    $numero1 = $numero2;
    $numero2 = $fibonacci;
};
