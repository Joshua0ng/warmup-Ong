<h3> PHP PDO Database Connecting to MYsqli PHPMYADMIN</h3>

<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'phppdodb';

try{
    $dbcn = 'mysql:host='.$host.'; dbname='.$dbname;
    $pdodbcon = new PDO($dbcn,$user,$password);
    
    $pdodbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    '<h1>Database Connected</h1>';
}
catch(PDOException $error){
    $error->getMessage();
    echo '<h1>Database Failed to Connect</h1>';

}

?>