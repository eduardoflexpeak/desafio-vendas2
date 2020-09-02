<?php

namespace App\Http\Controllers;

use App\Http\Requests\FabricanteRequest;
use App\Services\FabricanteService;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    public function index()
    {
        return view('fabricante.index');
    }

    public function create()
    {
        return view('fabricante.form');
    }

    /*
    Ao invés de utilizar a request que vem por padrão
    vamos utilizar a request que criamos, pois nela tem as regras
    específicas para validação do fabricante
    */
    public function store(FabricanteRequest $request)
    {
        $fabricante = FabricanteService::store($request->all());

        if ($fabricante) {
            flash('Fabricante cadastrado com sucesso')->success();

            return back();
        }

        flash('Erro ao salvar o fabricante')->error();

        return back()->withInput();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
