function cargarCatalogo(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            mostrar(this);
        }
    };
    xhttp.open("GET", "http://localhost/Carlos/javascript/noticias.xml", true);
    xhttp.send();

    function mostrar(xml){
        var nombre, i, objhttp, cadena;
        objhttp = xml.responseXML;
        cadena = "";
        title = objhttp.getElementsByTagName('title');
        link = objhttp.getElementsByTagName('link');


        for (i = 0; i < title.length; i++){
            cadena += "<h3>" + title[i].childNodes[0].nodeValue + "</h3><br/>";
            cadena += "<a href=" + link[i].childNodes[0].nodeValue + " class='nop' </a><br/>";
            
        } 
        document.getElementById('texto').innerHTML = cadena;
    }
}
