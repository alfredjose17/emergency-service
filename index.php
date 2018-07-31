<?php
        session_start();
        $_SESSION['message'] = '';
        $mysqli = new mysqli('localhost', 'root', 'root', 'database');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['password'] == $_POST['confirmpassword']){
                $name = $_POST['Name'];
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $sql = "INSERT INTO user VALUES('$name', '$username', '$password', '$email', '$mobile')";

                if($mysqli->query($sql )){
                    $_SESSION['message'] = 'SignUp successful';
                }
            }
            else{
                die();
            }

        }
?>

<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
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
                <form method="post" action="home.php" class="Form">
                    <p class="text-danger UserPass">User Name<p>
                    <input type="text" class="innerbox" placeholder="UserName" name="username" required>
                    <p class="text-danger UserPass">Password<p>
                    <input type="password" class="innerbox" placeholder=" Password" name="password" required>
                    </br></br>
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                    <a class="btn btn-danger" href="signUp.php" >SignUp</a>
                </form>
            </div>
        </div>
    </body>
</html>
