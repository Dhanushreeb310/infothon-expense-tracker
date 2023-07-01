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
    <title>login</title>
</head>
<body>
<h1 style="color:white">  TrackMyWallet</h1> 
    <div class="container">
    <form >
    <div>
  <label for="ExampleInputusername">Username</label>
    <input type="text" name="username" class="form-control" id="username">
</div>
<div class="mb-3">
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
</div>
<a href="e.php"><input type="button" value="Submit" class="btn btn-primary"></a>
  <br>
<p style="text-align: center;">New User?<br>Create Account <a href="signin.php">Sign Up</a></p>
</div>
</form>
    </div>
</body>
</html>
