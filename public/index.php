<?php
session_start();

use App\controller\UserController;
use App\model\AutoloaderModel;


require '../model/AutoloaderModel.php';

require '../controller/UserController.php';

AutoloaderModel::register();

// var_dump($_POST);
// die();
// echo $_SESSION["LOGGED_USER"];

if (!isset($_SESSION["LOGGED_USER"])) {
    if (isset($_POST["email"])) {

        $user_controller_create = new UserController();
        $response = $user_controller_create->validateDataRegister($_POST);
        if ($response == "ok") {
            $user_controller_redirect = new UserController();
            //header('Location: http://localhost:8080/view/loginFormView.php');
            $user_controller_redirect->redirectToRoute("loginFormView");
        } else {
            require '../view/registerFormView.php';
        }

    }
    if (isset($_POST["email-login"])) {
        $user_controller_create = new UserController();

        $response = $user_controller_create->validateDataConnection($_POST);
        if (!is_string($response) || !is_bool($response)) {
            $user_controller_redirect = new UserController();
            $_SESSION["LOGGED_USER"] = $response;
            $user_controller_redirect->redirectToRoute("homeView");
        } else {
            require '../view/loginFormView.php';
        }
    }

    if (!isset($_POST["email-login"]) && !isset($response)) {
        require '../view/registerFormView.php';
    }
} else {
    if (isset($_POST["logout"])) {
        session_destroy();
        header('Location: ../view/loginFormView.php');
    }

    if (isset($_POST["see-profil"])) {
        header('Location: ../view/profilView.php');
    }

    if (isset($_POST["see-home"])) {
        
        header('Location: ../view/homeView.php');
    }
    
    if (isset($_GET["get"]) && $_GET["get"] == "all"||isset($_GET["city"])) {
        $user_controller_get = new UserController();

        if (isset($_GET["city"])) {
            // echo $_POST["city"];
            // die();
            // require_once '../view/homeView.php';

            $city="Paris";
            $min=18;
            $max=60;
            if (isset($_GET["city"])){
                $city = $_GET["city"];
            }

            if(isset($_GET["age-min"])){
                $min=$_GET["age-min"];
            }

            if (isset($_GET["age-max"])) {
                $max = $_GET["age-max"];
            }
            

            require_once('../view/header.php');

            // if (isset($_POST["city"]) || isset($_POST["age-min"]) || isset($_POST["age-max"]) || isset($_POST)) {
                $user_controller_get->getAllProfiles($city, $min, $max, $_GET);

            require_once('../view/footer.php');

            // }
        } else {
            // require '../view/homeView.php';
            $user_controller_get->getAllProfiles();
        }
    }

}

?>