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

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/Login.css">

        <title>Login</title>
    </head>

    <body> 
        <!-- Nombre y contraseña para login -->
        <form method="POST" action="php/comprobando_login.php">
            <a>Nombre:   </a>
            <input type="text" class="input_text" id="nombre_login" name="nombre" required></input>
            <br>
            <br>
            <a>Contraseña:   </a>
            <input type="password" class="input_text" id="passw_login" name="passw" required></input>

            <div class="Iniciar_Sesion">
                <input type="submit" class="boton_login" value="Iniciar Sesión">
            </div>
        </form>
            
        <!-- Botón de crear cuanta nueva -->
        <div class="caja_ini_crea">
            <div class="Crear_Cuenta"><button class="boton_nueva" id="open">Crear Cuenta</button></div>
        </div>

        <!-- Formulario de cuenta nueva -->
        <div id="popup" style="display: none;">
            <div><a href="#" id="close">X</a></div>
            <form action="php/archivador.php" method="POST" class="letras">
                <p>Nombre: 
                    <input type="text" id="nombre" name="nombre" size="40" required></p>
                    <span id="user"></span>
                <p>Contraseña: 
                    <input type="password" id="passw" name="passw" size="40" required></p>
                <p>E-mail: 
                    <input type="text" id="mail" name="mail" size="40" required></p>
                <p>Número de Teléfono: 
                    <input type="text" id="telefono" name="telefono" size="40" required></p>
                <p>Año de nacimiento: 
                    <input type="date" id="nacimiento" name="nacimiento" min="1900" required></p>
                <p>Nacionalidad: 
                    <input type="text" id="nacion" name="nacion" size="40" required></p>
                <p>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Borrar">
                </p>
            </form>
        </div>
    </body>
</html>