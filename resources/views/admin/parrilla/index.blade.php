@extends('admin.template.main')

@section('title', 'Parrila')

@section('content')  
  <section class="content">    
      <div class="row">
        <div class="col-xs-3">                     
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Semana</h4>

            </div>
            <div class="box-body">
              <!-- the events -->

                  <div id="external-events">
                    <form method="post" action="" id="frm_dias" name="frm_dias" >
                      <button id="#" type="button" class="btn btn-block bg-yellow btn-default">Domingo</button>
                      <button id="#" type="button" class="btn btn-block bg-green btn-default">Lunes</button>   
                      <button id="#" type="button" class="btn btn-block bg-aqua btn-default">Martes</button>
                      <button id="#" type="button" class="btn btn-block bg-light-blue btn-default">Miercoles</button>
                      <button id="#" type="button" class="btn btn-block bg-red btn-default">Jueves</button>
                      <button id="#" type="button" class="btn btn-block bg-purple btn-default">Viernes</button>
                      <button id="#" type="button" class="btn btn-block bg-orange btn-default">Sabado</button>    
                    </form>                                                      
                  </div>
 
            </div>
            <!-- /.box-body -->
          </div> 
        </div>
        <div class="col-xs-9"> 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Horarios</h3>
               <div class="box-tools">
              </div>
            </div>        
            <div class="box-body table-responsive no-padding">                          
              <table cellpadding="0" cellspacing="0" align="center"  border="0" width="680">
                <tbody>
                  <tr>
                  <td align="left" valign="top" width="670">
                    <div id="page-wrap" align="center"> 
                      <div id="example-one" align="center">              
                        <ul class="nav">
                          <li class="espacio-nav">&nbsp;</li>
                          <li class="nav-one"><a href="#manana">MAÑANA</a></li>
                          <li class="nav-two"><a href="#tarde" class="current" >TARDE</a></li>
                          <li class="nav-three"><a href="#noche">NOCHE</a></li>                                                               
                        </ul>   


                        <div id="prueba" align="center">      
                          <div class="list-wrap" align="center">                            
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="manana" >
                                                   
                            </ul>                        
                            <!--- tarde -->
                            <ul id="tarde">
                    
                          
                            </ul>  
                            <!--- noche -->     
                            <ul style="position: relative; top: 0px; left: 0px; display: none;" id="noche" >
                             
                              <!---->
                            </ul>
                          </div> <!-- END List Wrap -->    
                        </div> <!-- prueba -->
                      </div> <!-- END Organic Tabs (Example One) -->                                  
                    </div>
                  </td>
                  </tr>
                </tbody>              
              </table>                
            </div>                    
          <!-- box -->
        </div>
      </div>
    </section>

@endsection