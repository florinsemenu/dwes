<?php
$numero = 193;

for ($i=1; $i <$numero ; $i++) { 
    if ($numero%$i!=0) {
        echo "es primo <br>";
    break;
    } else if ($numero%$i==0) {
        echo "$i<br>";
    };
};