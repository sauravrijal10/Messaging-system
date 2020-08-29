<?php
    include('server.php');
?>
<!Doctype html>
<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
        <nav class="navbar">
            <form class="form-inline" method="post" action="">
                <div class="formdiv" align="right">
                    <label for="user_name" class="label1"><b>Username</b></label>
                    <input type="text" name="user_name" placeholder="Enter your username" class=""required>
                    <label for="pass_word" class="label1"><b>Password</b></label>
                    <input type="password" name="pass_word" placeholder="Enter your password" required>
                    <input type="submit" class="btn btn-primary" value="login" name="login">
                </div>
            </form>
        </nav>
        <h3 align="center"><b>Fill Up the Form to Signup</b></h3>
        <div class="jumbotron">
            <form action="" method="post">
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" required><br>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" required><br>
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required><br>
                <label for="cpassword">Confirm Password:</label>
                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" requiured><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>