@extends('admin.template.main')

@section('title', 'Tags')

@section('content')
<div class="col-xs-9">
      <div>          
          <a href="{{ route('admin.tags.create')}}" class="btn btn-primary"> Agregar nuevo tag</a>
      </div>
    </div>        
    <div class="col-xs-12"> 
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de tags</h3>
        </div>            
        <div class="box-body table-responsive no-padding">
          <table id="ttag" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>                    
                <th>Nombre</th>
                <th>Acciones</th> 
              </tr>  
            </thead>              
              <tbody>
                  @foreach ($tags as $tag)
                      <tr>
                          <td>{{$tag->id}}</td>
                          <td>{{$tag->nombre}}</td>
                          <td><a href="{{route('admin.tags.edit', $tag->id)}}" class="btn btn-warning">  <span class="glyphicon glyphicon-pencil"></span></a>

                          <a href="{{route('admin.tags.destroy', $tag->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro de eliminar este Tag?')">  <span class="glyphicon glyphicon-remove-circle"></span></a>
                          </td>
                      </tr>                    
                  @endforeach
              </tbody>
          </table>
          <div class="text-center">
            {!! $tags->render()!!}
          </div>          
        </div>
      </div>        
    </div>      
   
@endsection