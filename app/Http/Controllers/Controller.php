<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //cookie
    public function setCookie_logado($ID_logado){
        Cookie::queue('cookie_logado', $ID_logado);
    }
    public function getCookie_logado(){
        $cookieValue = Cookie::get('cookie_logado');
        return response()->json($cookieValue);
    }
}
