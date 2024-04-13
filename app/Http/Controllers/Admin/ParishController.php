<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
     private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }


    public function index()
    {

        $response['parishes'] = Parish::OrderBy('id', 'Desc')->get();
        $this->Logger->log('info', 'Lista de Paróquia');
        return view('admin.parish.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['parishes'] = Parish::OrderBy('id','Desc')->get();
        $this->Logger->log('info', 'Criar Paróquia');
        return view('admin.parish.create.index', $response);

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
            'address' => 'required',
            'details' => 'required',

        ],

        [
            'name.required' => 'O campo do nome é obrigatório',
            'phone.required' => 'O campo Contacto é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'details.required' => 'O campo Região é obrigatório',
        ]);


        Parish::create($data);
        $this->Logger->log('info', 'Cadastrou uma Paróquia');
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
        $response['parishes'] = Parish::find($id);

        $this->Logger->log('info', 'Detalhes da Paróquia');
        return view('admin.parish.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['parishes'] = Parish::OrderBy('id','Desc')->get();
        $response['parishes'] = Parish::find($id);
        $this->Logger->log('info', 'Editar a Paróquia');
        return view('admin.parish.edit.index', $response);
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
            'address' => 'required',
            'details' => 'required',
        ],

        [
            'name.required' => 'O campo do nome é obrigatório',
            'phone.required' => 'O campo Contacto é obrigatório',
            'address.required' => 'O campo do Endereço é obrigatório',
            'details.required' => 'O campo Região é obrigatório',
        ]);

        Parish::find($id)->update($data);
        $this->Logger->log('info', 'Atualizou uma Paróquia');
        return redirect()->route('admin.parish.show', $id)->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Parish::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Paróquia');

        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'O Paróquia foi excluído.']);
        } else {
            return redirect()->back()->with('destroy', '1');
        }
    }
}
