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

    <!-- Apartado Noticias ZDnet -->
    <script type="text/javascript" src="javascript/cargaNoticias.js"></script>

    <!-- Navegador del menú-->
    <script type="text/javascript" src="javascript/navMenu.js"></script>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Validar usuario disponible -->
    <script type="text/javascript" src="php/validar_user.js"></script>
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/Index.css">

    <!--Tipografias-->
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    
    <!-- Librería de Iconos y color -->
    <link rel='stylesheet' href='iconos/style.css'><!--Iconos-->
    <link rel='stylesheet' href='iconos/iconos.css'><!--Color y tamaño de iconos-->

    <!-- Estilos Mapa Alternativo -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <!-- Css Leaf -->
    <link rel="stylesheet" href="leaflet/dist/leaflet-routing-machine.css"/>

    <!-- API AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 
    
    <!--Login-->
    <script type="text/javascript" src="javascript/login.js"></script>
    <!--Noticias XML Znet-->
    <script type="text/javascript" src="javascript/este2.js"></script>
    <!--Cuando se cargue la web, carga login y noticias-->
    <script type="text/javascript" src="javascript/WebCargada.js"></script>

    <!--JS presupuesto-->
    <script type="text/javascript" src="javascript/presupuesto.js"></script>

    <title>Nuevo proyecto</title>

</head>

    
    <body>
        <!--Nombre de empresa y logo-------------------------------------------->
        <div class="Dh1">
            <div class="nombre_empresa">
                <h1>Nombre Empresa</h1>
                <div class='Dlogo'>
                    <img src='imagenes/logo1.png' class="Logo"> 
                </div>
            </div>
        </div>

        <!--Login---------------------------------------------------------------->
        <div class="login_Control" id="login_Control"></div>
            
        <!--Menú lateral Izq.---------------------------------------------------->
        <div class="Dmenu">
                <div class="Dinicio" onclick="load('Inicio')">
                    <span class="icon-home">
                        <label class="Tipo_Letra">Inicio</label>
                    </span>
                </div>
            </a>
            <div class="cajaEnlace" onclick="load('Portfolio')">
                <div class="Dportfolio" >
                    <span class="icon-image">
                        <label class="Tipo_Letra">Portfolio</label>
                    </span>
                </div>
            </div>
            <div class="cajaEnlace" onclick="load('contacto')">
                <div class="Dcontacto">
                    <span class="icon-address-book">
                        <label class="Tipo_Letra">Contacto</label>
                    </span>
                </div>
            </div>
            <div class="cajaEnlace" onclick="load('presupuesto')">
                <div class="Dpresupuesto">
                    <span class="icon-file-text">
                        <label class="Tipo_Letra">Presupuesto</label>
                    </span>
                </div>
            </div>
        </div>

        <!--Datos exportados por Ajax------------------------------------------------->
        <div class="exportados">
            <!--Carga de documentos HTML con Ajax-->
            <div class="htmls" id="htmls"></div>

            <!--Noticias ZDnet-->
            <div class="rss" id="texto"></div>
            
        </div>

        <!--FOOTER--------------------------------------------------------------------->
        <footer>
            <div class="contenedorFooters">
                <div class="contenedorFooter">
                    <div class="Columna1">
                        <h4>Información de la compañia.</h4>
                        <p class='nop'>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Eveniet omnis
                            neque rem dolorem repellat sunt cum,
                            veritatis fugiat aliquam nostrum, 
                            sed earum itaque labore ipsum,
                            corporis cumque accusamus modi 
                            officia.
                        </p>
                    </div>
                    <div class="Columna2">
                        <h4>Redes Sociales.</h4>

                        <span class="icon-twitter">
                            <a href="#" class="enlace">Síguenos en Twitter</a>
                        </span>
                        <br/>
                        <span class="icon-facebook">
                            <a href="#" class="enlace">Síguenos en Twitter</a>
                        </span>
                        <br/>
                        <span class="icon-instagram">
                            <a href="#" class="enlace">Síguenos en Twitter</a>
                        </span>
                    </div>
                    <div class="Columna3">
                        <h4>Contacto.</h4>
                        <span class="icon-home2">
                            <label class='nop'>C/La Calle,N00, Madrid.</label>
                        </span>
                        <br/>
                        <span class="icon-phone">
                            <label class='nop'>Número:XXX XX XX XX</label>
                        </span>
                        <br/>
                        <span class="icon-mail">
                            <label class='nop'>correo@correo.com</label>
                        </span>
                    </div>
                </div>
            </div>
            <!--Derechos reservados-->
            <div class="Columna4">
                <div class="padding">
                    <a class="derechos">Todos los derechos reservados 2020. |</a>
                    <a href="#" class="nop2">Más información.</a>
                </div>
            </div>

        </footer>

        <!--Portfolio-->
        <script type="text/javascript" src="javascript/ligthbox.js"></script><!--Ligthbox-->

        <!--Presupuesto-->
        <script type="text/javascript" src="javascript/presupuesto.js"></script><!--Calculo de presupuesto con descuento-->

        <!--Contacto-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/><!--Estilos Mapa Alternativo-->
        <link rel="stylesheet" href="leaflet/dist/leaflet-routing-machine.css"/><!--Css Leaf masterd-->
        <script type="text/javascript" src="javascript/mapa.js"></script><!--JS implementando Mapa-->

    </body>
</html>