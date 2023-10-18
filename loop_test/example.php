<?php
$peple=array(
    array('name'=>"ali",'code'=>8987),
    array('name'=>"mohsen",'code'=>898887)
);
$countLength=count($peple);
for($i=0;$i<$countLength;$i++){
    $length=count($peple[$i]);
    $value=array_values($peple[$i]);
    $key=array_keys($peple[$i]);
    for($j=0;$j<$length;$j++){
        echo"<pre> $j ) $key[$j] : $value[$j]"; 
    }
    echo"<pre> $j ) randunCode : ".rand(11111111,99999999);
}


$n=7;
for($i=0;$i<$n;$i++){
    for($j=0;$i>$j;$j++){
        echo  " * ";
    }
    echo "<br>";
}