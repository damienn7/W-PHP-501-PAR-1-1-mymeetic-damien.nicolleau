<?php

namespace App\controller;

class UserController
{

    private $data = [];
    
    private function renderRegisterView(){
        header('Location: http://localhost:8080/view/registerFormView.php');
    }

    public function validateData(){
        self::renderRegisterView();

        if (isset($_POST["submit_register"])) {
            
            $data = $_POST["submit_register"];

            foreach ($data as $value) {
                $value = htmlspecialchars($value);
            }

            $this->data = $data;

            self::redirectToRoute("loginFormView",$this->data);
        }
    }

    private function redirectToRoute($location="homeView",$data){
        header('Location: http://localhost:8080/view/'.$location.'.php');
    }
}
