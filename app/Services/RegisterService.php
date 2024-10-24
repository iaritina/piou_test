<?php
namespace App\Services;

use App\Models\User;
// Couche service qui gerera tous les logiques métiers de l'inscription utilisateur
class RegisterService{

    // methode qui enregistrera des utilisateurs
    public function storeUser(array $request){
        $user = User::create($request);
        return $user;
    }
}