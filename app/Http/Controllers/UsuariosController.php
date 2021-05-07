<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function getAllPost(){
        $post = DB::Table('post')->get();
        return response()->json($post, 201);
    }
}
