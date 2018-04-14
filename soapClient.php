<?php
    require_once "lib/nusoap.php";
    
    /*
    if (isset($_GET['txt_ingredientName'])){
        $ingredientName = $_GET['txt_ingredientName'];        
    }
    */
    $url = "http://www.supermarketapi.com/API.asmx?WSDL";
    $client = new nusoap_client($url,true);

    $err = $client->getError();

    if($err){
        echo'<p><b>Error:'.$err.'</b></p>';
    }

    $args = array("parameters" => array("APIKEY"=> "0fe9105274", 
                    "ItemName"=> "tomato"));

    $response = $client->call('SearchByProductName', $args); 
    
    $SearchByProductNameResultArray = $response["SearchByProductNameResult"];
    $productsArray = $SearchByProductNameResultArray["Product"];
    $itemArray = $productsArray[0];
    $itemName = $itemArray["Itemname"];
    $itemImageUrl = $itemArray["ItemImage"];
    $itemCategory = $itemArray["ItemCategory"];

    // echo "<br/>Response: " . print_r($response);
/*    
    echo '<h2>Request</h2>';
    echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
    echo '<h2>Response</h2>';
    echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';

    */
?>