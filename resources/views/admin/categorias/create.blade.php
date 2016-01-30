@extends('admin.template.main')

@section('content')

@section('title',' Crear nueva Categoria')
@include('admin.template.partials.errors')
  <div class="row">
    <div class="col-md-6">
    <!--
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar Categoria</h3>
        </div>

        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Categoria:</label>
              <input type="text" class="form-control" id="#" placeholder="Agregar Categoria">
            </div>
   
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </form>-->
         {!! Form::open(['route'=> 'admin.categorias.store','method'=> 'POST'])!!}
          <div>
          <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=> 'Nombre de la categoria', 'required'])!!}
          </div>
          </div>
          <div class="form-group">
            {!! Form::submit('Agregar', ['class'=> 'btn btn-primary'])!!}
          </div>
            {!! Form::close()!!}
      </div>
    </div>
  </div>
@endsection