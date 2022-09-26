
function load(menu){
    var objHttp = null;
    if(window.XMLHttpRequest){
        objHttp = new XMLHttpRequest();
    }else if (window.ActiveXObject){
        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    objHttp.open("GET", "http://localhost/TFphp/"+ menu + ".php", true);
    objHttp.onreadystatechange = function(){
        if(objHttp.readyState == 4){
            document.getElementById('htmls').innerHTML = objHttp.responseText;
        }
    }
    objHttp.send(null);
}