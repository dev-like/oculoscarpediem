<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Servico;

class ServicosController extends Controller
{
    public function index()
    {
      $servico = Servico::all();
      return view('admin.servico.index', ['servico' => $servico]);
    }

    public function create()
    {
      return view('admin.servico.create');
    }

    public function store(Request $request)
    {
        $servico = new Servico;
        $servico->nome       = $request->nome;
        $servico->descricao       = $request->descricao;

        $servico->save();

        $request->session()->flash('success', 'Serviço cadastrado com sucesso !');
        return redirect('admin/servico')->with('flash_message', 'Servico cadastrado com sucesso !');
    }

    public function edit($id)
    {
      $servico = Servico::findOrFail($id);
      return view('admin.servico.edit', compact('servico'));
    }

    public function update(Request $request, $id)
    {
      $servico = Servico::find($id);
      $servico->fill($request->all());




      $servico->save();

      $request->session()->flash('success', 'Servico modificado com sucesso.');
      return redirect('admin/servicos')->with('flash_message', 'Servico alterado com sucesso !');
    }

    public function destroy($id)
    {
      $servico = Servico::find($id)->delete();
      return [response()->json("success"), redirect('admin/servicos')];
    }
}
