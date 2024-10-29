<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Compra</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
        <h1>Confirmación de Compra</h1>
    </header>
    <section id="confirmacion-compra">
        <h2>¡Compra Realizada con Éxito!</h2>
        <p><strong>Nombre del comprador:</strong> <?php echo htmlspecialchars($_POST["nombre"]); ?></p>
        <p><strong>Fecha del Concierto:</strong> <?php echo htmlspecialchars($_POST["fecha"]); ?></p>
        <p><strong>Concierto seleccionado:</strong> <?php echo htmlspecialchars($_POST["lugar"]); ?></p>
        <p><strong>Cantidad de entradas:</strong> <?php echo htmlspecialchars($_POST["cantidad"]); ?></p>
        <p><strong>Método de pago:</strong> <?php echo htmlspecialchars($_POST["pago"]); ?></p>
    </section>
    <footer>
        <p>&copy; 2024 AC<span class="ray">&#9889</span>DC. Todos los derechos reservados</p>
        <p>3wschools: <a href="https://www.w3schools.com/html/default.asp" target="_blank">HTML tags</a> | <a
                href="https://www.w3schools.com/css/default.asp" target="_blank">CSS tags</a> | <a
                href="https://www.w3schools.com/css/css3_variables.asp" target="_blank">Paleta de colores</a> | <a
                href="https://www.w3schools.com/html/html_table_styling.asp" target="_blank">Hoverable Table</a></p>
                <p>Efectos: <a href="https://codepen.io/nxworld/pen/ZYNOBZ" target="_blank">Brillo imagen</a> | Wikipedia: <a href="https://es.wikipedia.org/wiki/AC/DC" target="_blank">Descripción del Grupo</a>
            <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">
                <img alt="CC BY-SA 4.0" src="https://licensebuttons.net/l/by-sa/4.0/80x15.png" />
            </a>
        </p>
    </footer>
</body>
</html>
