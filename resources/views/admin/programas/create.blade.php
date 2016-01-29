@extends('admin.template.main')

@section('title', 'Prueba')

@section('content')

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Nuevo Programa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la nota</h3>
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
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
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
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
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
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Asignar personal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-6">
                      


                <div class="btn-group">
                  <button type="button" class="btn btn-success">Productor:</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">01Productor</a></li>
                    <li><a href="#">Andres Braga Perez</a></li>
                    <li><a href="#">Arturo</a></li>
                    <li><a href="#">Arturo Lupercio</a></li>
                    <li><a href="#">BBC salvaje</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>
                    
            <p></p>
        
                  <div class="btn-group">
                  <button type="button" class="btn btn-success">Conductor:</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">01Conductor</a></li>
                    <li><a href="#">Andrea Barrera</a></li>
                    <li><a href="#">Areceli Carrera</a></li>
                    <li><a href="#">Aremi Aguayo</a></li>
                    <li><a href="#">Artuto Lupercio</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success">???????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                 <div class="btn-group">
                  <button type="button" class="btn btn-success">??????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success">??????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success">??????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success">???????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>

                <p></p>

                
                <div class="btn-group">
                  <button type="button" class="btn btn-success">???????</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">deporte</a></li>
                    <li><a href="#">documental</a></li>
                    <li><a href="#">educativo</a></li>
                    <li><a href="#">entretenimiento</a></li>
                    <li class="divider"></li>
                  </ul>
                </div>



              </div>
            </div>
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

   
@endsection