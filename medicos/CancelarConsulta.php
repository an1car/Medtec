<?php
include_once "../class/Consulta.php";
if (isset($_GET["id"])) {
    $CodConsulta=$_GET["id"];
    $cancelar = Consulta::CancelarConsulta($CodConsulta);
    echo "<script>alert('Consulta cancelada com Sucesso');</script>";
    header('Location: joaobarbosa.php '); 
  }
?>