@extends('admin.template.main')

@section('content')

@section('title',' Crear nueva Categoria')

<section class="content">
  <div class="row">
    <div class="col-md-6">
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
        </form>
      </div>
    </div>
  </div>
</section>

   
@endsection