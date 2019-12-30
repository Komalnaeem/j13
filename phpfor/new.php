<html>
<body>



<?php
$day=$_POST["name"];
if($day=="monday"){
  echo "menu is biryani";
}
elseif($day=="tuesday"){
  echo "menu is pizza";
}
elseif($day=="wednesday"){
  echo "menu is chinese";
}
elseif($day=="thurseday"){
  echo "menu is qorma";
}
elseif($day=="friday"){
  echo "menu is pasta";

}
elseif($day=="saturday"){
  echo "menu is macroni";
}  
elseif($day=="sunday"){
  echo "menu is haleem";
}
else{
  echo "no food";
}

    
?>
</body>
</html>