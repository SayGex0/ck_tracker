<?php
header("Access-Control-Allow-Origin: *");

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    $response = file_get_contents($url);

    if ($response !== false) {
        header('Content-Type: text/plain');
        echo $response;
    } else {
        http_response_code(500);
        echo 'Error fetching content';
    }
} else {
    http_response_code(400);
    echo 'Missing URL parameter';
}
?>
