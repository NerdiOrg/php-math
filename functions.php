<?php
function radiusCircum($radius){
	// get the Circumference of a Circle, with the Radius supplied
	$circumference = $radius * 2 * pi(); 
	return $circumference;
}

function diamCircum($diam){
	// get the Circumference of a Circle, with the diameter supplied
	$circumference = $diam * pi();
	return $circumference;
}

function radiusAreaCircle($radius){
	// get the area of a circle, by supplying the radius
	$area = $radius * $radius * pi();
	return $area;
}

function diamAreaCircle($diam){
	// get the area of a circle, by supplying the diameter
	$radius = $diam / 2;
	$area = $radius * $radius * pi();
	return $area;
}

function radiusAreaSphere($radius){
	// get the area of a sphere, by supplying the radius
	$surface_area = 4 * pi() * $radius * $radius;
	return $surface_area;
}

function diamAreaSphere($diam){
	// get the area of a sphere, by supplying the diameter
	$radius = $diam / 2;
	$surface_area = 4 * pi() * $radius * $radius;
	return $surface_area;
}

function areaTriangle($base, $height){
	// get the area of a triangle, by supplying the Base and Height lengths
	$area = 0.5 * $base * $height;
	return $area;
}	

function mile2kilo($miles){
	// convert miles to kilometers
	$kilometers = $miles * 1.60934;
	return $kilometers;
}

function kilo2mile($kilos){
	// convert kilometers to miles
	$miles = $kilometers / 1.60934;
	return $miles;
}


function twoObj_travelTime($speed_one, $distance, $speed_two){
/* This function measures the time it takes for two objects traveling a set distance, at two set speeds to meet each other (if they are on direct path towards each other)
The returned value of this function provides the time it takes for the two objects to meet up. 
The time value is the same unit as $speed_one and $speed_two
If $speed_one and $speed_two are Miles Per Hour, then the returned $time value is how long it takes, in hours, for the two objects to meet
Similarly, if speeds were in kilometers per second, the returned $time value would be how many seconds it takes for them to meet
Important: Both speeds AND the distance must use the same unit (examples: miles, kilometers, feet)
*/
	$combined_speed = $speed_one + $speed_two;
	$time = $distance / $combined_speed; // amount of time it takes for two objects to meet up
	return $time;
}

function twoObj_travelDistance($speed_one, $distance, $speed_two, $who = NULL){
/* This function measures the distance it takes for two objects traveling a set distance, at two set speeds to meet each other (if they are on direct path towards each other)
The returned values will tell you how much distance Object 1 or 2 has covered in the time it took for them to meet each other in the middle

Possible Return Values: 
- Array Keys: [1]=>Obj 1 Distance, and [2]=>Obj 2 Distance (this is the return if you do not specify Parameter 4 for Who)
- If you specify 1, you get Obj 1 distance
- If you specify 2, you get Obj 2 distance

Important: Both speeds AND the distance must use the same unit (examples: miles, kilometers, feet)
*/	
	if($speed_one == NULL || $distance == NULL || $speed_two == NULL){
		$error = 'ERROR: You must supply the following information: Object 1 Speed, Distance Between Objects, Object 2 Speed. OPTIONAL 4th Parameter: Who (to specify Object 1 or 2, using integers 1 & 2)';
		return $error;
	}
	
	// for travelDistance, user can specify the $who variable to get the distance traveled by either object 1 or object 2
	$combined_speed = $speed_one + $speed_two;
	$time = $distance / $combined_speed; // amount of time it takes for two objects to meet up
	$obj_two = $speed_two * $time;
	$obj_one = $distance - $obj_two; 
	
	if($who == NULL){
		$distances[1] = $obj_one;
		$distances[2] = $obj_two;
		return $distances;
		// example usage of this function: $getDists = twoObj_travelDistance("70", "578", "50"); 
		// they can then access the value with $getDists[1] and $getDists[2] for obj 1 and 2
	} else if($who == 1){
		return $obj_one;
	} else if($who == 2){
		return $obj_two;
	}
}
?>
