if (window.XMLHttpRequest){
    var xmlhttp = new XMLHttpRequest();
}

else {
    var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.open("GET","recipes.xml",false);
xmlhttp.send();
var xmlDoc = xmlhttp.responseXML;

xmlDoc = xmlDoc.getElementsByTagName("RecipeDetails");
console.log(xmlDoc);

var recipedetails = "<table><tr><th>Recipe Id</th><th>Recipe Name</th><th>Recipe Category</th><th>Recipe Yield</th><th>Recipe Preparation Time</th></tr>";

for (var i=0;i<xmlDoc.length;i++)
{
    recipedetails += "<tr>";
    recipedetails += "<td>" + xmlDoc[i].getElementsByTagName("Id")[0].childNodes[0].nodeValue + "</td>";
    recipedetails += "<td>" + xmlDoc[i].getElementsByTagName("Name")[0].childNodes[0].nodeValue + "</td>";
    recipedetails += "<td>" + xmlDoc[i].getElementsByTagName("Category")[0].childNodes[0].nodeValue + "</td>";
    recipedetails += "<td>" + xmlDoc[i].getElementsByTagName("Yield")[0].childNodes[0].nodeValue + "</td>";
    recipedetails += "<td>" + xmlDoc[i].getElementsByTagName("PreparationTime")[0].childNodes[0].nodeValue + "</td>";
    recipedetails += "</tr>";
}

recipedetails += "</table>"
document.getElementById("adminTask_recipeTableContent").innerHTML = recipedetails;