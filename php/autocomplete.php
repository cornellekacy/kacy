<?php
    $connection = mysqli_connect("localhost","root","cornellekacy","school") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select firstname from student";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['firstname'];
    }
    echo json_encode($dname_list);
?>