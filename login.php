<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <h3>Login</h3>
            </div>
            <form action="validation.php" method="post">
                <h5 class="loginuser">Username:</h5>
                <input type="text" class="fadeIn second" name="user" required/>
                <h5 class="loginpass">Password:</h5>
                <input type="password" class="fadeIn third" name="password" required/>
                <button type="submit" class="fadeIn fourth btn btn-primary text-white" value="Log In">Log in</button>
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="signin.php">Don't have an account? Create New...!</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>