@extends('admin.template.main')

@section('title', 'Prueba')

@section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Datos del Programa</h3>
            </div>

            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre DEL PROGRAMA:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomnbre del programa">
                </div>
                <div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mail DEL PROGRAMA:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Correo eletronico del programa">
                </div>
                </div>

                <div class="form-group">
                <div class="form-group"></div>
                <div class="btn-group">
                  <button type="button" class="btn btn-warning">Prioridad</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">1</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>
                </div>

              <div class="form-group">
                <div class="form-group"></div>
                <div class="btn-group">
                  <button type="button" class="btn btn-success">Categoria</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Imágen del Slide (704px x 240px)</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imágen del programa (315px x 100px)</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imágen principal del Programa (1000px x 275px)</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Banner de programas anteriores y fotografias </label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile"> Banner del programa (1020px x 100px)</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Logo del programa (330px x 310px)</label>
                  <input type="file" id="exampleInputFile">
                </div>


                <div class="form-group">
                  <label for="exampleInputFile">Imagen de la nota (Cancun:655px*270px,Plazas: 200px*100px )</label>
                  <input type="file" id="exampleInputFile">
                </div>

                <div>
                <div>
                  <label for="exampleInputEmail1">Biografía:</label>
                </div>
                  <textarea rows="7" cols="50"></textarea>
                </div>
                <div>
                <div>
                  <label for="exampleInputEmail1">Biografía:</label>
                </div>
                  <textarea rows="8" cols="80"></textarea>
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
        
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Asignar personal</h3>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-6">
                      
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
</section>	


   
@endsection