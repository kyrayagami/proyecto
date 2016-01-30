@extends('admin.template.main')

@section('title', 'Crear nuevo Tag')

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

            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tag:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Agregar Tag">
                </div>
   
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
          </div>
        </div>
      </div>  
@endsection