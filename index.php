

<!-- FIND DAYS  -->

<?php
$birthDate = '2006-06-23';
$todayDate = date('Y-m-d'); 

$diff = strtotime($todayDate) - strtotime($birthDate); 
$diffDays = floor($diff / (60 * 60 * 24)); 

echo "The difference in days is: " . $diffDays;
?>

 
