<?Php $a = 70;
$b = 56;
$c = 87;
$d = 311;
if ($a > $b) {
     if ($a > $d) 
     {
          echo"A Is MAXIMUM";
     }
     else 
     {
          echo "D Is MAXIMUM";
     }
} 
else if ($b > $c) 
{
     if ($b > $d)
     {
          echo"B Is MAXIMUM";
     }
     else 
     {
          echo "D Is MAXIMUM";
     }
}
else 
{
     if ($c > $d)
     {
          echo"c Is MAXIMUM";
     }
     else 
     {
          echo "D Is MAXIMUM";
     }
}

echo($a> $b) ?(($a > $d)?"<br>A IS MAXIMUM":"<br>D IS Maximum") :(($b > $d)?"<br>B IS MAXIMUM":"<br>D IS Maximum");

?>
