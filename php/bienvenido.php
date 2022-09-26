<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Estilos css-->
        <link rel="stylesheet" href="../css/bienvenido.css">
        <!--Funciones de administradores-->
        <script type="text/javascript" src="func_admin.js"></script>
        <!-- Llamadas ajax -->
        <script type="text/javascript" src="llamadas_ajax.js"></script>
        <!--Tipografias-->
        <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>

        <title>Sesión iniciada</title>
    </head>
    <body>

        <div class="titulo_cabecera">
            <H1>Bienvenido <?php echo $nombre ?></H1>
        </div>
        
        <div class="controladora_clientes">

            <!-- Botón menú de administradores -->
            <div class="btns_ad_cls">
                <button id="indefinido" value="<?php echo($fila["rol"])?>" onclick=control_admin() class="btn_admin" >Admin</button>
                </br>
                <!-- salir a index -->
                <button onclick="location.href='salir.php'" class="btn_cerrar">Cerrar sesión</button>
            </div>
            

            <!-- Formulario que se puede modificar-->
            <div id="info_cliente" class="info_cliente">
                <form action="renombrar_datos.php" method="POST">
                    <p>id usuario: <input type="text" id="id_usuario" name="id_usuario"
                        value="<?php echo($fila["id_usuario"]);?>" disabled>
                    </p>
                    <p>Nombre: <input type="text" id="nombre" name="nombre"
                        value="<?php echo($fila["nombre"]);?>" disabled>
                    </p>
                    <p>Nacimiento: <input type="text" id="nacimiento" name="nacimiento"
                        value="<?php echo($fila["nacimiento"]);?>" disabled>
                    </p>
                    <p>Teléfono: <input type="text" id="telefono" name="telefono"
                        value="<?php echo($fila["telefono"]);?>" disabled>
                    </p>
                    <p>Nacionalidad: <input type="text" id="nacion" name="nacion"
                        value="<?php echo($fila["nacion"]);?>"disabled>
                    </p>
                    <button type="button" id="abrir_inputs_cliente" class="botoneras">Abrir Inputs</button>
                    <button type="submit" id="submit" class="botoneras">Cambiar información</button>
                </form>
            </div>
        
            <!-- Campo de citas pendientes -->

            <div id="citas" name="citas" class="citas">
                <form name="contact" action="">
                    <h2> Reservar una cita:</h2>
                    <p>Número de cliente: <input type="text" id="reser_id" name="reser_id" value="<?php echo($fila['id_usuario']);?>"></p>
                    <p>Fecha de cita: <input type="date" id="reser_fecha" name="reser_fecha"></p>
                    <p>Hora de cita: <input type="text" id="reser_hora" name="reser_hora" value="00:00"></p>
                    <button type="button" id="submit_cita" onclick=add_cita() class="botoneras">Reservar Cita</button>
                    <button type="button" id="buscar_citas" onclick= mirar_citas() class="botoneras">Citas pendientes</button>
                </form>   
            </div>

            <div class="reser_citas">
                <div id="mostrador_citas"></div>
            </div>

            <!-- Controladora de administradores -->
            <div id="controladora_admin" class="controladora_admin"></div>
        </div>
           


            
        

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>

            $(document).ready(function(){

                //Verifica si eres Administrador.
                var valor= $("#indefinido").val();
                var admin= "admin";
                console.log($("#indefinido").val())
                $("#indefinido").click(function(){
                    
                    if (valor == admin){
                        //Abrir controladora.
                        $("#controladora_admin").slideDown();
                    }else{
                        alert("No tienes permisos de Administrador");
                    }
                });

                //Desbloquear inputs clientes.
                $("#abrir_inputs_cliente").click(function(){
                    $("#nombre, #nacimiento, #telefono, #nacion").removeAttr("disabled", false);
                });
                // Para abrir el id_cliente para mandarlo con el submit.
                $("#submit").click(function(){
                    $("#id_usuario").removeAttr("disabled", false);
                });
            
                               
            });

        </script>

    </body>
</html>

