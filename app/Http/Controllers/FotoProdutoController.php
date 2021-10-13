<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Foto_produtos;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Input;
use DB;
use Image;
use Storage;

class FotoProdutoController extends Controller
{
    public function index(Request $request)
    {
      // $produtos = Produto::all();
      // dd($produtos);
      // $linhas = Linha::all();

      // $linhas = Linha::where('id', '=', $produtos->linha_id)->get();
      $produtos = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->select(['linha.nome as linha_nome', 'produtos.nome as nome','produtos.id as id'])->where('produtos.deleted_at')->get();
      // dd($linhas);
      return view('admin.produtos.index', [
        'produtos'=>$produtos,
        // 'linhas'=>$linhas
      ]);
    }

    public function create()
    {
      $linhas = Linha::all();
      $produtos = Produto::all();

      // return view('admin.produtos.create', compact('produtos'));
      return view('admin.produtos.create', [
      'produtos' => $produtos,
      'linhas' =>$linhas

    ]);
    }

    public function store(Request $request)
    {
        $slug = Self::tirarAcentos(str_replace(" ", "", $request->nome));

        $i = 0;
        if ($request->hasFile('imagem')) {
          foreach($request->file('imagem') as $file){
            $produtos = new Produto;
            $produtos->fill($request->all());
            $image = $file;
            // $extension = $image->getClientOriginalExtension();
            $produtos->nome = $file->getClientOriginalName();
            $filename = $produtos->nome;
            $location = public_path('uploads/produtos/' . $filename);
            Image::make($image)->save($location);
            $produtos->imagem = $filename;
            $produtos->slug = $slug;
            $produtos->save();
            // $i = $i+1;
          }
        }

        // dd($produtos);
        $request->session()->flash('success', 'Produto adicionado com sucesso.');
          return redirect('admin/produto');
    }

    public function tirarAcentos($string)
    {
      return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/","/(\/)/","/(:)/","/(,)/","/(!)/","/(?)/",'/\(|\)/'),explode(" ","a A e E i I o O u U n N c C - - - - "),$string);
    }

    public function edit($id, Request $request)
    {
      $produtos = Produto::findOrFail($id);
      $linhas = Linha::all();
      // $produtos = Produto::all();

      return view('admin.produtos.edit',
      [
        'produtos'=>$produtos,
        'linhas'=>$linhas
      ]);
    }

    public function update(Request $request, $id)
    {
      $produtos = Produto::find($id);

      $slug = Self::tirarAcentos(str_replace(" ", "", $request->nome));

      $produtos->fill($request->all());
      $this->validate($request, array(
      'imagem'        => 'sometimes|image|mimes:png,jpg,jpeg,gif,svg',
      ));
      // dd($produtos);
      if ($request->hasFile('imagem')) {
          $image = $request->file('imagem');
          $filename = $image->getClientOriginalName();
          $location = public_path('uploads/produtos/' . $filename);
          Image::make($image)->save($location);
          // $banners->imagem = $filename;
          if ($produtos->imagem) {
            $oldFilename = $produtos->imagem;
            Storage::delete('uploads/produtos/'.$oldFilename);
          }
          $produtos->imagem = $filename;
      }


      $produtos->slug = $slug;
      // dd($produtos);

      $produtos->save();
      $request->session()->flash('success', 'Produto alterado com sucesso.');
      return redirect('admin/produto');
    }

    public function destroy($id)
    {
        $produtos = Produto::find($id);
        // if ($produtos->imagem) {
          // $oldFilename = $produtos->imagem;
          // dd($produtos->imagem);
          Storage::disk('public')->delete('/uploads/produtos/' . $produtos->imagem);
          // Storage::delete('public/uploads/produtos/'.$produtos->imagem);
        // }

        $produtos->delete();
        return [response()->json("success"), redirect('admin/produtos')];
    }
}
