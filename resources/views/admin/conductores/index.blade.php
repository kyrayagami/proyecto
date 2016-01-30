@extends('admin.template.main')

@section('title', 'Conductores')

@section('content')

                               
  <div class="col-xs-9">
    <div>
      <a href="{{ route ('admin.conductores.create')}}" class="btn btn-info">Agregar nuevo Conductor </a>
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
             <th>ID</th>
             <th>Nombre</th>
             <th>Correo</th>
             <th>Perfil</th>                                   
             <th>Estatus</th>                      
             <th>Acciones</th> 
            </tr>  
          </thead>              
            <tbody>
              @foreach ($conductores as $conductor )
                <tr>
                  <td>{{$conductor->id}}</td>
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