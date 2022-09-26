<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Controladora para administradores</title>

        <!--Funciones de administradores-->
        <script type="text/javascript" src="func_admin.js"></script>
        
    </head>
    <body>
        <h2>Controladora</h2>
        <div>
            <button id="abrir_inputs" class="botoneras">Abrir Inputs</button>
            <button id="cerrar_controladora" class="botoneras">Cerrar</button>

            <p>Busca los clientes en la BD por su id:</p>

                <input type="number" id="busca_id" name="busca_id">
                <button type="button" onclick=buscar_xid() class="botoneras">Buscar...</button>

        </div>    
    </body>
</html>