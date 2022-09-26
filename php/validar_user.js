

$(document).ready(function(){
    $("#nombre").focusout(function(){
        var datos='nombre='+$("#nombre").val();
        var url="php/validar_form.php";
        var dataType="html";       
        $.ajax({
            type: "POST", 
            url: url,
            data: datos,

            success: function(data){
                if(data == 0){
                    $("#user").attr("id", "error_user");
                    $("#succes_user").attr("id", "error_user");
                    $('#error_user').html("El usuario ya existe");
                }
                else{
                    $("#user").attr("id", "succes_user");
                    $("#error_user").attr("id", "succes_user");
                    $('#succes_user').html("El nombre esta disponible");      
                }
            }
        });
    });
});
    