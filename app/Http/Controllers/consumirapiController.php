<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirapiController extends Controller
{
    //
    // public function todosemprestimos(){
    //     $emprestimo = Emprestimo::orderBy('created_at', 'desc')->get();
    //     return view('panel.allemprestimos',['emprestimo'=>$emprestimo]);
    // }



    //------------------------------------------------------------------
    //------------------------------------------------------------------
    //                            Empresas
    //------------------------------------------------------------------
    //listar empresas
    public function todasempresas(){
        $response = Http::get('http://127.0.0.1:8090/empresas');
        $responseArray = $response->json();
        return view('empresas', compact('responseArray'));
    }
    //add empresas
    public function adicionarempresas(Request $request){
        $dados = $request->all();
        $response = Http::post('http://127.0.0.1:8090/empresas',[
        'name' => $request->input('nomeEmpresa'),
        'cnpj' => $request->input('cnpj')
        ]);
        return redirect('/empresas');
    }
    //editar empresas
    public function editarempresas2($id){
        $id2 = intval($id);
        $response = Http::get('http://127.0.0.1:8090/empresas/'. $id2);
        $responseArray = $response->json();
        return view('/editarempresas', compact('responseArray'));
    }
    public function editarempresas3($id, Request $request){
        $id2 = intval($id);
        $response = Http::put('http://127.0.0.1:8090/empresas/'. $id2,[
            'name' => $request->input('nomeEmpresa'),
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
        $response = Http::get('http://127.0.0.1:8090/taxis');
        $responseArray = $response->json();
        return view('taxis', compact('responseArray'));
    }
    //add taxis
    public function adicionartaxis(Request $request){
        $dados = $request->all();
        $response = Http::post('http://127.0.0.1:8090/taxis',[
        'name_motorista' => $request->input('name_motorista'),
        ]);
        return redirect('/taxis');
    }
    //editar taxis
    public function editartaxis2($id){
        $id2 = intval($id);
        $response = Http::get('http://127.0.0.1:8090/taxis/'. $id2);
        $responseArray = $response->json();
        return view('/editartaxis', compact('responseArray'));
    }
    public function editartaxis3($id, Request $request){
        $id2 = intval($id);
        $response = Http::put('http://127.0.0.1:8090/taxis/'. $id2,[
            'name_motorista' => $request->input('name_motorista'),
            ]);
            return redirect('/taxis');
    }
}
