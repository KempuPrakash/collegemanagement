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
    $class = $_POST['class'];
    $hallticket = $_POST['hallticket'];
    $phone = $_POST['phone'];

    $sql="INSERT INTO idcard(name,class,hallticket,phone)values('$name','$class','$hallticket','$phone')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error:".mysqli_error($conn);
        exit;
    }
     echo  "<center><h1 style="background-color:#ff00ff";>***SUCCESSFULLY Appplied Your IdCard***</h1></center>";
    mysqli_close($conn);
?>