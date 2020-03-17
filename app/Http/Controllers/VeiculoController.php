<?php

namespace FederalSt\Http\Controllers;

use Illuminate\Http\Request;
use FederalSt\Http\Requests\StoreVeiculoRequest;
use Illuminate\Support\Facades\Auth;
use FederalSt\User;
use FederalSt\Veiculo;
use FederalSt\Notifications\Notificaruser;

class VeiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addveiculo()
    {
        $proprietarios = User::where('role', '!=', '2')->get();
        return view('addveiculo', compact('proprietarios'));
    }
    
    public function storeveiculo(StoreVeiculoRequest $request) {
        //$input = $request->all();
        //dd($input);
        $data['user_id'] = $request->input('user_id');
        $data['modelo'] = $request->input('modelo');
        $data['marca'] = $request->input('marca');
        $data['placa'] = $request->input('placa');
        $data['ano'] = $request->input('ano');
        $data['renavam'] = $request->input('renavam');
        $veiculo = Veiculo::create($data);
        //return view('vertodososveiculos');
        $user = Auth::user();
        try {
            
            $user->notify(new Notificaruser('O veículo '.$request->input('modelo').' foi adicionado em sua conta no nosso sistema'));
        } catch (\Exception  $ex) {
            
        }
        
        return redirect()->route('admin.vertodososveiculos');
    }
    
    public function vertodososveiculos()
    {
        $veiculos = Veiculo::all();
        return view('vertodososveiculos', compact('veiculos'));
    }
    
    public function excluirveiculos(Request $request)
    {
        $veiculo = Veiculo::find($request->input('id_veiculo'));
        $veiculo->delete();
        return redirect()->route('admin.vertodososveiculos');
    }
    
    public function editarveiculos(Request $request)
    {
        $veiculo = Veiculo::find($request->input('id_veiculo'));
        return view('editveiculo', compact('veiculo'));
    }
    
    public function updateveiculo(StoreVeiculoRequest $request) {
        $veiculo = Veiculo::find($request->input('id_veiculo'));
        $veiculo->modelo = $request->input('modelo');
        $veiculo->marca = $request->input('marca');
        $veiculo->placa = $request->input('placa');
        $veiculo->ano = $request->input('ano');
        $veiculo->renavam = $request->input('renavam');
        $veiculo->update();
        try {
            $user->notify(new Notificaruser('Seu veículo '.$request->input('modelo').' foi atualizado em nosso sistema'));
        } catch (\Exception  $ex) {
            
        }
        return redirect()->route('admin.vertodososveiculos');
    }
    
    public function vermeusveiculos()
    {
        $veiculos = Veiculo::where('user_id', '=', Auth::user()->id)->get();
        return view('vermeusveiculos', compact('veiculos'));
    }
}
