@extends('admin.template.main')

@section('title', 'Prueba')

@section('content')

 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements  no borrar -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Modificar Datos del Conductor</h3>
            </div>

            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mail:</label>
                  <input type="text" class="form-control" id="#" placeholder="Correo eletronico">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre del Comductor:</label>
                  <input type="text" class="form-control" id="#" placeholder="Nombre">
                </div>
                <div>
                <div>
                  <label for="exampleInputEmail1">Biografía:</label>
                </div>
                  <textarea rows="11" cols="107"></textarea>
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
  </section>
   
@endsection