 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1: 
		echo "Today is Monday\n";
		break;        
    case 2:
		echo "Today is Tuesday\n";
		break;
	case 3: 
		echo "Today is Wednsday\n";
		break;        
    case 4:
		echo "Today is Thursday\n";
		break;
	case 5: 
		echo "Today is Friday\n";
		break;        
    case 6:
		echo "Today is Saturday\n";
		break;
	case 7:
		echo "Today is Sunday\n";
		break;
	default:
		echo "We are unable to determain the day, please consult the sun god\n";
		break;
 }