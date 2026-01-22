<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index SOAP</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h1>Clientes SOAP disponibles</h1>

    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
        <button name="valor" value="sinWSDL" type="submit">Cliente SOAP sin WSDL</button>
        <button name="valor" value="conWSDL" type="submit">Cliente SOAP con WSDL</button>
        <button name="valor" value="conWSDLyClases" type="submit">Cliente SOAP con WSDL y Clases</button> <br><br>
        <button name="valor" formaction="public/generarWsdl.php" type="submit">Generar WSDL</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor'])) {
            switch ($_POST['valor']) {
                case 'sinWSDL':
                    header('Location: public/cliente.php');
                    break;
                case 'conWSDL':
                    header('Location: public/clienteW.php');
                    break;
                case 'conWSDLyClases':
                    header('Location: public/clienteW2.php');
                    break;

                case 'generarWSDL':
                    header('Location: public/generarWsdl.php');
            }

        }
    ?>
</body>
</html>
