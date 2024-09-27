<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vuelos</title>
</head>
<body>
    <h1>Buscar Vuelos</h1>
    <form method="POST" action="buscar_vuelos.php">
        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen" placeholder="Ingrese el origen" required>

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" placeholder="Ingrese el destino" required>

        <label for="fecha">Fecha de Viaje:</label>
        <input type="date" id="fecha" name="fecha" required>

        <button type="submit">Buscar</button>
    </form>
</body>
</html>
