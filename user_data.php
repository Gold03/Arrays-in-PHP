<?php
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$data = [$name , $email , $birthday , $gender , $country,"\n"];

$handle = fopen('./userdata.csv', 'a'); //open file in append mode
fputcsv($handle, $data);

print_r($_POST);
fclose($handle);

?>
