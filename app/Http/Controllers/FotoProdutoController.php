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

// parte a ser implementada - Nathan Albuquerque - 
class UploadImagem{
public $width; // Definida no arquivo index.php, será a largura máxima da nossa imagem
public $height; // Definida no arquivo index.php, será a altura máxima da nossa imagem
protected $tipos = array("jpeg", "png", "gif"); // Nossos tipos de imagem disponíveis para este exemplo

// Função que irá redimensionar nossa imagem
protected function redimensionar($caminho, $nomearquivo){
// Determina as novas dimensões
$width = $this->width;
$height = $this->height;

// Pegamos a largura e altura originais, além do tipo de imagem
list($width_orig, $height_orig, $tipo, $atributo) =
getimagesize($caminho.$nomearquivo);

// Se largura é maior que altura, dividimos a largura determinada pela original e multiplicamos a altura pelo resultado, para manter a proporção da imagem
if($width_orig > $height_orig){
$height = ($width/$width_orig)*$height_orig;
// Se altura é maior que largura, dividimos a altura determinada pela original e multiplicamos a largura pelo resultado, para manter a proporção da imagem
} elseif($width_orig < $height_orig) {
$width = ($height/$height_orig)*$width_orig;
} // -> fim if
// Criando a imagem com o novo tamanho
$novaimagem = imagecreatetruecolor($width, $height);
switch($tipo){

// Se o tipo da imagem for gif
case 1:
// Obtém a imagem gif original
$origem = imagecreatefromgif($caminho.$nomearquivo);
// Copia a imagem original para a imagem com novo tamanho
imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
$height, $width_orig, $height_orig);
// Envia a nova imagem gif para o lugar da antiga
imagegif($novaimagem, $caminho.$nomearquivo);
break;

// Se o tipo da imagem for jpg
case 2:
// Obtém a imagem jpg original
$origem = imagecreatefromjpeg($caminho.$nomearquivo);
// Copia a imagem original para a imagem com novo tamanho
imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
$height, $width_orig, $height_orig);
// Envia a nova imagem jpg para o lugar da antiga
imagejpeg($novaimagem, $caminho.$nomearquivo);
break;

// Se o tipo da imagem for png
case 3:
// Obtém a imagem png original
$origem = imagecreatefrompng($caminho.$nomearquivo);
// Copia a imagem original para a imagem com novo tamanho
imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $width,
$height, $width_orig, $height_orig);
// Envia a nova imagem png para o lugar da antiga
imagepng($novaimagem, $caminho.$nomearquivo);
break;
} // -> fim switch

// Destrói a imagem nova criada e já salva no lugar da original
imagedestroy($novaimagem);
// Destrói a cópia de nossa imagem original
imagedestroy($origem);
} // -> fim function redimensionar()

protected function tirarAcento($texto){
	// array com letras acentuadas
	$com_acento = array('à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í'
	,'î','ï','ñ','ò','ó','ô','õ','ö','ù','ü','ú','ÿ','À','Á','Â','Ã','Ä','Å'
	,'Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','O','Ù','Ü'
	,'Ú','Ÿ',);
	// array com letras correspondentes ao array anterior, porém sem acento
	$sem_acento = array('a','a','a','a','a','a','c','e','e','e','e','i','i',
	'i','i','n','o','o','o','o','o','u','u','u','y','A','A','A','A','A','A',
	'C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','0','U','U',
	'U','Y',);
	// procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
	$final = str_replace($com_acento, $sem_acento, $texto);
	// array com pontuação e acentos
	$com_pontuacao = array('´','`','¨','^','~',' ','-');
	// array com substitutos para o array anterior
	$sem_pontuacao = array('','','','','','_','_');
	// procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
	$final = str_replace($com_pontuacao, $sem_pontuacao, $final);
	// retornamos a variável com nosso texto sem pontuações, acentos e letras acentuadas
	return $final;
} // -> fim function tirarAcento()

// Função que irá fazer o upload da imagem
public function salvar($caminho, $file){

// Retiramos acentos, espaços e hífens do nome da imagem
$file['name'] = $this->tirarAcento(($file['name']));
// Atribuímos caminho e nome da imagem a uma variável apenas
$uploadfile = $caminho.$file['name'];

// Guardamos na variável tipo o formato do arquivo enviado
$tipo = strtolower(end(explode('/', $file['type'])));
// Verifica se a imagem enviada é do tipo jpeg, png ou gif
if (array_search($tipo, $this->tipos) === false) {
$mensagem = "<font color='#F00'>Envie apenas imagens no formato jpeg,
png ou gif!</font>";
return $mensagem;
}

// Se a imagem temporária não for movida para onde a variável com caminho e nome indica, exibiremos uma mensagem de erro
else if (!move_uploaded_file($file['tmp_name'], $uploadfile)) {
switch($file['error']){
case 1:
$mensagem = "<font color='#F00'>O tamanho do arquivo é maior que o
tamanho permitido.</font>";
break;
case 2:
$mensagem = "<font color='#F00'>O tamanho do arquivo é maior que o
tamanho permitido.</font>";
break;
case 3:
$mensagem = "<font color='#F00'>O upload do arquivo foi feito
parcialmente.</font>";
case 4:
$mensagem = "<font color='#F00'>Não foi feito o upload de
arquivo.</font>";
break;
} // -> fim switch

// Se a imagem temporária for movida
} /* -> fim if */ else{

// Pegamos sua largura e altura originais
list($width_orig, $height_orig) = getimagesize($uploadfile);

//Comparamos sua largura e altura originais com as desejadas
if($width_orig > $this->width || $height_orig > $this->height){

// Chamamos a função que redimensiona a imagem
$this->redimensionar($caminho, $file['name']);
} // -> fim if

// Exibiremos uma mensagem de sucesso
$mensagem = "<a href='".$uploadfile."'><font color='#070'>Upload
realizado com sucesso!</font><a>";
} // -> fim else

// Retornamos a mensagem com o erro ou sucesso
return $mensagem;

} // -> fim function salvar()
} // -> fim classe