<!DOCTYPE <!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <h3>Enter values to calculate</h3>
        <form name="frm1" action="soapClient.php" method="get">
        Input Values:<input type="text" name="txt_ingredientName" value="fish"/>
        <input name="btn_submit" type="submit"/>
    </body>
</html>


<?php
    require_once "lib/nusoap.php";

    if (isset($_GET['txt_ingredientName'])){
        $ingredientName = $_GET['txt_ingredientName'];        
    }
    
    $url = "http://www.supermarketapi.com/API.asmx?WSDL";
    $client = new nusoap_client($url,true);

    $err = $client->getError();

    if($err){
        echo'<p><b>Error:'.$err.'</b></p>';
    }

    $args = array("parameters" => array("APIKEY"=> "0fe9105274", 
                    "ItemName"=> $ingredientName));

    $response = $client->call('SearchByProductName', $args); 
    
    $SearchByProductNameResultArray = $response["SearchByProductNameResult"];
    $productsArray = $SearchByProductNameResultArray["Product"];
    $itemArray = $productsArray[0];
    echo $itemName = $itemArray["Itemname"];
    echo $itemImageUrl = $itemArray["ItemImage"];
    


    echo "<br/>Response: " . print_r($response);
/*    
    echo '<h2>Request</h2>';
    echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
    echo '<h2>Response</h2>';
    echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';

    */
?>