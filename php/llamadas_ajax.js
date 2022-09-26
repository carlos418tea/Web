

// Carga controladora.php de administradores con Ajax
function control_admin() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("controladora_admin").innerHTML = this.responseText;
    }
    xhttp.open("GET", "controladora.php", true);
    xhttp.send();

    $(document).ready(function(){
        
        //Cerrrar controladora
        $("#cerrar_controladora").click(function(){
            $("#controladora_admin").slideUp();
        });

        //Desbloquear inputs administradores
        $("#abrir_inputs").click(function(){
            $("input").removeAttr("disabled", false);
        });

    });

}

// Para hacer nueva reserva y cargarla a la base de datos con guardar_citas.php
function add_cita(){
    var reser_fecha = document.getElementById("reser_fecha").value;
    var reser_hora =$('#reser_hora').val();
    var reser_id = $("input#reser_id").val();

    $.ajax({
        type: "POST",
        url: "guardar_citas.php",
        data:{
            reser_fecha,
            reser_hora,
            reser_id
        },

    }).done(
        function(resp){
            alert(resp);
        }
    );
}

// Mirar citas reservadas.

function mirar_citas(){
    var reser_id = $("input#reser_id").val();

    $.ajax({
        type: "POST",
        url: "mirar_citas.php",
        data:{
            reser_id
        },
    }).done(
        function(resp){
            //alert(resp);
            $('#mostrador_citas').html(resp);
        }
    );
}

