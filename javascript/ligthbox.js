var textos=[
    "Logo morado",
    "Logo negro",
    "Logo rojo",
    "Logo verde"
   ]
   
   
   function cargarfoto(img, txt){
   document.getElementById("galeria").src="imagenes/logo"+img+".png";
   document.getElementById("mitexto").innerHTML=textos[txt];
   }
   