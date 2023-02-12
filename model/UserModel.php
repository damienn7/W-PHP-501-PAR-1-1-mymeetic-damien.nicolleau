<?php
namespace App\model;

use \App\model\DatabaseModel;

class UserModel
{
    private $id;

    private $email;

    private $password;

    private $firstname;

    private $lastname;

    private $genre_id;


    // public function __construct() {

    // }


    function setUser($data)
    {

        if ($data["genre"] == "homme") {
            $genre_id = 1;
        } elseif ($data["genre"] == "femme") {
            $genre_id = 2;
        } else {
            $genre_id = 3;
        }

        $database = new DatabaseModel();

        $db = $database->pdo;

        try {
            $statement = $db->prepare("insert into user(lastname,firstname,birthdate,email,pass,id_city,id_genre,id_role,id_statu,id_profil_image) values(:lastname,:firstname,:birthdate,:email,:pass,1,:id_genre,1,null,null);");

            $birthdate = self::getDatetime($data["year"], $data["month"], $data["day"]);

            $pass_hashed = password_hash($data["password"], PASSWORD_BCRYPT);

            $statement->bindParam('id_genre', $genre_id, \PDO::PARAM_INT);
            $statement->bindParam('lastname', $data["lastname"], \PDO::PARAM_STR_CHAR);
            $statement->bindParam('firstname', $data["firstname"], \PDO::PARAM_STR_CHAR);
            $statement->bindParam('birthdate', $birthdate, \PDO::PARAM_STR_CHAR);
            $statement->bindParam('email', $data["email"], \PDO::PARAM_STR_CHAR);
            $statement->bindParam('pass', $pass_hashed, \PDO::PARAM_STR_CHAR);

            $statement->execute();
            $statement->fetch();

        } catch (\Exception $e) {
            $message = "Erreur : " . $e->getMessage();
        }

        if (isset($message)) {
            return $message;
        } else {
            return $message = true;
        }
    }

    public function getUser($data)
    {

        $database = new DatabaseModel();

        $db = $database->pdo;

        try {
            $statement = $db->prepare("select id,pass from user where email=:email");

            $statement->bindParam('email', $data["email-login"], \PDO::PARAM_STR_CHAR);

            $statement->execute();
            $user = $statement->fetch();

        } catch (\Exception $e) {
            $message = "Erreur : " . $e->getMessage();
        }

        if (isset($message)) {
            return $message;
        } else {
            if (password_verify($data["password-login"], $user["pass"])) {
                return $user;
            }
        }
    }

    public function getUsers($city = 'Paris', $min = 18, $max = 60, $hobbies = "")
    {
        $database = new DatabaseModel();

        $db = $database->pdo;

        // var_dump($min);
        // var_dump($max);
        // var_dump($city);
        // die();

        try {
            if ($hobbies != "") {
                $statement = $db->prepare("select u.id,u.firstName, u.lastName,(year(now()) - year(birthdate)) as \"age\",c.name from user as u join city as c on c.id=u.id_city join user_hobbie as uh on uh.id_user = u.id join hobbie as h on h.id = uh.id_hobbie where c.name = '$city' and ((year(now()) - year(birthdate))>=$min and (year(now()) - year(birthdate))<=$max)$hobbies;");
            }else {
                $statement = $db->prepare("select u.id,u.firstName, u.lastName,(year(now()) - year(birthdate)) as \"age\",c.name from user as u join city as c on c.id=u.id_city where c.name = '$city' and ((year(now()) - year(birthdate))>=$min and (year(now()) - year(birthdate))<=$max);");
            }
            // $statement->bindParam('city', $city , \PDO::PARAM_STR_CHAR);
            // $statement->bindParam('age-min', $min , \PDO::PARAM_INT);
            // $statement->bindParam('age-max', $max , \PDO::PARAM_INT);
            $statement->execute();
            $user = $statement->fetchAll();

        } catch (\Exception $e) {
            $message = "Erreur : " . $e->getMessage();
        }

        if (isset($message)) {
            return $message;
        } else {
            return $user;
        }
    }

    private function getDatetime($year, $month, $day): string
    {
        $datetime = new \DateTime();
        $datetime->setDate(intval($year), intval($month), intval($day));
        $datetime->setTime(0, 0, 0, 0);
        $date = $datetime->format('Y-m-d H:i:s');
        return $date;
    }
}