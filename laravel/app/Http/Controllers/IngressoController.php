
// app/Http/Controllers/IngressoController.php

<?php

namespace App\Http\Controllers;

use App\Models\Ingresso;
use App\Models\Sessao;
use Illuminate\Http\Request;

class IngressoController extends Controller
{
    public function index()
    {
        $ingressos = Ingresso::all();

        return view('ingressos.index', compact('ingressos'));
    }

    public function create()
    {
        $sessoes = Sessao::all();

        return view('ingressos.create', compact('sessoes'));
    }

    public function store(Request $request)
    {
        Ingresso::create($request->all());

        return redirect()->route('ingressos.index');
    }

    public function show(Ingresso $ingresso)
    {
        //
    }

    public function edit(Ingresso $ingresso)
    {
        $sessoes = Sessao::all();

        return view('ingressos.edit', compact('ingresso', 'sessoes'));
    }

    public function update(Request $request, Ingresso $ingresso)
    {
        $ingresso->update($request->all());

        return redirect()->route('ingressos.index');
    }

    public function destroy(Ingresso $ingresso)
    {
        $ingresso->delete();

        return redirect()->route('ingressos.index');
    }
}


