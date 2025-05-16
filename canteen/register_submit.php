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


    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $number = $_POST['number'];
    $hallticket = $_POST['hallticket'];
    $date = $_POST['date'];

    $sql="INSERT INTO users(name,fname,number,hallticket,date)values('$name','$fname','$number','$hallticket','$date')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error:".mysqli_error($conn);
        exit;
    }
    echo "<center><h1>@Registration Sucess</h1></center>";
    mysqli_close($conn);
?>