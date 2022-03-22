<?php
$array = json_encode(array("xiguac","xiaoxigua","dashabi"));

file_put_contents("./list.json",$array);
$array = json_decode(file_get_contents("./list.json"));
if(in_array("x44iguac",$array)){
    echo "111";
}
?>