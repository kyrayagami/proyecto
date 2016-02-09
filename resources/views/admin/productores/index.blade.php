@extends('admin.template.main')

@section('title', 'Productores')

@section('content')
  <div class="col-xs-9">
    <div>
      <a href="{{ route('admin.productores.create')}}" class="btn btn-success">Agregar nuevo Productor</a>
      <!-- Buscador-->
          {!! Form::open(['route' => 'admin.productores.index', 'method'=>'GET','class' => 'navbar-form pull-right'])!!}
          <div class="input-group">
          {!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=> 'Buscar productor...','aria-describedby'=>'search'])!!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>      
          </div>      
          {!! Form::close()!!}
        <!-- Fin del buscador-->
    </div>
  </div>        
  <div class="col-xs-12"> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Productores</h3>              
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
              @foreach ($productores as $productor )
                <tr>
                  <td>{{$productor->id}}</td>
                  <td>{{$productor->nombre}}</td>
                  <td>{{$productor->correo}}</td>
                  <td>{{$productor->perfil}}</td>
                  <td>{{$productor->estatus}}</td>
                  <td><a href="{{ route('admin.productores.edit',$productor->id)}}"class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span></a>

                  <a href="{{ route('admin.productores.destroy',$productor->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar esta productor?')"> <span class=" glyphicon glyphicon-remove-circle"></span> </a>
                  </td>
                </tr>
              @endforeach
                           
          </tbody>
        </table>
      </div>
        <div class="text-center">
          {!! $productores->render()!!}
        </div>
    </div>      
  </div>
@endsection