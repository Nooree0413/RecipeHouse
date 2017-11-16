if (window.XMLHttpRequest){
    var xmlhttp = new XMLHttpRequest();
}

else {
    var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.open("GET","xml/users.xml",false);
xmlhttp.send();
var xmlDoc = xmlhttp.responseXML;
    
xmlDoc = xmlDoc.getElementsByTagName("user");
console.log(xmlDoc);

for (var i=0;i<xmlDoc.length;i++)
{
    document.getElementById("userEmail").innerHTML = xmlDoc[i].getElementsByTagName("email")[0].childNodes[0].nodeValue;
}