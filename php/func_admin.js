//Buscar clientes por su id desde controladora Administradores.

    function buscar_xid(){
        var id_cliente = document.getElementById("busca_id").value;

        $.ajax({
            type: "POST",
            url: "busca_xid.php",
            dataType: 'JSON',
            data:{
                id_cliente
            },
            success: function (resp){
                var lent = resp.length;
                if (resp != ""){
                    for (var i=0; i<lent; i++){
                        var nombre = resp[i].nombre;
                        var telefono = resp[i].telefono;
                        var nacimiento = resp[i].nacimiento;
                        var nacion = resp[i].nacion;

                        //var todo = nombre;
                        
                        $("#nombre").val(nombre);
                        $("#telefono").val(telefono);
                        $("#nacimiento").val(nacimiento);
                        $("input#nacion").val(nacion);
                    }
                }
            },
            error: function () {
               alert("Este id no existe en la BD");
           }
        })
    }
