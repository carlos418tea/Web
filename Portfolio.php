<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripttion" content="Web">
        <meta name="robots" content="NOFOLLOW">
        <meta name="Author" content="Carlos Caro">
        <meta name="lang" content="es">
        <meta name="revised-after" content="2 days">
        <meta name="category" content="CV">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/Portfolio.css">

        <title>Portfolio</title>
    </head>

    <body>
        <h2>Portfolio</h2>

        <div class="contenedor">
            <img id="galeria" src="imagenes/logo1.png" alt="" class="foto_principal">
            <p id="mitexto">Logo principal</p>

            <nav>
                <ul>
                    <li><a onclick="cargarfoto(2,0)"><img src="imagenes/logo2.png" alt="" class="img"></a></li>
                    <li><a onclick="cargarfoto(3,1)"><img src="imagenes/logo3.png" alt="" class="img"></a></li>
                    <li><a onclick="cargarfoto(4,2)"><img src="imagenes/logo4.png" alt="" class="img"></a></li>
                    <li><a onclick="cargarfoto(5,3)"><img src="imagenes/logo5.png" alt="" class="img"></a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>