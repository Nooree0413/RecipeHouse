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

var userDetails = "No. of registered users: " + xmlDoc.length + "<br/><br/>";
userDetails += "<table><tr><th>Email Address</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th></tr>";

for (var i=0;i<xmlDoc.length;i++)
{
    userDetails += "<tr>";
    userDetails += "<td>" + xmlDoc[i].getElementsByTagName("email")[0].childNodes[0].nodeValue + "</td>";
    userDetails += "<td>" + xmlDoc[i].getElementsByTagName("firstName")[0].childNodes[0].nodeValue + "</td>";
    userDetails += "<td>" + xmlDoc[i].getElementsByTagName("lastName")[0].childNodes[0].nodeValue + "</td>";
    userDetails += "<td>" + xmlDoc[i].getElementsByTagName("dob")[0].childNodes[0].nodeValue + "</td>";
    userDetails += "</tr>";
}

userDetails += "</table>"
document.getElementById("adminTask_userDetails").innerHTML = userDetails;