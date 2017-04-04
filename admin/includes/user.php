<?php

class User {

    public static function find_all_users(){
        global $database; // made this global to gain access to it.

        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }

    public static function find_user_by_id($id){
        global $database; // made this global to gain access to it.

        $get_user = $database->query("SELECT * FROM users WHERE id = $id");
        return $get_user;
    }

}

?>