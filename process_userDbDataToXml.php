<?php
    require "connection.php";

    $userEmail = "";
    $userFirstName = "";
    $userLastName = "";
    $userDob = "";
    $userPassword = "";

    $userQuery = "SELECT * FROM register";
    $userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());
