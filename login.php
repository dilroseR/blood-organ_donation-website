<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
	<div class="div2">
    <title>Login</title>
</head>
<body>

    <h1 style="text-align:center"><b>Login</b></h1>
	<br>
    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="input-group">
            <span class="input-group-addon">Username</span>
		<input id="username" type="text" class="form-control" name="uname" placeholder="Username">
        </div>
       
	  <br>
        <div class="input-group">
            <span class="input-group-addon">Password</i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        
        <br>
        <button type="submit" class="btn btn-default">Login</button>
    </form>
	 <br>
	</div>


    <?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$u=$_POST['uname'];
$p=$_POST['password'];

if($u==$username && $p==$password){
    
}

}

?>




</body>
</html>

<!--.div1{
    background-color:#E6E3E3;
    position:relative;
    left:100x;
    width:600px;
    height:300px;
    text-align:center;
    padding-top:10px;
     
      #8D9BD9
    } -->