<?php 
	foreach($data as $i){
		if($i != null){
			echo $i['name'] . "<br />" . $i['price']. "<br />";
		}
	}
?>