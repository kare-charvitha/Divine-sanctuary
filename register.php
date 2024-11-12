<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $a1 = $_POST['name'];
    $a2 = $_POST['email'];
    $a3 = $_POST['mobile'];
    $a4 = $_POST['address'];
    $a5 = $_POST['password'];
    $a6 = $_POST['confirm'];
    $enc1 = md5(string: $a5);
    $enc2 = md5(string: $a6);

    $sql = "insert into user(name,email,mobile,address,password,confirm) values('$a1','$a2',$a3,'$a4','$enc1','$enc2')";
    if ($conn->query(query: $sql) === TRUE) {
        echo "record inserted ";
    } else {
        echo "not inserted";
    }

} catch (mysqliexception $e) {
    echo "connection failed" . $e->getmessage();
}
?>