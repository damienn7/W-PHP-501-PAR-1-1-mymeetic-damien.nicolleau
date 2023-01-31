<?php
session_start();

use App\model\AutoloaderModel;
use App\model\DatabaseModel;

require '../model/AutoloaderModel.php';

AutoloaderModel::register();

$database = new DatabaseModel();

// var_dump($database->pdo);

$db = $database->pdo;

try {
    $statement = $db->prepare("show tables;");
    $statement->execute();
    $res = $statement->fetch();
} catch (\Exception $e) {
    die("erreur : " . $e->getMessage());
}

var_dump($res);
?>

<p>Hello World !</p>