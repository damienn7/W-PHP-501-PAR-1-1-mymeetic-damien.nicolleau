<?php
session_start();

use App\controller\UserController;
use App\model\AutoloaderModel;
use App\model\DatabaseModel;

require '../model/AutoloaderModel.php';

require '../controller/UserController.php';

require '../view/registerFormView.php';

require '../view/loginFormView.php';

require '../view/homeView.php';

AutoloaderModel::register();

$database = new DatabaseModel();

// var_dump($database->pdo);

$db = $database->pdo;

$user_controller = new UserController();

$user_controller->validateData();

// try {
//     $statement = $db->prepare("show tables;");
//     $statement->execute();
//     $res = $statement->fetch();
// } catch (\Exception $e) {
//     die("erreur : " . $e->getMessage());
// }

// var_dump($res);
?>