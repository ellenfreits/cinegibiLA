<?php

namespace App\Http\Controllers;

use App\Models\Sessao;
use App\Models\Filme;
use Illuminate\Http\Request;

class SessaoController extends Controller
{
    public function index()
    {
        $sessoes = Sessao::all();

        return view('sessoes.index', compact('sessoes'));
    }

    public function create()
    {
        $filmes = Filme::all();

        return view('sessoes.create', compact('filmes'));
    }

    public function store(Request $request)
    {
        Sessao::create($request->all());

        return redirect()->route('sessoes.index');
    }

    public function show(Sessao $sessao)
    {
        //
    }

    public function edit(Sessao $sessao)
    {
        $filmes = Filme::all();

        return view('sessoes.edit', compact('sessao', 'filmes'));
    }

    public function update(Request $request, Sessao $sessao)
    {
        $sessao->update($request->all());

        return redirect()->route('sessoes.index');
    }

    public function destroy(Sessao $sessao)
    {
        $sessao->delete();

        return redirect()->route('sessoes.index');
    }
}


