<?php
  $user = array (
    $_POST ['name'];
    $_POST ['email'];
    $_POST ['date'];
    $_POST ['gender'];
    $_POST ['country'];
)

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DATE OF BIRTH: " . $date . "<br>";
echo "GENDER: " . $gender . "<br>";
echo "COUNTRY: " . $country . "<br>";

$fp = fopen('userdata.csv', 'a');

fputcsv($fp, $user);

fclose($fp);
?>
