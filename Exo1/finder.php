<?php

$arr =  [1, 4, 6, 9, 16, 18, 59, 20, 30, 1, 9,];
$arg = readline('Enter a int: '); 


function findAndPrint($array,$argument){

	if(is_numeric($argument)){// check before if the input are a num
		echo "$argument se trouve dans la position ".array_search($argument,$array) . "\n" ;
		if(count(array_keys($array,$argument)) > 1){ // check if the input 	are repeated
			print("true ".true) ;
		}
	}else{
		$arg = readline('Enter a int: '); 
		findAndPrint($array,$arg);//recursive function if the user do not enter a int value 
	}
	
}

findAndPrint($arr,$arg);