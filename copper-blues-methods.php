<?php

function getLocation() {
    $request = parse_url($_SERVER['REQUEST_URI']);
    $path = $request["path"];
    $substring = rtrim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/'); 
    $locationName = substr($substring, strpos($substring, "/") + 1);	
    $locationName = strtok($locationName, '/');

    return $locationName;
}

?>