<?php


namespace App\Controllers;


use App\Services\Router;

class Auth
{

    public function register($data , $files){

        $email = $data["email"];
        $username = $data["username"];
        $full_name = $data["full_name"];
        $password = $data["password"];
        $confirm_password = $data["confirm_password"];

        if ($password !== $confirm_password){
            Router::error('500');
            die();
        }

        $avatar = $files["avatar"];

        $fileName = time() . "_". $avatar["name"];
        $path = "uploads/avatars/" .$fileName;

        if(move_uploaded_file($avatar["tmp_name"],$path)){
            //add
            $user = \R::dispense('users');
            $user->username = $username;
            $user->full_name = $full_name;
            $user->avatar = "/".$path;
            $user->password = password_hash($password,PASSWORD_DEFAULT) ;
            \R::store($user);
            Router::redirect('/login');
        }else{
            Router::error('500');
        }
    }

}