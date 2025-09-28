<?php
$jsonobj = '{"Naufal":20,
             "Yoga":19,
             "Azriel":20
            }';

$obj = json_decode($jsonobj);

//mengakses nilai object
echo $obj->Naufal;
echo $obj->Yoga;
echo $obj->Azriel;
?>