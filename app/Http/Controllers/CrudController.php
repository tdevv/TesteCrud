<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Models\ModelCrud;
class CrudController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        ModelCrud::create([
            'id' => $request->ID,
            'description' => $request->description,
            'date' => $request->date,
            'file' => $request->file,
            'name' => $request->name,
            'price' => $request->price,
            'user' => $request->user,
        ]);
        return "Despesa salva com sucesso!";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $crud = ModelCrud::all();
       return view('show',['crud'=>$crud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud=ModelCrud::findOrFail($id);
        return view('edit', ['crud' => $crud]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = ModelCrud::findOrFail($id);
        $crud->update([
            'id' => $request->ID,
            'description' => $request->description,
            'date' => $request->date,
            'file' => $request->file,
            'name' => $request->name,
            'price' => $request->price,
            'user' => $request->user,
        ]); return 'Atualizado';

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $crud=ModelCrud::findOrFail($id);
        $crud->delete();
        return 'Excluido';
    }
}
