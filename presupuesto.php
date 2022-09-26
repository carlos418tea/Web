<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" type="text/css" href="css/presupuesto.css">

        <title>Presupuesto</title>
    </head>

    <body>
        <h2>Presupuesto</h2>
        <form class="formDatos">
            <div class="datos">
                <h3>Tus datos!</h3>

                <label>Nombre:</label>
                <input type="text" name="Correo" class="respuesta" />
                <p></p>
                <label>Apellidos:</label>
                <input type="text" name="Apellidos" class="respuesta" />
                <p></p>
                <label>Tel:</label>
                <input type="text" name="Tel" class="respuesta"  maxlength="9"/>
                <p></p>
                <label>Correo:</label>
                <input type="text" name="Correo" class="respuesta" />
                </br></br>

                <div class="datos2">
                    <h3>Web!</h3>

                    <label>Tipo de pagina web:</label>
                    <form id='presupuesto'>
                        <select name="tipoWeb" required>
                            <option>Negocio</option>
                            <option>Informativo</option>
                            <option>Tienda Online</option>
                            <option>Páguina personal</option>
                            <option>Otros</option>
                        </select>

                        <p></p>
                        
                        <label>Plazo estimado en Meses:</label>
                        <input type="number" id="meses" onclick="this.value">
                        <p>Dependiendo del plazo puede tener hasta un 20% de descuento.</p>
                        
                        <h3>Selecciones deseadas:</h3>

                        <label>Quiénes Somos</label>
                        <input type="checkbox" id="quienes" name="checkbox">
                        <p></p>
                        <label>Donde Estamos</label>
                        <input type="checkbox" id="donde" name="checkbox">
                        <p></p>
                        <label>Galería de Fotos</label>
                        <input type="checkbox" id="galeria" name="checkbox">
                        <p></p>
                        <label>eComerce</label>
                        <input type="checkbox" id="eComerce" name="checkbox">
                        <p></p>
                        <label>Gestión Interna</label>
                        <input type="checkbox" id="gestion" name="checkbox">
                        <p></p>
                        <label>Noticias</label>
                        <input type="checkbox" id="noticias" name="checkbox">
                        <p></p>
                        <label>Facebook</label>
                        <input type="checkbox" id="facebook" name="checkbox">
                        <p></p>
                        <label>Twitter</label>
                        <input type="checkbox" id="twitter" name="checkbox">
                    </form>
                </div>

                <div class="datos3">
                    <h3>Presupuesto Estimado:</h3>
                    <input type="text" class="precioFinal" id="precio" onclick="this.value">
                    <p>(Recuerde que este presupuesto es estimado y esta sujeto a cambios).</p>

                    <input type="reset" class="boton" value="Borrar datos">
                    <p></p>
                    <input type="button" class="boton" id="calcular" value="Calcular Precio" onclick="calcu()">
                </div>
            </div>
        </form>
    </body>
</html>