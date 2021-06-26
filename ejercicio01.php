<?php
$organismos=array(
    "ONPE" => "Oficina Nacional de Procesos Electorales",
    "RENIEC" => "Registro Nacional de Identificación y Estado Civil",
    "BCR" => "Banco Central de Reserva del Perú",
    "SAT" => "Servicio de Administración Tributaria",
    "JNE" => "Jurado Nacional de Elecciones"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Organismos del Estado</h2>
<table border="1">
    <tr>
        <th>Abreviaturas</th>
        <th>Descripcion</th>
    </tr>
    <?php
        foreach($organismos as $clave => $valor){
            echo "<tr>";
            echo "<td>$clave</td><td>$valor</td>";
            echo "</tr>";
        }
    ?>

</table>
</body>
</html>

