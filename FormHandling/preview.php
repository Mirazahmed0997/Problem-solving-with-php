<!DOCTYPE html>
<html>
<head>
<title>User Preview</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: #f2f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Card Design */
.container{
    background: white;
    padding: 30px;
    width: 400px;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.container h2{
    text-align: center;
    margin-bottom: 20px;
}

.info{
    margin: 12px 0;
    font-size: 16px;
}

.label{
    font-weight: bold;
    color: #333;
}

.value{
    color: #555;
}

</style>

</head>

<body>

<div class="container">

<h2>User Information</h2>

<div class="info">
<span class="label">Name:</span>
<span class="value"><?php echo $_GET["First_Name"]; ?></span>
<span class="value"><?php echo $_GET["Last_Name"]; ?></span>
</div>


<div class="info">
<span class="label">Number:</span>
<span class="value"><?php echo $_GET["number"]; ?></span>
</div>

<div class="info">
<span class="label">Email:</span>
<span class="value"><?php echo $_GET["email"]; ?></span>
</div>

</div>

</body>
</html>