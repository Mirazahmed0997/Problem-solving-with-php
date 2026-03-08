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

input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input:focus{
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

.error{
    color:red;
    font-size:13px;
}
</style>

<script>
    
function validateForm(){

let firstName = document.forms["myForm"]["First_Name"].value;
let number = document.forms["myForm"]["number"].value;
let email = document.forms["myForm"]["email"].value;

if(firstName == ""){
alert("First Name is required");
return false;
}

if(number.length < 10){
alert("Please enter a valid phone number");
return false;
}

let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

if(!email.match(emailPattern)){
alert("Enter a valid email address");
return false;
}}

</script>

</head>

<body>

<div class="form-container">
<h2>User Information</h2>

<form name="myForm" action="preview.php" method="get" onsubmit="return validateForm()">

<div class="form-group">
<label>First Name</label>
<input type="text" name="First_Name" required>
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="Last_Name">
</div>

<div class="form-group">
<label>Number</label>
<input type="tel" name="number" pattern="[0-9]{10,15}" required>
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" required>
</div>

<button type="submit">Submit</button>

</form>
</div>

</body>
</html>