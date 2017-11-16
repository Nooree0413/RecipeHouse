<?php
    require "connection.php";

    $userEmail = "";
    $userFirstName = "";
    $userLastName = "";
    $userDob = "";
    $userPassword = "";

    $userQuery = "SELECT * FROM register";
    $userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());

    $userXmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <users xsi:noNamespaceSchemaLocation='users.xsd' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'>";

    while ($row = mysql_fetch_array($userQueryResult))
    {
        $userEmail = $row['reg_email'];
        $userFirstName = $row['reg_fname'];
        $userLastName = $row['reg_lname'];
        $userDob = $row['reg_dob'];
        $userPassword = $row['reg_password'];

        $userXmlData .= 
        "<user>".
        "<email>".$userEmail ."</email>".
        "<firstName>".$userFirstName."</firstName>".
        "<lastName>".$userLastName."</lastName>".
        "<dob>".$userDob."</dob>".
        "<password>".$userPassword ."</password></user>";
    }

    $userXmlData .= "</users>";

    $userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
    $userXmlDataObject ->asXML("xml/users.xml");

    ?>