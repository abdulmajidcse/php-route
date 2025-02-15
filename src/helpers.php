<?php

/**
 * All helper functions are defined here
 */

if (!function_exists('currentUri')) {
    // generate currentUri
    function currentUri(): string
    {
        // get request uri
        $queryString = !empty($_SERVER["QUERY_STRING"]) ? ('?' . $_SERVER["QUERY_STRING"]) : '?';
        $uri = str_replace($queryString, '', $_SERVER["REQUEST_URI"]);
        // get server script name
        $scriptName = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
        // remove script name from path as a uri
        $uri = str_replace($scriptName, '', $uri);

        return $uri;
    }
}
