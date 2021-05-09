<?php

namespace App\Http\Controllers;

use App\Services\Implementation\UserServiceImp;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    /**
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImp $userService, Request $request)
    {
        $this->userService = $userService;
        $this->request = $request;
    }

    public function createUser(){
        $response = response("", 201);
        $this->userService->postUser(
            $this->request->all()
        );

        return $response;
    }

    public function getUsersList(){
        return response($this->userService->getAllUsers());
    }
}
