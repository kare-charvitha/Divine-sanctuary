<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $a1 = $_POST['duname'];
    $a3 = $_POST['damt'];
    $a5 = htmlspecialchars($_POST['dtname']);
    $a4 = 'TID-' . time();
    $sql = "insert into donation(tid,uname,amount,trasactionid) values($a5,'$a1',$a3,'$a4')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "record inserted ";
    } else {
        echo "not inserted";
    }

} catch (mysqliexception $e) {
    echo "connection failed" . $e->getmessage();
}
?>