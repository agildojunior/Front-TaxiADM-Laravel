<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;


class consumirapiController extends Controller
{
    //cookie

    // public function setCookie_logado($ID_logado){
    //     Cookie::queue('cookie_logado', $ID_logado);
    // }
    // public function getCookie_logado(){
    //     $cookieValue = Cookie::get('cookie_logado');
    //     return response()->json($cookieValue);
    // }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Empresas
    //------------------------------------------------------------------
    //listar empresas

    public function todasempresas(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/empresas');
        $responseArray = $response->json();
        return view('empresas', compact('responseArray'));
    }
    //verificação
    public function addempresas(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        return view('addempresas');
    }
    //add empresas
    public function adicionarempresas(Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $dados = $request->all();
        $response = Http::withHeaders($header)->post('http://127.0.0.1:8090/empresas',[
        'nome' => $request->input('nomeEmpresa'),
        'cnpj' => $request->input('cnpj')
        ]);
        return redirect('/empresas');
    }
    //editar empresas
    public function editarempresas2($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/empresas/'. $id2);
        $responseArray = $response->json();
        return view('/editarempresas', compact('responseArray'));
    }
    public function editarempresas3($id, Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/empresas/'. $id2,[
            'nome' => $request->input('nomeEmpresa'),
            'cnpj' => $request->input('cnpj')
            ]);
            return redirect('/empresas');
    }
    //Deletar empresa
    public function deleteempresas($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->delete('http://127.0.0.1:8090/empresas/'. $id2);
            return redirect('/empresas');
    }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                             Taxis
    //------------------------------------------------------------------
    //listar taxis
    
    public function todostaxis(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/taxis');
        $responseArray = $response->json();
        return view('taxis', compact('responseArray'));
    }
    //verificação
    public function addtaxis(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        return view('addtaxis');
    }
    //add taxis
    public function adicionartaxis(Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $dados = $request->all();
        $response = Http::withHeaders($header)->post('http://127.0.0.1:8090/taxis',[
        'id_usuario' => $request->input('id_usuario'),
        'telefone_taxista' => $request->input('telefone_taxista'),
        'modelo_taxi' => $request->input('modelo_taxi'),
        'placa_taxi' => $request->input('placa_taxi')
        ]);
        return redirect('/taxis');
    }
    //editar taxis
    public function editartaxis2($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/taxis/'. $id2);
        $responseArray = $response->json();
        return view('/editartaxis', compact('responseArray'));
    }
    public function editartaxis3($id, Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/taxis/'. $id2,[
            'id_usuario' => $request->input('id_usuario'),
            'telefone_taxista' => $request->input('telefone_taxista'),
            'modelo_taxi' => $request->input('modelo_taxi'),
            'placa_taxi' => $request->input('placa_taxi')
            ]);
            return redirect('/taxis');
    }
    //Deletar taxis
    public function deletetaxis($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->delete('http://127.0.0.1:8090/taxis/'. $id2);
            return redirect('/taxis');
    }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Corridas
    //------------------------------------------------------------------
    //listar Corridas
    public function todascorridas(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('corridas', compact('responseArray'));
    }
    //Editar Status Corridas
    public function editarstatus($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas/'. $id2);
        $responseArray = $response->json();
        return view('/editarstatuscorrida', compact('responseArray'));
    }
    public function editarstatusb($id, Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/corridas/'. $id2,[
            'status' => $request->input('status'),
            ]);
            return redirect('/corridas');
    }
    
    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                          Painel Taxista
    //------------------------------------------------------------------
    //corridas disponiveis
    public function corridasDispo(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('taxistaCorridasDisponiveis', compact('responseArray'));
    }
    public function aceitarCorrida($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        //pegando o id do usuario logado
        $ID_logado = intval(getCookie_logado());
        //aceitando corrida
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/corridas/'. $id2,[
            'id_taxi' => $ID_logado, 
            'status' => "Aceita",
            ]);
            return redirect('/taxistaCorridasDisponiveis');
    }
    //minhas corridas 
    public function minhasCorridas(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $ID_logado = intval(getCookie_logado());
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('CorridasAceitas', compact('responseArray','ID_logado'));
    }
    public function finalizarCorrida($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/corridas/'. $id2,[
            'status' => "Finalizada",
            ]);
            return redirect('/CorridasAceitas');
    }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Usuarios
    //------------------------------------------------------------------
    //Listar usuarios
    public function todosUsuarios(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios');
        $responseArray = $response->json();
        return view('usuarios', compact('responseArray'));
    }
    //Adicionar Usuarios  
    public function adicionarUsuario(Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $dados = $request->all();
        $response = Http::withHeaders($header)->post('http://127.0.0.1:8090/usuarios',[
        'nome_usuario' => $request->input('nome'),
        'email_usuario' => $request->input('email'),
        'senha_usuario' => $request->input('senha'),
        'tipo_usuario' => $request->input('tipo')
        ]);
        return redirect('/usuarios');
    }
    //editar usuarios
    public function editarusuariosb($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios/'. $id2);
        $responseArray = $response->json();
        return view('/editarusuarios', compact('responseArray'));
    }
    public function editarusuarios3($id, Request $request){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/usuarios/'. $id2,[
            'nome_usuario' => $request->input('nome'),
            'email_usuario' => $request->input('email'),
            'senha_usuario' => $request->input('senha'),
            'tipo_usuario' => $request->input('tipo')
            ]);
            return redirect('/usuarios');
    }
    //delete usuarios
    public function deleteusuarios($id){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->delete('http://127.0.0.1:8090/usuarios/'. $id2);
            return redirect('/usuarios');
    }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                             Login
    //------------------------------------------------------------------
    //Login
    public function logar(Request $request){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $email = $request->input('email');
        $senha = $request->input('senha');
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios/email/'. $email);
        $log = $response->json();
        if($log == null){
            return redirect('/');
        }
        if($log['ativo'] == false){
            return redirect('/');
        }
        if($log['tipo_usuario'] == 'taxista'){
            $ID_logado = intval($log['id_usuario']);
            setCookie_logado($ID_logado);
            if($log['email_usuario'] == $email && $log['senha_usuario'] == $senha ){
                return redirect('/taxistaCorridasDisponiveis');
            }else{
                return redirect('/');
            }
        }
        if($log['tipo_usuario'] == 'admin'){
            $ID_logado = intval($log['id_usuario']);
            setCookie_logado($ID_logado);
            if($log['email_usuario'] == $email && $log['senha_usuario'] == $senha ){
                return redirect('/home');
            }else{
                return redirect('/');
            }
        }
        
    }

    //home verificação
    public function home(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        return view('home');
    }
    //usuario cadastro
    public function cadastroUsuario(){
        if(getCookie_logado() == null ){ return redirect ('/');}//verificão
        return view('cadastroUsuario');
    }

}
