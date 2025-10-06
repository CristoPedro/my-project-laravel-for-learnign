<?php

namespace App\Http\Controllers;

use App\Models\Rede;
use Illuminate\Http\Request;

class RedeSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redes = Rede::all();

        return view('rede-social.index', compact("redes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rede-social.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // salvar dos dados no banco de dados.
        $request->validate([
            'nome' => ['required', 'max:100'],
            'link' => ['required', 'max:255'],
        ]);

        $rede = new Rede();

        $rede->nome = $request->nome;
        $rede->link = $request->link;

        $nome = $request->nome;

        $rede->save();

        return redirect()->route('redes-sociais.index')->with("success", "Rede $nome  cadastrada com sucesso");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // redirecionar para editar no formulario
        $rede = Rede::find($id);
        return view('rede-social.edit', compact('rede'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Atualizações dos dados.
        // dd($request->all());
        $request->validate([
            'nome' => ['required', 'max:100'],
            'link' => ['required', 'max:255']

        ]);

        $rede = Rede::find($id);

        $rede->nome = $request->nome;
        $rede->link = $request->link;
        $rede->save();

        return redirect()->route('redes-sociais.index')->with('success', "Rede atualizada com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destruir a rede

        $rede = Rede::find($id);

        dd($rede);

        $rede->delete();
        return redirect()->route('redes-sociais.index')->with('success', 'Rede eliminada com sucesso');
    }
}
