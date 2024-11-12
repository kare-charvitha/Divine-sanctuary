<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";


    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM temples"; // Replace with your table and columns
    $result = $conn->query(query: $sql);
    
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $json_data = json_encode($data);

    // Output or use the JSON data
    echo $json_data;
?>