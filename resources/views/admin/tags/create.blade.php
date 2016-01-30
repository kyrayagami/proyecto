@extends('admin.template.main')

@section('title', 'Tag')

@section('content')
@include('admin.template.partials.errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Tag</h3>
            </div>

          {!! Form::open(['route'=> 'admin.tags.store','method'=> 'POST'])!!}
          <div>
          <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=> 'Nombre del Tag  ', 'required'])!!}
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