<?php

echo  PHP_VERSION,"<br>"; //wersja

echo 2**10,"<br>";

$x=1;
$y=10;
echo $x<=>$y,"<br>";

if ($x==$y) {
  echo "równe";
}
else {
  echo "nierowne";
}

/*
postinkrentacja $x++
preinkrentacja ++$x

*/

$x=10;
$x=$x++;
echo $x,"<br>";
$y=$x++;
echo $x ,"<br>","<hr>";

$x=1;
echo $x ,"<br>"; // 1
$x=$x++;
echo $x ,"<br>"; //1
$x=++$x;
echo $x ,"<br>"; //2
$y=++$x;
echo $x ,"<br>"; //3
echo $y ,"<br>"; //3
$y=$x++;
echo $x ,"<br>"; //4
echo $y ,"<br>"; //3
 ?>
