<?php
    $db_hostname="localhost";
    $db_username="id22291809_prakash";
    $db_password="Prak@$#021";
    $db_name="id22291809_collegedata";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "connection failed:".mysqli_connect_error();
        exit;
    }


    $item = $_POST['item_name'];
    $price = $_POST['price'];
    $ordersno = $_POST['no_of_orders'];

    $sql1="INSERT INTO orders(item_name,price,no_of_orders)values('$item','$price','$ordersno')";

    
    $result1=mysqli_query($conn,$sql1);
    if(!$result1)
    {
        echo "Error:".mysqli_error($conn);
        exit;
    }
    echo "<center><h1>***YOUR ORDER PLACED SUCCESSFULLY***</h1></center>";

    $last_insert_id = mysqli_insert_id($conn);
    $sql2="SELECT * FROM orders where item_num='$last_insert_id'";

    $result2=mysqli_query($conn,$sql2);
    if(!$result2)
    {
        echo "Error:".mysqli_error($conn);
        exit;
    }

    
    
    $row = mysqli_fetch_assoc($result2);
    if ($row) {
        $price=$row['price'];
        $ordersno=$row['no_of_orders'];
        $totalprice=$price * $ordersno;
        echo "<center>
            <h3>Your Item Number: " . $row['item_num'] . "</h3>
            <h2>Your Item Name: " . $row['item_name'] . "</h2>
            <h3>Item Price: " . $row['price'] . "</h3>
            <h3>Total Orders: " . $row['no_of_orders'] . "</h3>
            <h2>Total Price: " . $totalprice . "</h2>
            </center>";
    }    
    else{
        echo "<center><h3>Login Failed</h3></center>";
    }
    mysqli_close($conn);
?>