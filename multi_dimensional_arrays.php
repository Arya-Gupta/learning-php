<?php

$arr=array(array(1,2,3),
           array(4,5,6),
           array(7,8,9));

echo "Data type: ";
echo var_dump($arr);
echo "<br> <br>";


for($i=0;$i<count($arr);$i++)
{
    echo var_dump($arr[$i]);
    echo "<br>";
}
echo "<br>";

echo "The array is:";
echo "<br>";
for($i=0;$i<count($arr);$i++)
{
    for($j=0;$j<count($arr[$i]);$j++)
    {
        echo $arr[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>
