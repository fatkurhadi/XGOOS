<?php

    $apiKey      = "a516f0d38f598a4fd9d2707c8d9e3923";
    $apiUrl      = "https://white.qrd.by/api";
    $action      = "short";
    $url         = "http://example.com";
    $vanityurl   = "mycode";

    $jsonurl     = "$apiUrl/$action?key=$apiKey&url=$url&vanityurl=$vanityurl";
    $json        = file_get_contents($jsonurl, 0, null, null);
    $json_output = json_decode($json);

    print_r($json_output);

?>