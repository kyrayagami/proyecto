@extends('admin.template.main')

@section('title', 'Conductores')

@section('content')

                               
  <div class="col-xs-9">
    <div>
      <a href="{{ route ('admin.conductores.create')}}" class="btn btn-info">Agregar nuevo Conductor </a>
      <!-- Buscador-->
          {!! Form::open(['route' => 'admin.conductores.index', 'method'=>'GET','class' => 'navbar-form pull-right'])!!}
          <div class="input-group">
          {!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=> 'Buscar conductor...','aria-describedby'=>'search'])!!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>      
          </div>      
          {!! Form::close()!!}
        <!-- Fin del buscador-->
    </div>
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Lista de conductores</h3>
      </div>            
      <div class="box-body table-responsive no-padding">
        <table id="#" class="table table-bordered">          
          <thead>
            <tr>             
             <th>Nombre</th>
             <th>Correo</th>
             <th>Perfil</th>                                   
             <th>Estatus</th>                      
             <th style="width: 100px">Acciones</th> 
            </tr>  
          </thead>              
            <tbody>
              @foreach ($conductores as $conductor )
                <tr>                  
                  <td>{{$conductor->nombre}}</td>
                  <td>{{$conductor->correo}}</td>
                  <td>{{$conductor->perfil}}</td>
                  <td>{{$conductor->estatus}}</td>
                  <td><a href="{{ route('admin.conductores.edit',$conductor->id)}}"class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span></a>

                  <a href="{{ route('admin.conductores.destroy',$conductor->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar esta conductor?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                  </td>
                </tr>
              @endforeach              
            </tbody>
        </table>
      </div>
      <div class="text-center">
          {!! $conductores->render()!!}
      </div>
    </div>      
  </div>
@endsection