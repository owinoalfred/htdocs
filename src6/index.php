<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    
    <div id="form">
        <h1>Login Form</h1>
        <form action="" method="post" name="form">
            <label for="">UserName: </label>
            <input type="text" name="user" id="user"><br></br>
            <label for="">password</label>
            <input type="password" name="pass" id="pass"><br></br>
            <button type="submit" id="btn" value="Login" name="Submit">Submit</button>
        </form>
    </div>   
</body>
</html>

