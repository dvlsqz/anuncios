<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncios;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AnunciosFormRequest;
use Illuminate\Support\Facades\Input;
use DB;

class AnunciosController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    if($request){
      $query= trim($request->get('searchText'));
      $anuncios=DB::table('anuncios as a')
      ->select('a.idanuncios', 'a.titulo','a.descripcion','a.imagen','a.precio')
      ->where('a.titulo','LIKE','%'.$query.'%')
      ->orderBy('a.idanuncios','asc')
      ->paginate(12);

      return view('anuncios.index',["anuncios"=>$anuncios,"searchText"=>$query]);
    }
  }

  public function create(){
    return view("anuncios.create");
  }

public function store(AnunciosFormRequest $request /*Request $request*/){
    $anuncio= new Anuncios;
    $anuncio->idanuncios = $request->get('idanuncios');
    $anuncio->titulo = $request->get('titulo');
    $anuncio->descripcion = $request->get('descripcion');
    $anuncio->precio = $request->get('precio');

    if(Input::hasFile('imagen')){
      $file=Input::file('imagen');
      $file->move(public_path().'/imagenes',$file->getClientOriginalName());
      $anuncio->imagen=$file->getClientOriginalName();
    }




    $anuncio->save();
    return Redirect::to('anuncios/');
  }

  public function edit($id){
    return view("anuncios.edit",["anuncio"=>Anuncios::findOrFail($id)]);
  }

  public function update(AnunciosFormRequest $request, $id){

    $anuncio=Anuncios::findOrFail($id);
    $anuncio->titulo = $request->get('titulo');
    $anuncio->descripcion = $request->get('descripcion');
    $anuncio->precio = $request->get('precio');
    $anuncio->update();

    return Redirect::to('anuncios/');
  }

  public function destroy($id){
    $anuncios = DB::table('anuncios')->where('idanuncios', '=',$id)->delete();
    return Redirect::to('anuncios/');
  }
}
