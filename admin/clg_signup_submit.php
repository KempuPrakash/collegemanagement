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
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];

    $sql="INSERT INTO teachers(id,name,roll,dept,dob)values('$id','$name','$roll','$dept','$dob')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error:".mysqli_error($conn);
        exit;
    }
     echo  "<center><h1>***SUCCESSFULLY REGESTRIED INTO ANURAG UNIVERSITY***</h1></center>";
    mysqli_close($conn);
?>