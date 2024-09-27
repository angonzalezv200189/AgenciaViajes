<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $origen = htmlspecialchars($_POST['origen']);
    $destino = htmlspecialchars($_POST['destino']);
    $fecha = htmlspecialchars($_POST['fecha']);

    // Aquí agregaríamos una consulta a la base de datos para buscar vuelos
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "Origen: $origen<br>";
    echo "Destino: $destino<br>";
    echo "Fecha: $fecha<br>";

    // Este es un comentario de prueba en PHP
    
    // Supongamos que la consulta a la base de datos devuelve resultados de vuelos
    echo "<p>Vuelo disponible: $origen a $destino el $fecha</p>";
}
?>
