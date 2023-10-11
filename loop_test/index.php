<?php

use JetBrains\PhpStorm\Language;

$count="A";
$i=0;
while($i>29){
    $i++;
    echo "$i -  $count  - </br>";
    $count++;
}


for($i=100 ;$i>0;$i--){
    echo " $i ";
}

$Language=["fa"=>"farsi","en"=>"enghlesh",'sp'=>"spaneshe"];
$value=array_values($Language);
$key=array_keys($Language);
for($i=0 ;$i<count($Language);$i++){
  
    echo" $i )$key[$i] : $value[$i]";
}
$app=array_merge($key,$value);
echo "<br>";
print_r($app);
echo "<br>";
print_r($Language);
