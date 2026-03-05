<?php

$name='Miraz';
$language="PHP";

echo "Hello $name! This is my first $language project! <br>";

function ageDetector(int $age)
{
   if($age >= 18)
    {
        echo "Congrtulations! You are an adult <br>";
    }
    else{
        echo "opps ! you a an underage person <br>";
    }
}
echo ageDetector(18);


$age=144;
$text=match (true) {
    $age < 18 => "You are an under age <br>",
    $age >= 18 =>"You are an adult <br>" ,
};

echo $text;


for($x=1; $x<=10; $x++)
    {
        if($x%2==0)
            {
                echo $x." : ". "Number is Even <br>";
            }
            else echo $x." : ". "Number is odd <br>";
    }


    $cars = array("Volvo", "BMW", "Toyota");

    for($j=0;$j < count($cars) ;$j++)
        {
            echo ($j + 1)." : ". $cars[$j]."<br>"; 
        }

?>