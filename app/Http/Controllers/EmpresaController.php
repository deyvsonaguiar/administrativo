<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo = $request->tipo;

        if($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        $empresas = Empresa::todasPorTipo($tipo);

        return view('empresa.index', ['empresas' => $empresas, 'tipo' => $tipo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tipo = $request->tipo;

        if($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        return view('empresa.create', ['tipo' => $tipo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $tipo = $request->tipo;

        $empresa = Empresa::create($request->all());

        return redirect()->route('empresas.show', $empresa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', ['empresa' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmpresaRequest $request
     * @param Empresa $empresa
     * @return void
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        //dd($request->empresa->documento);
        $empresa->update($request->all());
        return redirect()->route('empresas.show', $empresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa, Request $request)
    {
        $tipo = $request->tipo;

        if($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        $empresa->delete();

        return redirect()->route('empresas.index', ['tipo' => $tipo]);
    }
}
