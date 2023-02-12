<?php

namespace App\controller;

use App\model\UserModel;
use App\model\HobbieUserModel;

class UserController
{

    private $data = [];


    private function renderRegisterView()
    {
        header('Location: http://localhost:8080/view/registerFormView.php');
    }

    public function validateDataRegister($data)
    {

        if (isset($data)) {

            foreach ($data as $value) {
                if ($value == "") {
                    return "is_empty";
                }

                $value = htmlspecialchars($value);
                //echo $value;
            }

            //$this->data = $data;

            // if ($check!=true) {
            // var_dump($data);
            // echo "here";
            $user = new UserModel();
            $log = $user->setUser($data);


            if (!is_bool($log)) {
                // die($log);
                return "not_ok";
            } else {
                return "ok";
            }
        }
    }

    public function validateDataConnection($data)
    {
        if (isset($data)) {

            foreach ($data as $value) {
                if ($value == "") {
                    return "is_empty";
                }

                $value = htmlspecialchars($value);
                //echo $value;
            }

            $user = new UserModel();
            $log = $user->getUser($data);


            if (is_string($log)) {
                // die($log);
                return "not_ok";
            } else {
                return $log;
            }
        }
    }

    public function getAllProfiles($city = "Paris", $min = 18, $max = 60, $post = "")
    {
        // var_dump($log);
        // die();
        
        $sup_query = "";
        
        if (is_array($post)) {
            # code...
            
            $hobbie_user = new HobbieUserModel();
            $hobbie = $hobbie_user->getHobbie();
            
            foreach ($hobbie as $key => $value) {
                if (isset($post[$value["name"]])) {
                    $sup_query .= " and h.id = " . $post[$value["name"]];
                }
            }
        }
        
        $user = new UserModel();
        $log = $user->getUsers($city, $min, $max, $sup_query);

        if (is_array($log)) {
            
            
            
            ?>
            <div class="main-container-home_div-filtre">
                <form action="../public/index.php" class="main-container-home_div-filtre_user-filter-form" id="form-filter" method="POST">
                    <div class="field">
                        <label for="city" class="city">Ville</label>
                        <input type="text" name="city" id="city" placeholder="Ville recherchee..." value="Paris">
                    </div>
                    <div class="field">
                        <label for="age-min" class="age">Age minimum</label>
                        <input type="number" name="age-min" id="age-min" min="18" max="80" step="1" value="18">
                    </div>
                    <div class="field">
                        <label for="age-max" class="age">Age maximum</label>
                        <input type="number" name="age-max" id="age-max" min="18" max="80" step="1" value="60">
                    </div>

                    <div class="field-hobbie">
                        <?php
                        $hobbie_user = new HobbieUserModel();
                        $hobbie = $hobbie_user->getHobbie();
                        foreach ($hobbie as $key => $value) {

                            ?>

                            <label for="<?php echo $value["name"]; ?>" class="hobbie"><?php echo $value["name"]; ?></label>
                            <input type="checkbox" id="<?php echo $value["name"]; ?>" name="<?php echo $value["name"]; ?>"
                                value="<?php echo $value["id"]; ?>">
                        <?php } ?>
                    </div>
                    <div class="field">
                        <button type="submit" id="filter" class="btn btn--outlined">
                            Filtrer
                        </button>
                    </div>
                </form>
            </div>
            <?php
            foreach ($log as $key => $value) {
                ?>
                <form action="http://localhost:8080/public/index.php" method="POST" id="form-profil" class="form-profil">
                    <img src="http://localhost:8080/avatar.jpg" class="header-container_nav-container_dropdown_img-bottom" alt="avatar picture">
                    <div class="card">
                        <p class="card-p">
                            <?php echo $value["firstName"]; ?>
                        </p>
                        <p class="card-p">
                            <?php echo $value["age"] . " ans, " . $value["name"]; ?>
                        </p>
                        <p class="card-p-id" value="<?php echo $value["id"]; ?>"><?php echo $value["id"]; ?></p>
                        <p class="card-p-id" value="<?php echo $value["name"]; ?>"><?php echo $value["name"]; ?></p>
                    </div>
                </form>
<?php
            }
        } else {
            echo $log;
        }
    }

    public function redirectToRoute($location = "homeView")
    {
        header('Location: http://localhost:8080/view/' . $location . '.php');
    }

}