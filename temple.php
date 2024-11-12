<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $a1 = $_POST['tname'];
    $a2 = $_POST['tlocation'];
    $a3 = $_POST['pin'];
    $a4 = $_POST['tcity'];
    $a5 = $_POST['tstate'];

    $sql = "insert into temples(tname,location,pincode,city,state) values('$a1','$a2',$a3,'$a4','$a5')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "record inserted ";
    } else {
        echo "not inserted";
    }

} catch (mysqliexception $e) {
    echo "connection failed" . $e->getmessage();
}
?>