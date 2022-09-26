
function calcu(){
    var cont = 0;
    var mes = document.getElementById("meses").value;

    // Tipo de descuentos dependiendo del mes.
    if (mes == 1){
            var descuento = 5 / 100;
        }else if (mes == 2){
            var descuento = 10 / 100; 
        }else if (mes == 3){
            var descuento = 15 /100;
        }else if (mes >= 4){
            var descuento = 20 / 100;    
        }else if(mes == 0){
            var descuento = 0;
            alert("Sin plazo estimado?")
        }

    // Precio de las diferentes características de la web.
    if (document.getElementById("quienes").checked){
            cont = cont + 100;
        }
    if (document.getElementById("donde").checked){
        cont = cont + 100;
        }
    if (document.getElementById("galeria").checked){
        cont = cont + 300;
        }
    if (document.getElementById("eComerce").checked){
        cont = cont + 400;
        }
    if (document.getElementById("gestion").checked){
        cont = cont + 200;
        }
    if (document.getElementById("noticias").checked){
        cont = cont + 150;
        }
    if (document.getElementById("facebook").checked){
        cont = cont + 50;
        }
    if (document.getElementById("twitter").checked){
        cont = cont + 50;
        }

    descuento *= cont;
    total = cont - descuento;
    document.getElementById("precio").value = total;
}