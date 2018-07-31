<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $flag = 0;

    $conn = new mysqli('localhost','root','root','database');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE USER_NAME = '$username' AND PASS = '$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($result->num_rows == 0){
        header('location:index.php');
    }

    $conn->close();
?>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <p class="welcome">Welcome <?php echo $row["NAME"]; ?>,</p>
    <a href="index.php" class="logout btn btn-primary" >Logout</a>
    <center>
      <h1>REPORT</h1>
    </center>
  </head>
  <table width="100%"; border="2" style="background-colour: #84ed86";align="center";bgcolor="#00FF00">
    <center>
      <thead>
        <tr>
          <th>DATE</th>
          <th>TIME</th>
          <th>DEPARTMENT</th>
          <th>CODE</th>

        </tr>
      </thead>
    </center>
    <tbody>
      <style type="text/css">

        body{
          background-image: url("bg2.jpg");
          background-repeat: no-repeat;
          background-size: cover;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}

        table {
          border: 1px solid black;
        }

        table th {
          background-color: #d4e3e5;
          padding: 8px;
        }
  </style>

  <?php

    $servername = "10.20.20.90";
    $username = "root";
    $password = "root";
    $dbname = "emer";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM report";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {

            echo "<tr>";
            echo "<td>". $row['DATE']."</td>";
            echo"                     ";
            echo "<td>".$row['TIME']."</td>";
            echo"<td>". $row['DEPARTMENT']."</td>";
            echo "                   ";
            echo"<td>". $row['CODE']."</td>";
            echo "                    ";

            echo "</tr>";

        }
    } else {
        echo "0 results";
    }
    $conn->close();
 ?>

    </tbody>
  </table>
</html>
