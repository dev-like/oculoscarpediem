<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Parceiro;
use App\Models\Linha;
use Illuminate\Http\Request;

use Image;
use Storage;

class ParceiroController extends Controller
{
    public function index()
    {
      $parceiro = Parceiro::all();
      return view('admin.parceiro.index', ['parceiro' => $parceiro]);
    }

    public function create()
    {
      return view('admin.parceiros.index');
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'imagem' => 'sometimes|image|mimes:jpeg,png,jpg',
      ));

        $parceiro = new Parceiro;
        $slug = Self::tirarAcentos(str_replace(" ", "", $request->nome));
        if ($request->hasFile('imagem')) {
          $image = $request->file('imagem');
          $filename = time() . '.' . $image->getClientOriginalName();
          $location = public_path('uploads/parceiro/' . $filename);
          Image::make($image)->save($location);
          $parceiro->imagem = $filename;
        }
        $parceiro->nome = $request->nome;
        $parceiro->slug = $slug;
        $parceiro->save();

        $request->session()->flash('success', 'Parceiro cadastrado com sucesso !');
        return redirect('admin/parceiro')->with('flash_message', 'Parceiro cadastrado com sucesso !');
    }

    public function edit($id)
    {
      $parceiro = Parceiro::findOrFail($id);
      return view('admin.parceiro.edit', [
        'parceiro'=>$parceiro,

      ]);
    }

    public function update(Request $request, $id)
    {
      $parceiro = Parceiro::find($id);
      $parceiro->fill($request->all());
      $slug = Self::tirarAcentos(str_replace(" ", "", $request->nome));

      if ($request->hasFile('imagem')) {
        $image = $request->file('imagem');
        $filename = time() . '.' . $image->getClientOriginalName();
        $location = public_path('uploads/parceiro/' . $filename);
        Image::make($image)->save($location);
        if ($parceiro->imagem) {
          $oldFilename = $parceiro->imagem;
          Storage::delete('uploads/parceiro/'.$oldFilename);
        }
        $parceiro->imagem = $filename;
      }
      $parceiro->slug = $slug;

      // dd($parceiro);
      $parceiro->save();

      $request->session()->flash('success', 'Parceiro modificado com sucesso.');
      return redirect('admin/parceiro')->with('flash_message', 'Parceiro alterado com sucesso !');
    }

    public function destroy($id)
    {
      $parceiro = Parceiro::find($id)->delete();
      return [response()->json("success"), redirect('admin/parceiros')];
    }
    public function tirarAcentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç)/","/(ç)/"), explode(" ", "a A e E i I o O u U n N C c"), $string);
    }
}
