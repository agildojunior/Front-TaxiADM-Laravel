<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirapiController extends Controller
{
    //
    
    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Empresas
    //------------------------------------------------------------------
    //listar empresas
    public function todasempresas(){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/empresas');
        $responseArray = $response->json();
        return view('empresas', compact('responseArray'));
    }
    //add empresas
    public function adicionarempresas(Request $request){
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
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/empresas/'. $id2);
        $responseArray = $response->json();
        return view('/editarempresas', compact('responseArray'));
    }
    public function editarempresas3($id, Request $request){
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

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                             Taxis
    //------------------------------------------------------------------
    //listar taxis
    
    public function todostaxis(){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/taxis');
        $responseArray = $response->json();
        return view('taxis', compact('responseArray'));
    }
    //add taxis
    public function adicionartaxis(Request $request){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $dados = $request->all();
        $response = Http::withHeaders($header)->post('http://127.0.0.1:8090/taxis',[
        'nome_taxista' => $request->input('nome_taxista'),
        'telefone_taxista' => $request->input('telefone_taxista'),
        'modelo_taxi' => $request->input('modelo_taxi'),
        'placa_taxi' => $request->input('placa_taxi')
        ]);
        return redirect('/taxis');
    }
    //editar taxis
    public function editartaxis2($id){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/taxis/'. $id2);
        $responseArray = $response->json();
        return view('/editartaxis', compact('responseArray'));
    }
    public function editartaxis3($id, Request $request){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/taxis/'. $id2,[
            'nome_taxista' => $request->input('nome_taxista'),
            'telefone_taxista' => $request->input('telefone_taxista'),
            'modelo_taxi' => $request->input('modelo_taxi'),
            'placa_taxi' => $request->input('placa_taxi')
            ]);
            return redirect('/taxis');
    }

    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Corridas
    //------------------------------------------------------------------
    //listar Corridas
    public function todascorridas(){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('corridas', compact('responseArray'));
    }
    //Editar Status Corridas
    public function editarstatus($id){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas/'. $id2);
        $responseArray = $response->json();
        return view('/editarstatuscorrida', compact('responseArray'));
    }
    public function editarstatusb($id, Request $request){
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
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('taxistaCorridasDisponiveis', compact('responseArray'));
    }
    public function aceitarCorrida($id){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/corridas/'. $id2,[
            'id_taxi' => 1, //o ID sera mudado para o id do taxi do motorista que estiver logado, coloquei o numero 1 somente de exemplo.
            'status' => "Aceita",
            ]);
            return redirect('/taxistaCorridasDisponiveis');
    }
    //minhas corridas 
    public function minhasCorridas(){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/corridas');
        $responseArray = $response->json();
        return view('CorridasAceitas', compact('responseArray'));
    }
    public function finalizarCorrida($id){
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
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios');
        $responseArray = $response->json();
        return view('usuarios', compact('responseArray'));
    }
    //Adicionar Usuarios  
    public function adicionarUsuario(Request $request){
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
        return redirect('/');
    }
    //editar usuarios
    public function editarusuariosb($id){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios/'. $id2);
        $responseArray = $response->json();
        return view('/editarusuarios', compact('responseArray'));
    }
    public function editarusuarios3($id, Request $request){
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        $id2 = intval($id);
        $response = Http::withHeaders($header)->put('http://127.0.0.1:8090/usuarios/'. $id2,[
            'nome_usuario' => $request->input('nome'),
            'email_usuario' => $request->input('email'),
            'senha_usuario' => $request->input('senha'),
            'tipo_usuario' => $request->input('tipo'),
            'id_taxis' => $request->input('taxi')
            ]);
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
        if($log['tipo_usuario'] == 'taxista'){
            if($log['email_usuario'] == $email && $log['senha_usuario'] == $senha ){
                return redirect('/taxistaCorridasDisponiveis');
            }
        }
        if($log['tipo_usuario'] == 'admin'){
            if($log['email_usuario'] == $email && $log['senha_usuario'] == $senha ){
                return redirect('/home');
            }
        }
        
    }

}
