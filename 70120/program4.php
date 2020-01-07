<!DOCTYPE html> 
<html> 
<body> 
  
<?php 
$numbers = array(40, 61, 2, 22, 13); 
rsort($numbers); 
  
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]; 
    echo "<br>"; 
} 
?> 
  
</body> 
</html> 