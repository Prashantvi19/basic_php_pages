<?php
echo "All Even and Odd in b/w 100 <br>";
for($i=1; $i<=100; $i++){
	if( $i%2== 0) {
		echo '----->'.$i." is even Number";
	}
     else{
		echo '--------------------------------->'.$i."    is odd Number <br>";
	}
}
?>