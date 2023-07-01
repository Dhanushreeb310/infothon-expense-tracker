<?php
include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url('bg.jpg');
            background-size:cover;
        }
        form{
            background-color: #fff;
            margin-top: 5em;
            margin-bottom: 6em;
            margin-left: 30em;
            margin-right: 10em;
            align: center;
            padding: 20px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
        header{
    position: fixed;
    top:0; left:0; 
    right:0;
    background:#333;
    z-index:1000;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:2rem 9%;
}
    </style>
    <title>Register</title>
</head>
<body>
<h1 style="color:white">  TrackMyWallet</h1> 
<div class="container">
<form>
<div class="mb-3">
    <label for="exampleInputName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="firstname" placeholder="Enter your name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="lastname"placeholder="Enter your name" required>
  </div>

<div>
<div>
  <label for="dob" class="form-label">Date of Birth:</label>
  <br>
    <input type="date" class="form-label" id="dob" name="dob">
</div>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="exampleInputGender">Gender</label>
    <select name="gender" class="form-control" id="Gender">
    <option value="select">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="prefer not say">prefer not to say</option>
    </select>
  </div>
  <div>
  <label for="ExampleInputusername" >Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
</div>
<div class="mb-3">
<label for="inputPassword5" class="form-label">Password</label>
<input type="password"  name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter password" required>
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
</div>

<input type="submit" value="Submit" class="btn btn-primary" name="submit">
<br>
<a href="e.php">dashboard</a>
  <br>
Already Registered? <a href="log.php">Login</a>
</div>
</form>
    </div>
</body>
</html>
<?php
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$dob=$_GET['dob'];
$em=$_GET['email'];
$gr=$_GET['gender'];
$un=$_GET['username'];
$pwd=$_GET['password'];


$query="INSERT INTO USER VALUES('$fn','$ln','$dob','$em','$gr','$un','$pwd')";

$data=mysqli_query($conn,$query);

if($data)
{
  echo "Data inserted into Database";
}

else{
    echo "Data insertion failed";
}


?>