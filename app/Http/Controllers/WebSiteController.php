<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Quemsomos;
use App\Models\Produto;
use App\Models\Linha;
use App\Models\Instagram;
use DB;

use Ayesh\InstagramDownload\InstagramDownload;
use Phpfastcache\Helper\Psr16Adapter;

class WebSiteController extends Controller
{

    public function pagenotfound()
    {
        // $quemsomos = Quemsomos::find(1);
        $noticia = Noticia::all();
          return view('front.index',['noticia'=>$noticia]);
    }

    public function home()
    {
        // $banners = Banner::find(1);
        $quemsomos = Quemsomos::find(1);
        $linhaa = Linha::where('slug')->first();
        $instagram = Instagram::where('deleted_at')->get();
        $linha = DB::table('linha')->distinct('slug')->where('deleted_at', null)->get();
        $produtos = Produto::take(7)->orderBy('id', 'DESC')->get();
        $parceiross = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->join('foto_produtos','produtos.id','=','foto_produtos.produtos_id')->select([ 'produtos.slug as produtos_slug','linha.slug as linha_slug','produtos.imagem as produtos_imagem','foto_produtos.imagem as imagem','produtos.nome as produtos_nome','linha.nome as linha_nome', 'produtos.id as produtos_id'])->where('produtos.deleted_at')->get();
        // dd($parceiross);
        $parceirosss = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->select([ 'produtos.slug as produtos_slug','linha.slug as linha_slug','produtos.imagem','produtos.nome as produtos_nome','linha.nome as linha_nome', 'produtos.id as produtos_id'])->where('produtos.deleted_at')->get();

        // $parceirosss = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->join('parceiros','produtos.parceiros_id','=','parceiros.id')->select('parceiros.slug as parceiros_slug', 'produtos.slug as produtos_slug','linhas.slug as linha_slug','produtos.imagem','produtos.nome as produtos_nome','linhas.nome as linha_nome')->get();
        // // $parceiros = Parceiro::all()->where('imagem', '<>', '');
        // // dd($parceiross);

        // $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'like_dsg', 'like@@like123', new Psr16Adapter('Files'));
        // $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
        // $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        // $media = $instagram->getMedias("oculoscarpediem",10);
        // // dd($media);
        // for ($i=0; $i < 10; $i++) {
        //   $img_ctn = file_get_contents($media[$i]->getImageHighResolutionUrl());
        //   $fp = fopen("uploads/posts/post".$i.".jpg", "w");
        //   fwrite($fp,$img_ctn);
        //   fclose($fp);
        //   $instagram = new Instagram;
        //   $instagram->nome = 'post'.$i.'.jpg';
        //   $instagram->url = $media[$i]->getLink();
        //   $instagram->save();
        // }

        // // dd($parceiross);
        // dd($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

        return view('front.index',[
            // 'banners'=>$banners,
            'quemsomos'=>$quemsomos,
            'linha'=>$linha,
            'produtos'=>$produtos,
            'parceirosss'=>$parceirosss,
            'parceiross'=>$parceiross,
            'crawler'=>$instagram,
        ]);
}

public function produtos()
{
    $linha = Linha::all();
    $parceiross = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->join('foto_produtos','produtos.id','=','foto_produtos.produtos_id')->select([ 'produtos.slug as produtos_slug','linha.slug as linha_slug','produtos.imagem as produtos_imagem','foto_produtos.imagem as imagem','produtos.nome as produtos_nome','linha.nome as linha_nome', 'produtos.id as produtos_id'])->where('produtos.deleted_at')->get();
    $parceirosss = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->select([ 'produtos.slug as produtos_slug','linha.slug as linha_slug','produtos.imagem','produtos.nome as produtos_nome','linha.nome as linha_nome', 'produtos.id as produtos_id'])->where('produtos.deleted_at')->get();
    $quemsomos = Quemsomos::find(1);

    // $parceiros = Parceiro::all()->where('imagem', '<>', '');


    return view('front.listagem', [
      'linha'=>$linha,
      'quemsomos'=>$quemsomos,
        'parceiross'=>$parceiross,

      'parceirosss'=>$parceirosss,
  ]);
}

public function getSingleProduto($linha, $slug)
{
  $linha = Linha::all();
  $parceiross = DB::table('produtos')->join('foto_produtos','produtos.id','=','foto_produtos.produtos_id')->select([ 'produtos.slug as produtos_slug','produtos.imagem as produtos_imagem','foto_produtos.imagem as imagem','produtos.nome as produtos_nome', 'produtos.id as produtos_id'])
  ->where('produtos.deleted_at')->where('produtos.nome','=',$slug)->get();
  $parceirosss = DB::table('produtos')->join('linha','produtos.linha_id','=','linha.id')->select([ 'produtos.slug as produtos_slug','linha.slug as linha_slug','produtos.imagem','produtos.nome as produtos_nome','linha.nome as linha_nome', 'produtos.id as produtos_id'])->where('produtos.deleted_at')->where('produtos.nome','=',$slug)->get();
  $quemsomos = Quemsomos::find(1);

  // $parceiros = Parceiro::all()->where('imagem', '<>', '');

  // dd($parceiross);
  return view('front.produto', [
    'linha'=>$linha,
    'quemsomos'=>$quemsomos,
      'parceiross'=>$parceiross,

    'parceirosss'=>$parceirosss,
]);
}

}
