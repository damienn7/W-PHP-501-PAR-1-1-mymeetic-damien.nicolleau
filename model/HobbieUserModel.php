<?php
namespace App\model;

use \App\model\DatabaseModel;

class HobbieUserModel
{
    private $id;

    private $name;

    public function setHobbieUser($id_user,$id_hobbie){

        $database = new DatabaseModel();

        $db = $database->pdo;
        try {
            $statement = $db->prepare("insert into user_hobbie(id_user,id_hobbie) values(:id_user,:id_hobbie);");
            $statement->bindParam('id_user', $id_user, \PDO::PARAM_STR_CHAR);
            $statement->bindParam('id_hobbie', $id_hobbie, \PDO::PARAM_STR_CHAR);

            $statement->execute();
            $statement->fetch();

        } catch (\Exception $e) {
            $message = "Erreur : " . $e->getMessage();
        }

        if (isset($message)) {
            return $message;
        }
    }

    public function getHobbie(){
        $database = new DatabaseModel();

        $db = $database->pdo;
        try {
            $statement = $db->prepare("select * from hobbie;");

            $statement->execute();
            $hobbie = $statement->fetchAll();

        } catch (\Exception $e) {
            $message = "Erreur : " . $e->getMessage();
        }

        if (isset($message)) {
            return $message;
        }else {
            return $hobbie;
        }
    }

    // public function getUserFromHobbie($hobbie_id_array){
    //     $database = new DatabaseModel();

    //     $db = $database->pdo;
    //     try {
    //         $statement = $db->prepare("select * from user as u join user_hobbie as uh on uh.id = u.id where uh.id_hobbie = :id_hobbie");
    //         $statement->bindParam('id_hobbie', $hobbie_id_array, \PDO::PARAM_STR_CHAR);
    //         $statement->execute();
    //         $user = $statement->fetchAll();

    //     } catch (\Exception $e) {
    //         $message = "Erreur : " . $e->getMessage();
    //     }

    //     if (isset($message)) {
    //         return $message;
    //     } else {
    //         return $user;
    //     }
    // }
   
}