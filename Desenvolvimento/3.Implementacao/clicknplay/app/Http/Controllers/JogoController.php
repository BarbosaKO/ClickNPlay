<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Jogo;

class JogoController extends Controller
{
    public function index(){

        $jogos = Jogo::all();

        return view('homepage', ['jogos' => $jogos]);
    }

    public function projetos(){
        $user = Auth::user();
        
        $jogos = Jogo::where([
            ['user_id', 'like', '%'.$user->id.'%']
        ])->get();

        return view('projetos', ['jogos' => $jogos]);
    }
    
    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        $jogo = new Jogo;
        
        $jogo->nome = $request->nome;
        $jogo->categoria = $request->categoria;
        $jogo->preco = $request->preco;

        if($request->hasFile('imagem_principal') && $request->file('imagem_principal')->isValid() ){
            $imagem = $request->imagem_principal;
            $extensao = $imagem->extension();
            
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            $imagem->move(public_path('img/jogos-img'), $imagemNome);

            $jogo->imagem_principal = $imagemNome;
        }

        $jogo->user_id = $request->user_id;

        $jogo->save();
        return redirect('/projetos')->with('msg', 'Jogo adicionado com sucesso!');
    }

    public function showJogo($id){
        $jogo = Jogo::findOrFail($id);

        return view('gamepage', ['jogo' => $jogo]);
    }
}
