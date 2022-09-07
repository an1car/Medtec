<?php
include_once "../class/Consulta.php";
if (isset($_GET["id"])) {
    $CodConsulta=$_GET["id"];
    $marcar = Consulta::Marcar($CodConsulta);
    header('Location: joaobarbosa.php '); 
  }
?>