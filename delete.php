<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM personas WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correcatamente";
    } else {
        echo "Error: " .$sql . "<br>" .$conn-> error;

    }

    $conn->close();

}
?>

<form method= "post" action="delete.php">
     id: <input type="text" name="id"><br>
     <input type="submit" value="eliminar">
</form>