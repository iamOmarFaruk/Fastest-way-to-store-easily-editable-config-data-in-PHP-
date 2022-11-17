<?php 
// include 'config.php';
$config = include 'config.php';
// check if the request is post request via script.js and fetch 
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
   // get the data from the request body
    $data = file_get_contents('php://input');
    // convert the data into an array
    $data = json_decode($data, true);
    // get the name and age from the array
    echo($data['name']);
    echo($data['age']);
    // update the config.php file
    $config['__name'] = $data['name'];
    $config['__age'] = $data['age'];
    file_put_contents('config.php', '<?php return ' . var_export($config, true) . ';');
    exit;
} else {
    die('Invalid request');
}