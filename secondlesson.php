<?php

	$age = 5;
	
	if($age < 18){
		echo "alaealine";
	} else {
		echo "t�isealine";
	}
	

?>

<br>

<?php

	//eesm�rk vanusele vastavalt
	//tr�kime v�lja `palju�
	
	for ( $i = 1; $i < $age; $i = $i + 1) {
	
		echo $i."palju"; // $i. liidab numbri "palju" ette
		
	}

	echo "�nne!";
	
?>

