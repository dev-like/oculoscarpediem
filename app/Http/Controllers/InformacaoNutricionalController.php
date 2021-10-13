<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\InformacaoNutricional;
use App\Models\Produto;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Image;
use Storage;

class InformacaoNutricionalController extends Controller
{
  public function fileImportExport()
    {
       return view('file-import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
    public function index($produto)
    {
      $infonutri = InformacaoNutricional::paginate(1000)->where('produtos_id', $produto);

      return view('admin.informacaonutricional.index',
       ['informacaonutricional' => $infonutri, 'produto' => $produto]);
    }

    public function create()
    {
      $infonutri = InformacaoNutricional::all();

      return view('admin.produtos.create', compact('infonutri'));
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'descricao'         => 'required',
        'quantidade'        => 'required',
      ));

      $requestData = $request->all();
      $infonutri = InformacaoNutricional::create($requestData);

      $request->session()->flash('success', 'Informação Nutricional adicionada com sucesso.');
      return redirect('admin/informacaonutricional/'.$infonutri->produtos_id);
    }

    public function edit($id, Request $request)
    {
      $infonutri = InformacaoNutricional::findOrFail($id);
      return view('admin.informacaonutricional.edit', compact('infonutri'));
    }

    public function update(Request $request, $id)
    {
      $infonutri = InformacaoNutricional::find($id);
      $infonutri->fill($request->all());

      $infonutri->save();

      $request->session()->flash('success', 'Informação Nutricional alterada com sucesso.');
      return redirect('admin/informacaonutricional/'.$infonutri->produtos_id);
    }

    public function destroy($id)
    {
        $infonutri = InformacaoNutricional::find($id);
        $infonutri->delete();
        return [response()->json("success"), redirect('admin/informacaonutricional/'.$infonutri->produtos_id)];
    }
}
