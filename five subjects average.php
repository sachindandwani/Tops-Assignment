<?php
$a=65;
$b=99;
$c=45;
$d=75;
$e=76;
$avg=$a+$b+$c+$d+$e;
echo "Here is our Total Marks Of 5 Subjects="."$avg";
$per=$avg/5;
echo "<br>";
echo "<br>";
echo "Here  is our percentage of 5 subjects=".$per."%";
echo "<br>";
echo "<br>";
if($per>90)
{
    echo "Grade A";
}
else if ($per>80)
{
    echo "Grade B";
}
else if ($per>70)
{
    echo "Grade C";
}
else 
{
    echo "Grade D";
}
?>