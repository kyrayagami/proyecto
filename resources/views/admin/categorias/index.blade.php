@extends('admin.template.main')

@section('title', 'Categorias')

@section('content')                                
    <div class="col-xs-12">
      <div>          
          <a href="{{ route('admin.categorias.create')}}" class="btn btn-primary"> Agregar nueva categoria</a>
          <!-- Buscador-->
          {!! Form::open(['route' => 'admin.categorias.index', 'method'=>'GET','class' => 'navbar-form pull-right'])!!}
          <div class="input-group">
          {!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=> 'Buscar categorias...','aria-describedby'=>'search'])!!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>      
          </div>      
          {!! Form::close()!!}
        <!-- Fin del buscador-->
      </div>
    </div>        
    <div class="col-xs-12"> 
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de categorias</h3>
        </div>            
        <div class="box-body table-responsive no-padding">
          <table id="tcategoria" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>                    
                <th>Nombre</th>
                <th>Acciones</th> 
              </tr>  
            </thead>              
              <tbody>
                  @foreach ($categorias as $categoria)
                      <tr>
                          <td>{{$categoria->id}}</td>
                          <td>{{$categoria->nombre}}</td>
                          <td><a href="{{route('admin.categorias.edit', $categoria->id)}}" class="btn btn-warning">  <span class="glyphicon glyphicon-pencil"></span></a>

                          <a href="{{route('admin.categorias.destroy', $categoria->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar esta categoria?')">  <span class="glyphicon glyphicon-remove-circle"></span></a>
                          </td>
                      </tr>                    
                  @endforeach
              </tbody>
          </table>                  
        </div>
         <div class="text-center">
            {!! $categorias->render()!!}
          </div>
      </div>        
    </div>                                  
@endsection