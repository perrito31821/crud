<?php

include "db.php"

if($_SERVER["REQUEST_METHOD]=="POST"){

$id=$_POST["id"];
$identificacion=$_POST["identificacion"];
$nombres=$_POST["nombres"];

$sql="UPDATE personas SET identificacion="$identificacion", nombres="$nombres"WHERE id=$id";

if($conn->query($sql)===TRUE){

  echo"Registro actualizado exitosamente";
}else{
echo"Error: ".$sql."<br>".$conn->error;
}
$conn->close();
}
?>