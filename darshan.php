<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    $a1 = 'D_ID-' . time();
    $a2= $_POST['darshan_uname'];
    $a3 = $_POST['darshan_date'];
    $a4 = htmlspecialchars($_POST['darshan_temple']);

    $sql = "insert into darshan(d_id,uname,date,tid) values('$a1','$a2','$a3',$a4)";

    if ($conn->query(query: $sql) === TRUE) {
        echo "record inserted ";
    } else {
        echo "not inserted";
    }

} catch (mysqliexception $e) {
    echo "connection failed" . $e->getmessage();
}
?>