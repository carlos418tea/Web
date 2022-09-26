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
        <link rel="stylesheet" type="text/css" href="css/contacto.css">

        <!--Tipografias-->
        <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>

        <title>Contacto</title>
    </head>

    <body>
        <h2>Contacto</h2>
        
        <!--Mapa-->
        <div class="posi-mapa">
            <div id="myMap" class="mapa"></div>
        </div>
        

        <!--Formulario de contacto-->
        <div class="form-posi">
            <form class="form">
                <div class="caja-form">
                    <label>Nombre:</label>
                    <input type="text" name="Correo" class="respuesta" required/>
                    <p></p>
                    <label>Apellidos:</label>
                    <input type="text" name="Apellidos" class="respuesta" required/>
                    <p></p>
                    <label>Tel:</label>
                    <input type="text" name="Tel" class="respuesta" required maxlength="9"/>
                    <p></p>
                    <label>Correo:</label>
                    <input type="text" name="Correo" class="respuesta" required/>
                    <p></p>
                    <label>Fecha:</label>
                    <input type="date" name="Fecha" class="respuesta" required/>
                    <p></p>
                    <label>Motivo:</label>
                    <p></p>
                    <textarea type="text" cols="50" rows="10"  name="Motivo" class="respuesta" required></textarea>
                    <p></p>
                    <input type="reset" value="Reset" class="boton">
                    <input type="submit" value="Enviar" class="boton">
                </div>
            </form>
        </div>
        
    </body>

</html>