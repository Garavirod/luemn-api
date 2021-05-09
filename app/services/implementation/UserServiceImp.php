<?php

namespace App\Services\Implementation;

use App\Services\Interfaces\IUserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserServiceImp implements IUserInterface{

    private $model;

    function __construct()
    {
        $this->model = new User();
    }

    function getAllUsers(){ 

    }

    function getUserById(int $id){

    }

    /**
     * Crea un nuevo usuario en el sistema
    */
    function postUser(array $user){
        //Hasheamos password
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }

    function putUser(array $user, int $id){

    }

    function delUser(int $id){

    }

    function restoreUser(int $id){

    }
}