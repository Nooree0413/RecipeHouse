if (window.XMLHttpRequest){
        var xmlhttp = new XMLHttpRequest();
    }

else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readystate == 4 && xmlhttp.status == 200)
    {
        retrieveUserData(xmlhttp);
    }
}

xmlhttp.open("GET","xml/users.xml",false);
xmlhttp.send();

function retrieveUserData (){
    var xmlDoc = xmlhttp.responseXML;
}