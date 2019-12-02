<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function show(){
        $users = User::all();
        return $users;
    }
/**
    * @OA\Get(
    *     path="/api/users/{id}",
    *     summary="Traer usuario",
    *     @OA\Response(
    *         response=200,
    *         description="Traer usuario."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function getById($id){
        $user = User::find($id);
        return $user;        
    }
}
