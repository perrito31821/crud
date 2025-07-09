<?php

include 'db.php';

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $identificacion = $_POST['identificacion'];

    $nombres = $_POST['nombres'];

    $sql = "INSERT INTO personas (identificacion, nombres) VALUES ('$identificacion', '$nombres')";

    if ($conn->query($sql)=== TRUE) {

        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " .$sql ."<br>" .$conn->error;
    }

    $conn->close();

}
?>

<form method="post" action= "create.php">

identificacion: <input type="text" name="identificacion"><br>
nombres: <input type="text" name="nombres"><br>
<input type="submit" value="crear">

</form>
 