<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<style>
body{
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container{
    background: white;
    padding: 30px 40px;
    width: 350px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.form-container h2{
    text-align: center;
    margin-bottom: 20px;
}

.form-group{
    margin-bottom: 15px;
}

label{
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

input[type="text"]{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input[type="text"]:focus{
    border-color: #007bff;
    outline: none;
}

button{
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button:hover{
    background: #0056b3;
}
</style>

</head>

<body>

<div class="form-container">
<h2>User Information</h2>

<form action="preview.php" method="get">

<div class="form-group">
<label>First Name</label>
<input type="text" name="First_Name">
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="Last_Name">
</div>

<div class="form-group">
<label>Number</label>
<input type="text" name="number">
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email">
</div>

<button type="submit">Submit</button>

</form>
</div>

</body>
</html>