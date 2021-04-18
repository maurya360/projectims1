<?php
    $var = $_POST['product_id'];
   // echo $var;
        include 'include/db.php';
        //database show webpage
        $query = "SELECT * FROM addproduct where product_name= '$var' ";
        $result = $conn->query($query);
        $rows = array();
        $rate = "";
        while($row = $result->fetch_assoc())
        {
            $rows[] = $row;
            // $rate = $row['price']

        }
        print json_encode($rows);
        // echo $rate;
                
?>