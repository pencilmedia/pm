<?php
// define the meals array
$meals = array('turkey sandwich', 'tuna sandwich', 'pizza', 'donuts', 'candy', 'hot chocolate', 'chocolate', 'chili', 'bread', 'steak',
		'nuts', 'soda', 'juice', 'coffee', 'tea', 'omlette', 'eggs', 'sausage', 'hot dogs', 'fries', 'mint', 'energy bar', 'pasta', 'wine', 'beer', 'alcohol',
		'beans', 'sweetener', 'fruit', 'jelly', 'peanut butter', 'lemons', 'limes', 'onions', 'red onions', 'pickles', 'milk', 'cheese', 'salty food'
		);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
	// initialize the results array
	$results = array();

	// search meals
	foreach($meals as $meal)
	{
		// if it starts with 'part' add to results
		if( strpos($meal, $_GET['part']) === 0 ){
			$results[] = $meal;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);

	// or return using Zend_Json class
	//require_once('Zend/Json/Encoder.php');
	//echo Zend_Json_Encoder::encode($results);
}