<?php

class Phone
{
    public $name;
    public $model;
    public $official;

    function display()
    {

        echo "
<style>
.card-section{

    display:flex;

}
.phone-card{
    width:300px;
    margin:20px auto;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
    font-family:Arial;
    background:white;
}
.phone-card h2{
    text-align:center;
    margin-bottom:15px;
}
.phone-info{
    margin:8px 0;
    font-size:16px;
}
.label{
    font-weight:bold;
}
</style>

<div class='card-section'>

    <div class='phone-card'>
<h2>Phone Details</h2>

<div class='phone-info'>
<span class='label'>Brand:</span> " . $this->name . "
</div>

<div class='phone-info'>
<span class='label'>Model:</span> " . $this->model . "
</div>

<div class='phone-info'>
<span class='label'>Official:</span> " . ($this->official ? "Yes" : "No") . "
</div>

</div>

</div>

";
    }
}

$phn1 = new Phone();
$phn1->name = "RealMe";
$phn1->model = "C85 Pro";
$phn1->official = true;


$phn2 = new Phone();
$phn2->name = "Samsung";
$phn2->model = "S36";
$phn2->official = false;



?>


<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f6f9;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding: 20px;
}

.flex-container{
    display: flex;
    gap: 20px; /* space between cards */
    flex-wrap: wrap; /* wrap on small screens */
    justify-content: center;
}

.phone-card{
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 20px;
    width: 250px;
}

.phone-card h2{
    text-align: center;
    margin-bottom: 15px;
}

.phone-info{
    margin: 8px 0;
    font-size: 16px;
}

.label{
    font-weight: bold;
}
</style>
</head>
<body>

<div class="flex-container">
    <?php
        $phn1->display();
        $phn2->display();
    ?>
</div>

</body>
</html>