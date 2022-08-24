<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
//cookie
    function setCookie_logado($ID_logado){
        Cookie::queue('cookie_logado', $ID_logado);
        return ;
    }
    function getCookie_logado(){
        $cookieValue = Cookie::get('cookie_logado');
        return $cookieValue;
    }

    function setEmail_logado($Email_logado){
        Cookie::queue('email_logado', $Email_logado);
        return ;
    }
    function getEmail_logado(){
        $cookieValue = Cookie::get('email_logado');
        return $cookieValue;
    }
    