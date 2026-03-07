<?php


$cars = array("Volvo", "BMW", "Toyota");

for ($j = 0; $j < count($cars); $j++) {
    echo ($j + 1) . " : " . $cars[$j] . "<br>";
}



$employees = ["miraz", "shahed", "Alif"];
foreach ($employees as $employee) {
    echo $employee . "<br>";
}

echo "<h3>After added New Value using push key</h3>" . "<br>";


array_push($employees, "ikbal", "Hossain");

foreach ($employees as $employee) {
    echo $employee . "<br>";
}


echo "<h3>After merger arrays using array_merge key</h3>" . "<br>";

$merged_Array= array_merge($cars, $employees);

foreach ($merged_Array as $result) {
    echo $result . "<br>";
}

echo "<h3>After spliced some value of array using array_splice key</h3>" ;


array_splice($merged_Array,0,3);

foreach ($merged_Array as $result) {
    echo $result . "<br>";
}



echo "<h3>After removed some value of array using unset key</h3>" ;

unset($merged_Array[0],$merged_Array[1],$merged_Array[2]);
foreach ($merged_Array as $result) {
    echo $result . "<br>";
}


echo "<h3>After removed last value of array using array_pop key</h3>" ;

array_pop($employees);
foreach ($employees as $result) {
    echo $result . "<br>";
}
echo "<h3>After removed first value of array using array_shift key</h3>" ;

array_shift($employees);
foreach ($employees as $result) {
    echo $result . "<br>";
}
?>