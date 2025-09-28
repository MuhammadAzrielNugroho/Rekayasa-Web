<?php
$jsonobj = '{"Naufal":211230077,
             "Azriel":211230067,
             "Yoga":211230087
            }';

$arr = json_decode($jsonobj,true);

//mengakses nilai array
echo $arr["Naufal"];
echo $arr["Azriel"];
echo $arr["Yoga"];
?>