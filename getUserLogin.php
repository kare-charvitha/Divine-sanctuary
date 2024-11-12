<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $email = $_POST['email_log'];
    $pass = md5($_POST['password_log']);
    $sql = "SELECT password,role FROM user where email='$email'";
    $data = array();
    $result = $conn->query(query: $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
            if ($pass === $row['password']) {
                $response = array(
                    "statusCode"=> 200,
                    "status" => "Logged in Successful",
                    "email" => $email,
                    "role" => $row['role']
                );
                echo json_encode($response);
            } else {
                $response = array(
                    "statusCode"=> 403,
                    "status" => "Invalid Password",
                    "email" => "$email",
                );
                echo json_encode($response);
            }
        }
       
    } else{
        $response = array(
            "statusCode"=> 404,
            "status" => "Invalid Email Id",
            "email" => "$email",
        );
        echo json_encode($response);
    }
    // $json_data = json_encode($data);
    // echo $json_data;
} catch (mysqliexception $e) {
    
}


// $data = array();



// $json_data = json_encode($data);

// // Output or use the JSON data
// echo $json_data;
?>