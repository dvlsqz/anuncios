@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Anuncios Creados <a href="anuncios/create"><button class="btn btn-success">Nuevo</button></h3></a>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


				@foreach($anuncios as $a)
				<div class="col-xl-3 col-lg-6">
						 <section class="card">
								 <div class="twt-feed blue-bg">
										 <div class="corner-ribon black-ribon">
												 <i class=""></i>
										 </div>
										 <div class=""></div>

										 <div class="media">
												 <a href="#">
														 <img class="align-self-center rounded-circle mr-3" style="width:100px; height:100px;" alt="" src="{{asset('imagenes/'.$a->imagen)}}">
												 </a>
												 <div class="media-body">
														 <h2 class="text-white display-6">{{$a->titulo}}</h2>
														 <h3 class="text-white display-11">Precio: Q{{$a->precio}}</h3>
														 <p class="text-black" >{{$a->descripcion}}</p>
												 </div>
										 </div>
								 </div>


								 <footer class="twt-footer">

										 <span class="pull-right">
											 <a href="{{URL::action('AnunciosController@edit', $a->idanuncios)}}">
				 								<button class="btn btn-info fa fa-edit"></button>
				 							</a>
											 <a href="" data-target="#modal-delete-{{$a->idanuncios}}" data-toggle="modal">
												 <button class="btn btn-danger fa  fa-trash-o"></button>
											 </a>
												 <b class="text-black">Anuncio Publicado <i class="fa  fa-check-circle"></i> </b>
										 </span>
								 </footer>
						 </section>
				 </div>
				 	@include('anuncios.modal')
				@endforeach


	</div>
	{{$anuncios->render()}}
</div>
@endsection
