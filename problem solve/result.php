<?php 
	
	$num = 83;

	if($num >=80 && $num <=100){
		echo "Your Grade is A+";
	}

	elseif ($num >=75 && $num <=79) {
		echo "Your Grade is A";
	}

	elseif ($num >=70 && $num <=74) {
		echo "Your Grade is A-";
	}

	elseif ($num >=65 && $num <=69) {
		echo "Your Grade is B+";
	}

	elseif ($num >=60 && $num <=64) {
		echo "Your Grade is B";
	}

	elseif ($num >=55 && $num <=59) {
		echo "Your Grade is B-";
	}

	elseif ($num >=50 && $num <=54) {
		echo "Your Grade is C+";
	}

	elseif ($num >=45 && $num <=49) {
		echo "Your Grade is C";
	}

	elseif ($num >=40 && $num <=44) {
		echo "Your Grade is D";
	}

	elseif ($num >=0 && $num <=39) {
		echo "Your Grade is F";
	}

	else{
		echo "Please input valid number";
	}



?>