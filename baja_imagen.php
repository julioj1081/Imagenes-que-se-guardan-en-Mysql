<?php
include "conn.php";

$sql = "SELECT * FROM imagenes WHERE id=8";

if($r = mysqli_query($conn,$sql)){
  $d = mysqli_fetch_assoc($r);
  $imagen = $d["imagen"];
  $nombre = $d["nombre"];
  $archivo = $nombre."jpg";
  file_put_contents($archivo, $imagen);
  echo "<h2>se ha bajado la imagen </h2><br>";
  echo "<p>C:\AppServ\www\UDEMY\subir_imagenes_a_SQL</p>";
}
 ?>
