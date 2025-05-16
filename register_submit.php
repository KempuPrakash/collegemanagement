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


    $email = $_POST['email'];
    $contact = $_POST['contact'];
    

    $sql="INSERT INTO au_users(email,contact)values('$email','$contact')";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "<center><h2>@Your Email has been already Registered.</br>Kindly choose Another Email Id.</h2></center>";
        echo "Error:".mysqli_error($conn);
        exit;
    }
     echo  "<center><h1>***SUCCESSFULLY REGESTRIED INTO ANURAG UNIVERSITY***</h1></center>";
    mysqli_close($conn);
?>