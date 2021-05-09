<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interfaces\IUserInterface;

class UserServiceImpl implements IUserInterface{

    private $model;

    function __construct()
    {
        $this->model = new User();
    }

    function getAllUsers(){

    }

    function getUserById(int $id){

    }

    function postUser(array $user){

    }

    function putUser(array $user, int $id){

    }

    function delUser(int $id){

    }

    function restoreUser(int $id){

    }
}