<!DOCTYPE html>
<head>
	  <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #00cca3;
        color: white;
    }
    </style>
</head>
<?php
$client_recipeSearch = new SoapClient(null, array(
'location' => "http://localhost/RecipeHouse1/server_recipeSearch.php",
'uri' => "urn://tyler/req"));


$result_recipeSearch = $client_recipeSearch->
__soapCall("recipeSearch",array($category,$region,$recipeName,$yield,$ingredient));



if($result_recipeSearch != ''){
 //making responsive table
 echo "<div style='overflow-x:auto;'>";
 print "<table border='3'>";
 print"<tr><td><b>Category</b></td><td><b>Region</b></td>";
 print "<td><b>Recipe Name</b></td><td><b>Yield</b></td><td><b>Ingreddients</b></td></tr>";


 print $result_recipeSearch;
 
 print "</table>";
 echo"</div>";
}
?>
</!DOCTYPE html>

</html>