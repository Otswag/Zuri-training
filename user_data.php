<?php
$name = $_POST ['name'];
$email = $_POST ['email'];
$date = $_POST ['date'];
$gender = $_POST ['gender'];
$country =$_POST ['country'];

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DATE OF BIRTH: " . $date . "<br>";
echo "GENDER: " . $gender . "<br>";
echo "COUNTRY: " . $country . "<br>";

$fp = fopen('userdata.csv', 'a');

fputcsv($fp, $data);

fclose($fp);
?>
