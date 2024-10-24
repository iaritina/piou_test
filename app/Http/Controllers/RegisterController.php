<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RegisterService;
use App\Http\Requests\User\RegisterRequest;

class RegisterController extends Controller
{
    // acces au couche service
    protected $registerService;
    public function __construct(RegisterService $registerService){
        $this->registerService=$registerService;
    }

    //page qui affichera le formulaire d'inscription
    public function index(){
        return view('pages.users.register');
    }

    //methode qui appellera la logique stocke dans le service
    public function saveUser(RegisterRequest $request){
        $user = $this->registerService->storeUser($request->validated());
        return back();
    }
}
