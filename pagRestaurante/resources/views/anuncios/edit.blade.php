@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Anuncio: {{$anuncio->Titulo}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::model($anuncio,['method'=>'PATCH','route'=>['anuncios.update',$anuncio->idanuncios]])!!}
			{{Form::token()}}
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" name="titulo" required value="{{$anuncio->titulo}}" class="form-control" placeholder="Titulo...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" name="descripcion" required value="{{$anuncio->descripcion}}" class="form-control" placeholder="Descripcion...">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="precio">Precio</label>
							<input type="number" name="precio" required value="{{$anuncio->precio}}" class="form-control" step="0.01" min="0">
					</div>
				</div>
			</div>



			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection
