<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <style>

        body {
            background-image: url("hospital.jpg");
            height: 100%;
            background-position: center;
            background-size: 1400px 700px;
            background-repeat: no-repeat;

        }

    </style>

    <body>
        <div class="container-fluid">
            <div class="outterbox">
                <form method="post" action="/home/avj17/Emergency-Service/Frontend/login.php" class="Form">
                    <p class="text-danger UserPass">User Name<p>
                    <input type="text" class="innerbox" placeholder="UserName" name="username">
                    <p class="text-danger UserPass">Password<p>
                    <input type="password" class="innerbox" placeholder=" Password" name="password">
                    </br></br>
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                    <input type="submit" class="btn btn-danger" name="signup" value="SignUp">
                </form>
            </div>
        </div>
    </body>
</html>
