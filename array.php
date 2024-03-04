<h1>Single Array/Simple Array</h1><br>
<?php 

$rarry1=['Ram','Govind',23,34567,567,];
echo $rarry1[0];
echo '<br>';

echo $rarry1[3];
echo '<br>';

print_r($rarry1);
echo '<br>';

var_dump($rarry1);
echo '<br>';

$rarry2=['RamKumar','GovindBHarghav',245,3,5,];
print_r($rarry2);
echo '<br>';

$rarry2[2]='Rajeshwari'; 
print_r($rarry2);
echo '<br>';

array_push($rarry2, 'Suraj');
var_dump($rarry2);
echo '<br>';



?>

