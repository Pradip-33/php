<?php 
$a = "my_name_is_pradip";

$r = "";
for ($i = strlen($a) - 1; $i >= 0; $i--) 
{
    $r .= $a[$i];
}

echo $r; 

?>