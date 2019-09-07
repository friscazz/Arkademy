<?php 
function Segitiga ($total){


if ($total >= 3) {
	$tot = $total + 1;
	for($a=0; $a<=$tot; $a++){
    for($b=0; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$tot; $c>=$a; $c--){
        echo '*';
    }
    echo "<br/>";
	}
}else{echo "harus lebih dari 3";}

}
 Segitiga(3);

 ?>