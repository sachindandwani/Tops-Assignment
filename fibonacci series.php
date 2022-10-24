<?php
$n1=1;
$n2=0;
for($i=0;$i<=15;$i++)
{
    echo  "$n2";
    $temp=$n1+$n2;
    $n1=$n2;
    $n2=$temp;
    echo "<br>";
}
?>