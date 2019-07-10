# php-math
This is just a standalone functions page that makes it a bit easier to handle geometric validation and/or calculations on the server-side with PHP. 
I will admit, there are not many use cases for such functions.

## Circle Functions
* radiusCircum($radius): returns the Circumference of a Circle, with the Radius supplied
* diamCircum($diam): get the Circumference of a Circle, with the diameter supplied
* radiusAreaCircle($radius): get the area of a circle, by supplying the radius
* diamAreaCircle($diam): get the area of a circle, by supplying the diameter

## Sphere Functions 
* radiusAreaSphere($radius): get the area of a sphere, by supplying the radius
* diamAreaSphere($diam): get the area of a sphere, by supplying the diameter
* areaTriangle($base, $height): get the area of a triangle, by supplying the Base and Height lengths

## Distance functions
* mile2kilo($miles): convert miles to kilometers
* kilo2mile($kilos): convert kilometers to miles
* twoObj_travelTime($speed_one, $distance, $speed_two)
  * Measures the time it takes for two objects traveling a set distance, at two set speeds to meet each other (if they are on direct path towards each other)
* twoObj_travelDistance($speed_one, $distance, $speed_two, $who = NULL)
  * Measures the distance it takes for two objects traveling a set distance, at two set speeds to meet each other (if they are on direct path towards each other)
  * The returned values will tell you how much distance Object 1 or 2 has covered in the time it took for them to meet each other in the middle
  * Possible Return Values: 
    1. Array Keys: [1]=>Obj 1 Distance, and [2]=>Obj 2 Distance (this is the return if you do not specify Parameter 4 for Who)
    1. If you specify 1, you get Obj 1 distance
    1. If you specify 2, you get Obj 2 distance
