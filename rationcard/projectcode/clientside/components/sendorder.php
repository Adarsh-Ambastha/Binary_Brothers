<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rationcard";

$conn = new mysqli($servername,
    $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_REQUEST['orderdata'];
    if (empty($data)) {
        echo "data is empty";
    }
}

$sqlquery1 = "INSERT INTO ordertable VALUES ('ORD001', 'SKU001', '101', '1')";
$sqlquery2 = "INSERT INTO ordertable VALUES ('ORD001', 'SKU006', '101', '1')";
$sqlquery3 = "INSERT INTO ordertable VALUES ('ORD001', 'SKU002', '101', '1')";
$sqlquery4 = "INSERT INTO ordertable VALUES ('ORD001', 'SKU003', '101', '1')";

$conn->query($sqlquery1);
$conn->query($sqlquery2);
$conn->query($sqlquery3);
$conn->query($sqlquery4);
 
$conn->close();

echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>";

?>