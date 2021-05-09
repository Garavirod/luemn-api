<?php
    namespace App\Services\Interfaces;

Interface IUserInterface
{
    /**
     * @return array User
    */
    function getAllUsers();

    function getUserById(int $id);

    function postUser(array $user);

    function putUser(array $user, int $id);

    function delUser(int $id);

    function restoreUser(int $id);
}