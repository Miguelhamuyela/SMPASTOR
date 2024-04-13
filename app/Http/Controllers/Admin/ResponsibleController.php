<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use App\Models\Responsible;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }


    public function index()
    {
        $response['responsibles'] = Responsible::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Responsável');
        return view('admin.responsible.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['responsibles'] = Responsible::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Criar Responsável');
        return view('admin.responsible.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'email' => 'required',


        ],

        [
            'name.required' => 'O campo do nome é obrigatório',
            'phone.required' => 'O campo Contacto é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'religion.required' => 'O campo Região é obrigatório',
            'occupation.required' => 'O campo o Ocupação é obrigatório',
            'email.required' => 'O campo o Email é obrigatório',
        ]);


        Responsible::create($data);
        $this->Logger->log('info', 'Cadastrou um Responsável');
        return redirect()->back()->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['responsibles'] = Responsible::find($id);

        $this->Logger->log('info', 'Detalhes do Responsável');
        return view('admin.responsible.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['responsibles'] = Responsible::OrderBy('id','Desc')->get();
        $response['responsibles'] = Responsible::find($id);
        $this->Logger->log('info', 'Editar o Responsável');
        return view('admin.responsible.edit.index', $response);
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

         $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'email' => 'required',
        ],

        [
            'name.required' => 'O campo do nome é obrigatório',
            'phone.required' => 'O campo Contacto é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'religion.required' => 'O campo Região é obrigatório',
            'occupation.required' => 'O campo o Ocupação é obrigatório',
            'email.required' => 'O campo o Email é obrigatório',
        ]);

        Responsible::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou o Responsável');
        return redirect()->route('admin.responsible.show', $id)->with('edit', '1');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Responsible::find($id)->delete();
        $this->Logger->log('info', 'Eliminou o Curso');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Responsavel foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
