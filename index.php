<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Yassin Charrouf Errynda</title>
</head>
<body>
    <!-- php no funciona -->
    <h1>Yassin Charrouf Errynda</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        echo date('H:i:s');
    ?>
    <div id="relojCliente"></div>
    <script src="./js/reloj.js"></script>
    <h2>Prueba para cambiar cosas desde el index</h2>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="1" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>