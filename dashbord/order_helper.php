<?php

        include 'include/db.php';
        //database show webpage
        $query = "SELECT * FROM addproduct";
        $result = $conn->query($query);
        $rows = array();
        while($row = $result->fetch_assoc())
        {
            $rows[] = $row;
        }
        print json_encode($rows);
                
?>