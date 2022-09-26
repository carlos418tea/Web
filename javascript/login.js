
function login(){
    var objHttp = null;
    if(window.XMLHttpRequest){
        objHttp = new XMLHttpRequest();
    }else if (window.ActiveXObject){
        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    objHttp.open("GET", "http://localhost/TFphp/login.php", true);
    objHttp.onreadystatechange = function(){
        if(objHttp.readyState == 4){
            document.getElementById('login_Control').innerHTML = objHttp.responseText;
        }
    }
    objHttp.send(null);
}

//*popUp registro*//
$(document).ready(function(){
    $("#open").on("click", function(){
        $("#popup").fadeIn("slow");
    });
    $("#close").on("click", function(){
        $("#popup").fadeOut("slow");
    });
});