<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP and MYSQL </title>
</head>
<body>

<?php

//inisialize the variable
$servername = "localhost";
$username = "root";
$password = "";
$db="robotcontrolpanel";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
echo "Connected successfully";}

//write a query
if(isset($_POST['Forward'])){

    $query="SELECT * FROM basecontrol WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO controller (forward) VALUES ('forward')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "item added ";
    }else{
        echo"error";
    }



}

if(isset($_POST['Backward'])){

    $query="SELECT * FROM basecontrol WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO controller (backward) VALUES ('backward')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "item added ";
    }else{
        echo"error";
    }



}

if(isset($_POST['Left'])){

    $query="SELECT * FROM basecontrol WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO controller (left) VALUES ('left')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "item added ";
    }else{
        echo"error";
    }



}

if(isset($_POST['Right'])){

    $query="SELECT * FROM basecontrol WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO controller (right) VALUES ('right')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "item added ";
    }else{
        echo"error";
    }



}

if(isset($_POST['Stop'])){

    $query="SELECT * FROM basecontrol WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO controller (stop) VALUES ('stop')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "item added ";
    }else{
        echo"error";
    }



}


$conn->close();

?>

</body>
</html>
