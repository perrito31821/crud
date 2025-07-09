<?php

include 'db.php';

$sql = "SELECT id, identificacion, nombre FROM personas";
$resul = $conn->query($sql);

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) { 
        echo "ID: " . $row["id"]. " - identificacion: " . 
        $row¨["identificacion"]
    }
}