<?php

$filename = './userdata.csv';
$handle = fopen($filename, 'w'); //open file in append mode

fwrite($handle, "Juliet Philips\n");
fwrite($handle, "julietphilip2000@gmail.com\n");
fwrite($handle, "2022-09-28 \n");
fwrite($handle, "female\n");
fwrite($handle, "Nigeria\n");
print_r($_POST);
fclose($handle);

?>
