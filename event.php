<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $a1 = $_POST['ename'];
    $a2 = $_POST['edate'];
    $a3 = $_POST['edura'];
    $a4 = $_POST['eloc'];
    $a5 = $_POST['ecity'];
    $a6 = $_POST['etname'];
    $a7 = $_POST['etime'];
    $a8 = $_POST['etext'];

    $sql = "insert into eventsnew(name,startingdate,duration,location,city,tname,timing,description) values('$a1','$a2',$a3,'$a4','$a5','$a6','$a7','$a8')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "record inserted ";
    } else {
        echo "not inserted";
    }

} catch (mysqliexception $e) {
    echo "connection failed" . $e->getmessage();
}
?>