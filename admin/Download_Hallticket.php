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


$id = $_POST['id'];
$sem = $_POST['sem'];

$sql="SELECT s.id,s.name,RIGHT(s.sem,3) AS semister,d.sub1,d.sub2,d.sub3,d.sub4,d.sub5 FROM departments AS d
INNER JOIN Clg_Register AS s 
ON d.semister=s.sem
WHERE s.id='$id' AND d.semister='$sem'";

$result=mysqli_query($conn,$sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "
        <center><div style='background-color:pink; border:solid 1px black;'>
                                        ANURAG UNIVERSITY                               
                                         SEMISTER EXAMS                              
        Hallticket Number : " .$row['id']."                  "."NAME : ".$row['name']."
        SEMISTER          : " .$row['sem']."                 "."BRANCH :".$row['branch']."</br>
                                            SUBJECTS</br>
                                            ".$row['sub1']."
                                            ".$row['sub2']."
                                            ".$row['sub3']."
                                            ".$row['sub4']."
                                            ".$row['sub5']."
        </div></center>";
        
    }    
    else{
        echo "<center><h3>DETAILS LOADING FAILED...</h3></center>";
    }
    echo "<center><h1>@ALL THE BEST 👍.</h1></center>";
mysqli_close($conn);
?>