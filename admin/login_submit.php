<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="auproject";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "connection failed:".mysqli_connect_error();
        exit;
    }


$id = $_POST['id'];
$dob = $_POST['dob'];

$sql="SELECT * FROM teachers where id='$id' and dob='$dob'";

$result=mysqli_query($conn,$sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "<center><h1>Your Details:-</h1></center>";
        echo "<center><h3>Your Id Card Number:</h3><h2>". $row['id']."<br/></h2></center>";
        echo "<center><h3>Your name:" . $row['name']."<br/></h3></center>";
        echo "<center><h3>Your role:". $row['roll']."<br/></h3></center>";
        echo "<center><h3>Your DOB:" .$row['dob']."<br/></h3></center>";
    }    
    else{
        echo "<center><h3>Login Failed</h3></center>";
    }
    echo "<center><h1>@Have a great Day.</h1></center>";
mysqli_close($conn);
?>