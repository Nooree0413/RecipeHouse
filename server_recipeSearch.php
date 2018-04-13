<?php
define('TABLE', 'recipe');
function db_connect(){
$dbname='localhost';                  
$username='root';
$password='';
$con = mysql_connect("localhost",$username,$password);
if (!$con)
  {
    echo "<br>big big problem!<br>";
    die('Could not connect: ' . mysql_error());
  }
else
{
mysql_select_db("recipehouse",$con);
}
}//end of function

function recipeSearch($category, $region, $recipeName,$yield,$ingredient){
    $pdo = db_connect();
    $queryCategory = '';
    $queryregion = '';
    $queryRecipeName = '';
    $queryYield='';
    $query = '';

   if($category != '')
        $queryCategory = "recipe_category = '$category'";
    if($query != '' && $queryCategory != '')
        $query .= " and $queryCategory";
    else if($queryCategory != '')
        $query = $queryCategory;

    if($region != '')
        $queryregion = "recipe_region = '$region'";
    if($query != '' && $queryregion != '')
        $query .= " and $queryregion";
    else if($queryregion != '')
        $query = $queryregion;

    if($recipeName != '')
        $queryRecipeName = "recipe_name = '$recipeName' ";
    if($query != '' && $queryRecipeName != '')
        $query .= " and $queryRecipeName";
    else if($queryRecipeName != '')
        $query = $queryRecipeName;

    if($yield != '')
        $queryYield = "recipe_yield = '$yield' ";
    if($query != '' && $queryYield != '')
        $query .= " and $queryYield";
    else if($queryYield != '')
        $query = $queryYield;

    $sql = "select * from recipe where $query";
    
    $ret = '';
    $result = mysql_query($sql);
    //foreach($pdo->query($sql) as $row){
    while($row=mysql_fetch_array($result)){
        $category = $row['recipe_category'];
        $region = $row['recipe_region'];
        $RecipeName = $row['recipe_name'];
        $yield=$row['recipe_yield'];
        $ingredient = $row['recipe_ingredients'];
        $ret .= "<tr><td>$category</td>";
        $ret .= "<td>$region</td>";
        $ret .= "<td>$RecipeName</td>";
         $ret .= "<td>$yield</td>";
          $ret .= "<td>$ingredient</td></tr>";
        
        
    }
    return $ret;
}//end of function


$server = new SoapServer(null,
array('uri' => "urn://tyler/res"));
$server->addFunction('recipeSearch');
$server->handle();
?>