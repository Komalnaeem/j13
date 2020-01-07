<!DOCTYPE html>
<html>
<body>

<?php

echo strrev("komal Naeem!");
?>
<br>
<?php

$str = 'komal';
$strReversed = '';
$length = strlen($str);
for($i=$length-1; $i >= 0; $i--){
    $strReversed .= $str[$i];
}
echo $strReversed;



?>
</body>
</html>