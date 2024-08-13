<?php
$a=407;
$total=0;
$b=$a;
while($b!=0)
{
    $rem=$b%10;
    $total=$total+$rem*$rem*$rem;
    $b=$b/10;
}
if($a=$total)
{
    echo"<br> Num is Armstrong ";
}
else
{
    echo"<br> Num is not Armstrong "; 
}
?>