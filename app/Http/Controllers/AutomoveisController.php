<?php

namespace App\Http\Controllers;

use App\Models\Automovel;
use Illuminate\Http\Request;

class AutomoveisController extends Controller
{
    //rota que envia para a tela que mostra todos os automoveis
    public function index()
    {
        $automoveis = Automovel::orderBy('nome', 'ASC')->get();

        return view('automoveis.index', ['autos' => $automoveis, 'pagina' => 'automoveis']);
    }

    //rota que envia para a tela que mostra um automovel 
    public function show(Automovel $auto)
    {
        return view('automoveis.show', ['auto' => $auto, 'pagina' => 'automoveis']);
    }

    //rota que envia para a tela de criação de automoveis
    public function create()
    {
        return view('automoveis.create', ['pagina' => 'automoveis']);
    }

    //rota com logica de criação de automovel com salvamento de imagem 
    public function insert(Request $form)
    {
        $auto = new Automovel();

        $imagemCaminho = $form->file('imagem')->store('', 'imagens');
        $auto->nome = $form->nome;
        $auto->ano = $form->ano;
        $auto->combustivel = $form->combustivel;
        $auto->preco = $form->preco;
        $auto->imagem = $imagemCaminho;
        $auto->save();

        return redirect()->route('automoveis');
    }

    //rota que envia para a tela de criação de automoveis
    public function edit(Automovel $auto)
    {
        return view('automoveis.edit', ['auto' => $auto, 'pagina' => 'automoveis']);
    }

    //rota com logica de edição de automovel com salvamento (ou não) de imagem 
    public function update(Request $form, Automovel $auto)
    {
        $imagemCaminho = $form->file('imagem') ? $form->file('imagem')->store('', 'imagens') : $auto->imagem;
        $auto->nome = $form->nome;
        $auto->ano = $form->ano;
        $auto->combustivel = $form->combustivel;
        $auto->preco = $form->preco;
        $auto->imagem = $imagemCaminho;
        $auto->save();

        return redirect()->route('automoveis');
    }

    //rota que envia para a tela de exclusão de automoveis
    public function remove(Automovel $auto)
    {
        return view('automoveis.remove', ['auto' => $auto, 'pagina' => 'automoveis']);
    }

    //rota com logica de exclusão de automovel 
    public function delete(Automovel $auto)
    {
        $auto->delete();

        return redirect()->route('automoveis');
    }

}
