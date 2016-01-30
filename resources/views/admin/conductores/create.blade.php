@extends('admin.template.main')

@section('title', 'Agregar nuevo Conductor')

@section('content')    
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Conductor</h3>
            </div>

            
              <div class="box-body">  
              <!--              
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre del Comductor:</label>
                  <input type="text" class="form-control" id="#" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mail:</label>
                  <input type="text" class="form-control" id="#" placeholder="Correo eletronico">
                </div>
                <div>
                  <div>
                    <label for="exampleInputEmail1">Perfil:</label>
                  </div>
                  <textarea class="form-control textarea-content"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Fotografia</label>
                  <input type="file" id="#">
                </div>
                <div class="checkbox">
              
                </div>
              </div>
              -->
              <!-- /.box-body -->
              {!! Form::open(['route' => 'admin.conductores.store', 'method' => 'POST','files' => true])!!}
                <div class="form-group">
              {!! Form::label('nombre','Nombre')!!}
              {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=> 'Nombre del Conductor','required'])!!}
              </div>           
              <div class="form-group">
                  {!! Form::label('correo','Correo Electronico')!!}
                  {!! Form::email('correo',null,['class' => 'form-control','placeholder' => 'example@gmail.com','required'])!!}
              </div>

              <div class="form-group">
              {!! Form::label('perfil','Contenido')!!}
              {!! Form::textarea('perfil',null,['class' => 'form-control textarea-content'])!!}      
              </div>              
              <div class="form-group">
              {!! Form::label('imagen_url','Imagen')!!}
              {!! Form::text('imagen_url')  !!}
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
              {!! Form::close()!!}
            
          </div>
        </div>
      </div>
   
@endsection