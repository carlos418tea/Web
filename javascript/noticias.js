if (window.XMLHttpRequest){
    objRequest = new XMLHttpRequest();
}else if ( window.ActiveXObject){
    objRequest = new ActiveXObject("Microsoft.XMLHTTP");
}

open(GET,www.zdnet.com/news/rss.xml,[])