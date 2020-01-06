<html>

<body>
	
	<form method="post" action="">
   <label>Day:</label><br> 
   <input type="text" name="day"></br>

   
<br>
 <input type="submit"  name="submit">
 <br>

<?php
if (isset($_POST['submit'])) {


switch ($_POST['day']) {
	case 'monday':
	echo "today is biryani";
	break;
	case 'tuesday':
	echo "today is pizza";
	break;
	case 'wednesday':
	echo "today is macroni";
	break;
	case 'thurseday':
	echo "today is qorma";
	break;
	case 'friday':
    echo "today is pasta";
    break;
    case 'saturday':
    echo "today is haleem";
    break;
    case 'sunday':
    echo "today is no food";
}


}    
?>


	</form>








</body>
</html>