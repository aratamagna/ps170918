@extends('layouts.bootstrap')

@section('head')
     
<link rel="stylesheet" type="text/css" href="DateTableBootstrap/css/dataTables.bootstrap.css">

               
<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
<!--
<link rel="stylesheet" type="text/css" href="bootJavascript/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootJavascript/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootJavascript/css/dataTables.tableTools.css">
<link rel="stylesheet" type="text/css" href="bootJavascript/css/editor.bootstrap.css">-->
			<style>
 /*table { table-layout: fixed; }
 table th, table td { overflow: hidden; }
 */
 .table td {
   text-align: center;   
}
.table th {
   text-align: center;   
}
/*
table {
    table-layout:fixed;
}
td{
    overflow:hidden;
    text-overflow: ellipsis;
}*/
</style>
@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">
                 <?php
                $cliente_id = Session::get('cliente_id','No ha seleccionado un cliente');
                $sexo1 = Session::get('sexo1','No ha seleccionado un sexo');
                $nac1 = Session::get('nac1','No ha seleccionado una fecha de nacimiento');
                $edad = Session::get('edad','No ha seleccionado una edad');
                $nom1 = Session::get('nom1','No ha seleccionado una edad');
                $apell1 = Session::get('apell1','No ha seleccionado una edad');
                $apell2 = Session::get('apell2','No ha seleccionado una edad');
               $ep_id = Session::get('ep_id','No ha seleccionado ep_id');
               $fecha = Session::get('fechaa','No ha seleccionado fecha');
               //  $hoy = Session::get('hoy','No ha seleccionado una edad');
             /*   echo $cliente_id;
                echo "<br>";
                 echo $ep_id;
                 echo "<br>";
                 echo $fecha;*/
              /*  echo $sexo1;
                echo $nac1;
                echo $edad;
                echo $nom1;
                echo $apell1;
                echo $apell2;
                date_default_timezone_set("America/Santiago");
                $fecha=date('Y-m-d');
                echo date('Y-m-d');
                echo $fecha;
                $hora=date('Y-m-d H:i:s');
                echo $hora;*/
               
                ?>
                              
                
                <center><h2>Rutinas cliente {{{$nom1}}} {{{$apell1}}} {{{$apell2}}}</h2></center>           
                <?php $status=Session::get('status'); ?>
                    @if($status=='ok_create')
                       <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La rutina fue creada con éxito</center></div>
                    @endif
                    @if($status=='ok_delete')
                    <div class="alert alert-danger fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La rutina fue eliminada con éxito</center></div>
                    @endif
                    @if($status=='ok_update')
                    <div class="alert alert-info fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La rutina fue actualizada con éxito</center></div>
                    @endif
                
                    <button type="button" class="btn btn-danger" name="Back2" onClick="rutina()" ><i class="glyphicon glyphicon-arrow-left"></i> Cambiar cliente</button>
                    <!-- Button trigger modal -->
                    <!-- Large modal -->
                    @if(Session::has('errors') and $status=='error1' )
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-exampleabierto-modal-lg"><i class="fa fa-plus-square"></i> Asignar nueva rutina</button>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-examplecerrado-modal-lg"><i class="fa fa-plus-square"></i> Asignar nueva rutina</button>
                    @endif
          
                    <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target=".bs-examplemejorrutina-modal-lg"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Mejor rutina para este cliente</button>
                   
                    <div class="table-responsive">              		
                       <table cellpadding="0" cellspacing="0" border="0" class="display table table-striped table-bordered table-condensed " id="example" >
                           
                            <thead>
                                <tr>
                                    <th>Fecha de asignación de rutina </th>
                                    <th>Hora</th>
                                    <th>Entrenador</th>
                                    <th>Nombre rutina</th>
                                    <th>Objetivo rutina</th>
                                    <th>Comentario</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach($entnombres as $entnombre)
                                <?php
                                $personas = Entnombre::find($entnombre->id)->personas;  //persona no cambia solo entrenamiento, entnombre id (distintos entrenamientos)
                                $datos_entrenador=Persona::where('id','=',$entnombre->pivot->user_id)->get();
                                $entrenamientos=Entrenamiento::where('entnombre_id','=',$entnombre->id)->get();
                                
                               // $entrenamiento = DB::table('entrenamientos')->where('entnombre_id',$entnombre->id)->first();


                              
                                ?>
                                <tr>                                     
                                       
                                 
                                        <td><br>{{$entnombre->pivot->enp_fecha}}</td>         
                                        <td><br>{{$entnombre->pivot->enp_hora}}</td>     <!--Repetición-->
                                        <td>
                                        <br>    
                                        <!--@foreach($personas as $persona)
                                        {{{ $persona->per_nombre }}} {{{ $persona->per_apellidop }}} {{{ $persona->per_apellidom }}}
                                        @endforeach-->
                                        @foreach($datos_entrenador as $persona)
                                         {{{ $persona->per_nombre }}} {{{ $persona->per_apellidop }}} {{{ $persona->per_apellidom }}}
                                        @endforeach 
                                        </td>
                                        <td><br>{{$entnombre->enn_nombre}}</td>
                              
                                        <td><br>
                                            <?php
                                            foreach($entrenamientos as $entrenamiento){
                                            echo $entrenamiento->objetivo->obj_nombre;
                                            break;
                                            }
                                            ?>
                                        </td>
                                        <td><br>{{$entnombre->pivot->enp_comentario}}</td>
                                    

                                        <td>          
                                            @if(Session::has('errors') and $status=='error2' )
                                           <!-- <button type="button" name="#Edit2" id="{{$entnombre->id}}" value="{{$entnombre->pivot->enp_fecha}}" class="edit2 btn btn-info btn-sm" data-toggle="modal" data-target=".bs-exampleeditabierto-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>-->
                                            <button type="button"  class="btn btn-info btn-sm" onClick="return edit2({{$entnombre->id}},{{$entnombre->pivot->enp_fecha}}"  data-toggle="modal" data-target=".bs-exampleeditabierto-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            <!--<input type="submit" name="insert" value="insert" onclick="insert()" />-->
                                            @else
                                            <!--<button type="button" name="#Edit2" id="{{$entnombre->id}}" value="{{$entnombre->pivot->enp_fecha}}" class="edit2 btn btn-info btn-sm" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>-->
                                            <button type="button"  class="btn btn-info btn-sm" onClick="return edit2({{$entnombre->id}},{{$entnombre->pivot->enp_fecha}})" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @endif
                                        </td>
                                 
                                    </tr>  
                                @endforeach  	
                            </tbody>
                              
                        </table>
                    </div>
      
                
                    <!-- Modal -->

                    @if(Session::has('errors') and $status=='error1' )
                    <div class="modal fade bs-exampleabierto-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    @else
                    <div class="modal fade bs-examplecerrado-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    @endif
                        <div class="modal-dialog modal-lg">
                             <form action="registrar_ru" autocomplete="off" method="POST"  class="form-horizontal" id="form" name="form" role="form" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Rutina Cliente  {{{$nom1 }}} {{{$apell1}}} {{{$apell2}}}</h4>
                                    </div> 

                                    <div class="modal-body">
                                        
                                        
                                        <div class="row">   
                                            
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Asignar Rutina</div>
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="nombrerutina" class="col-sm-3 control-label">*Nombre Rutina</label>
                                                        <div class="col-sm-9">
                                                            <div class="selectpicker">
                                                            {{ Form::select('nombrerutina', [null=>''] + $entrenamiento_nombre, Input::old('nombrerutina'),array("class" => "form-control")) }}
                                                            </div>
                                                            <div class="bg-danger">{{$errors->first('nombrerutina')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comentario" class="col-sm-3 control-label">*Comentario</label>
                                                        <div class="col-sm-9">
                                                            {{ Form::textarea('comentario', null, ['size' => '50x4',"class" => "form-control","id"=>"comentario"]) }}
                                                            <div class="bg-danger">{{$errors->first('comentario')}}</div>
                                                        </div>
                                                    </div>  

                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    {{Form::input("hidden", "_token", csrf_token())}}
                                    {{Form::input("submit", null, "Guardar cambios", array("class" => "btn btn-primary"))}}
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div class="modal fade bs-examplemejorrutina-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Rutina Cliente  {{{$nom1 }}} {{{$apell1}}} {{{$apell2}}}</h4>
                                    </div> 

                                    <div class="modal-body">
                                        
                                        
                                        <div class="row">   
                                            
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="panel panel-warning"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Mejor rutina para este cliente</div>
                                                <div class="panel-body">

                                                    <!--<div class="form-group">
                                                        <label for="email"><h4>Bajar de peso: </h4></label>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre"><h4>Crear masa muscular: </h4></label>
                                                        Hipertrofia 1
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidop"><h4>Tonificar el cuerpo: </h4></label>
                                                        
                                                    </div>-->
                                                    
                                                    <div class="table-responsive">              		
                        
                                                        <table class="table  table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Objetivo </th>
                                                                    <th>Nombre Rutina</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>                                     
                                                                    <td>BAJAR DE PESO</td>
                                                                    <td>FITNESS 7</td>
                                                                </tr>
                                                                <tr>                                     
                                                                    <td>CREAR MASA MUSCULAR</td>
                                                                    <td>HIPERTROFIA 1B</td>
                                                                </tr> 
                                                                <tr>                                     
                                                                    <td>TONIFICAR EL CUERPO</td>
                                                                    <td>TONIFICA 4</td>
                                                                </tr> 
                                                            </tbody>
                                                       </table>
                                                    </div>
                                           

                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    {{Form::input("hidden", "_token", csrf_token())}}
                                    </div>

                                </div>
                         
                        </div>
                    </div>
                    
                   
                    @if(Session::has('errors') and $status=='error2' )
                    <div class="modal fade bs-exampleeditabierto-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @else
                    <div class="modal fade bs-exampleeditcerrado-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @endif
                        <div class="modal-dialog modal-lg">
                             <form action="editar_ru" autocomplete="off" method="POST"  class="form-horizontal" id="formEdit" name="form" role="form" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar evaluación Cliente  {{{$nom1 }}} {{{$apell1}}} {{{$apell2}}}</h4>
                                    </div> 

                                    <div class="modal-body">
                                        
                                          <div class="row">   
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Tiempo</div>
                                                <div class="panel-body">


                                                    <div class="form-group">
                                                        <label for="fecha_edit" class="col-sm-4 control-label">*Fecha</label>
                                                        <div class="col-sm-4">
                                                            {{Form::input("date", "fecha_edit", Input::old('fecha_edit'), array("class" => "form-control","id"=>"fecha_edit","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{1})(\w{2})$/, '$1.$2')","onkeyup"=>"calcular_imc()" ,"onchange"=>"calcular_imc"))}}           
                                                            <div class="bg-danger">{{$errors->first('fecha_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="hora_edit" class="col-sm-4 control-label">*Hora</label>
                                                        <div class="col-sm-4">
                                                            {{Form::input("time", "hora_edit", Input::old('hora_edit'), array("class" => "form-control","id"=>"hora_edit","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{2})(\w{1})$/, '$1.$2')","step"=>"1","onkeyup"=>"calcular_imc()" ,"onchange"=>"calcular_imc"))}}           
                                                            <div class="bg-danger">{{$errors->first('hora_edit')}}</div>
                                                       
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="entrenador_edit" class="col-sm-4 control-label">*Entrenador</label>
                                                        <div class="selectpicker col-sm-4">
                                                        {{ Form::select('entrenador_edit',$entrenadores, Input::old('entrenador_edit'),array("class" => "form-control","id"=>"reg_edit")) }}                             
                                                        <div class="bg-danger">{{$errors->first('entrenador_edit')}}</div>
                                                        </div>
                                                    </div>
                                                <!--      @foreach($users as $user)                                                            
                                                      <select>
                                                        <option value="$user->id">{{{$user->persona->per_nombre}}} {{{$user->persona->per_apellidop}}} {{{$user->persona->per_apellidom}}}</option>
                                                      </select>
                                                      @endforeach-->

                                                 

                                                </div>
                                                </div>
                                            </div>
                                          </div>
                                        
                                        
                                        <div class="row">   
                                            
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Editar Rutina</div>
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="nombrerutina_edit" class="col-sm-3 control-label">*Nombre Rutina</label>
                                                        <div class="col-sm-9">
                                                            <div class="selectpicker">
                                                            {{ Form::select('nombrerutina_edit', [null=>''] + $entrenamiento_nombre, Input::old('nombrerutina_edit'),array("class" => "form-control")) }}
                                                            </div>
                                                            <div class="bg-danger">{{$errors->first('nombrerutina_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comentario_edit" class="col-sm-3 control-label">*Comentario</label>
                                                        <div class="col-sm-9">
                                                            {{ Form::textarea('comentario_edit', null, ['size' => '50x4',"class" => "form-control","id"=>"comentario_edit"]) }}
                                                            <div class="bg-danger">{{$errors->first('comentario_edit')}}</div>
                                                        </div>
                                                    </div>  

                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                 
                                        
                                        
                              
                                           
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                     <input type="hidden" name="ep_id" value="">  
                                    {{Form::input("submit", null, "Guardar cambios", array("class" => "btn btn-primary"))}}
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                 
                   
                    
                 
            </div>
        </div>
    </div>
</div>

    @section('java')

                <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" language="javascript" src="DateTableBootstrap/js/dataTables.bootstrap.js"></script>
                
                 <script type="text/javascript" language="javascript" src="DateTableBootstrap/js/datetime-moment.js"></script>
                  <script type="text/javascript" language="javascript" src="DateTableBootstrap/js/moment.min.js"></script>
                   
                
                
                
                
                  <!--<script type="text/javascript" language="javascript" src="bootJavascript/js/bootstrap.min.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/dataTables.bootstrap.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/dataTables.editor.min.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/dataTables.tableTools.min.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/editor.bootstrap.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/jquery-1.11.1.min.js"></script>
                 <script type="text/javascript" language="javascript" src="bootJavascript/js/jquery.dataTables.min.js"></script>
                -->
                              
                
                <script type="text/javascript" charset="utf-8">
			$(document).ready( function() {
                           // $.fn.dataTable.moment( 'DD/MM/AAAA' );
                            $.fn.dataTable.moment( 'D-M-YY' );
                            $('#example').dataTable( {
                             //   "bAutoWidth": false ,
                            //    "aoColumns": [{"sWidth":"60%"},{"sWidth":"20%"},{"sWidth":"20%"}]
                           // "sScrollY": "150px",
                           /*"columns": [
                                { "orderDataType": "dom-text", "type": "date"},
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null,
                                null
                            ],*/
                           "aaSorting": [[ 0, "asc" ]],
                            //"aaSorting": [[ 0, "desc" ]],
                            "pagingType": "full_numbers",
                            "oLanguage": {
                                   "sSearch": "Buscar:",
                                   "sInfo": "Mostrando _START_-_END_ de un total de _TOTAL_ entradas",
                                   "sEmptyTable": "El cliente no tiene rutinas asociadas en el sistema.",
                                   "sInfoEmpty": "Mostrando 0-0 de un total de 0 entradas",
                                   "sInfoFiltered": "(Filtradas de un total de _MAX_ entradas)",
                                   "sLengthMenu": "Mostrar _MENU_ entradas",
                                   "sLoadingRecords": "Cargando...",
                                   "sProcessing": "Procesando...",
                                   "sZeroRecords": "No hay entradas relacionadas con la búsqueda.",
                                   
                            "oPaginate": {
                                   "sNext": ">",
                                   "sPrevious": "<",
                                   "sLast": ">>",
                                   "sFirst": "<<"

                                },
                            "oAria": {
                                   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                }
                                
                              }
                            } );
                          } );
		</script>
                
                <script src="bootstrap/js/bootstrap.js"></script>
 
                <script type="text/javascript">

                        $(function () {
                                $('[data-toggle="tooltip"]').tooltip()
                        })

                        $('#ayuda').tooltip('show')

                        $(function () {
                                $('[data-toggle="popover"]').popover()

                        })


                </script>
        
                <script>
                $(function () { $('.bs-exampleabierto-modal-lg').modal({
                   keyboard: true
                })});
                </script>
                
                <script>
                $(function () { $('.bs-exampleeditabierto-modal-lg').modal({
                   keyboard: true
                })});
                </script>
        
                <script type="text/javascript" src="rut/jquery.Rut.js"></script>
                <script type="text/javascript" src="rut/jquery.Rut.min.js"></script>
                 
                <script language="javascript" type="text/javascript"> 
                    $(document).ready(function() {      
                        $('#email').Rut({
                            format_on: 'keyup'
                          
                    });    
                
                    $('#e').Rut({   
                    on_error: function(){ alert('Rut incorrecto');
                        document.getElementById("form").reset();},
                    });
             
                });       
                </script>
                
                <script type="text/javascript">
                    function completarUsuario()
                    {
                        document.getElementById('u').value=document.getElementById('e').value;
                    }
                </script>
        
                
                <script language="javascript" type="text/javascript"> 
                    $(document).ready(function() {      
                        $('#u').Rut({
                            format_on: 'keyup'
                          
                    });
                });
                </script>            
                
                <script>
                function val(e) {
                    tecla = (document.all) ? e.keyCode : e.which;
                    if (tecla==8) return true;
                    patron =/[0-9kK)]/;
                    te = String.fromCharCode(tecla);
                    return patron.test(te);
                }
                </script>
                
                
            
                
                <script language="javascript" type="text/javascript">
                    function eliminar(id_sup){
	
                        if(confirm("\n\n¿ Está seguro de que desea eliminar la evaluación?"))
                        {
                                window.location="eliminar-rutina/"+id_sup;

                                }
                    }
                </script>
             
                  
            <input id="val" type="hidden" name="entnombre_persona" class="input-block-level" value="" >
             <input id="val" type="hidden" name="fechaa" class="input-block-level" value="" >
            <script>
           
function edit2(entnombre_id,fec){
                    $('[name=entnombre_persona]').val(entnombre_id);
                    $('[name=fechaa]').val(fec);
                   

              
                   var faction = "<?php echo URL::to('capturar_ru'); ?>";

                    var fdata = $('#val').serialize();  //hacer serializacion
                 $('#load').show();//icono cargando
                $.post(faction, fdata, function(json) {
                    if (json.success) {
                   
          
                                    $('#formEdit input[name="ep_id"]').val(json.id);
                                    
                                    $('#formEdit input[name="fecha_edit"]').val(json.fecha);
                                    $('#formEdit input[name="hora_edit"]').val(json.hora);
                                    $('#formEdit select[name="entrenador_edit"]').append('<option value="'+json.entrenador+'" selected="selected">'+json.entrenador+'</option>');
                                    $('#formEdit select[name="nombrerutina_edit"]').append('<option value="'+json.id+'" selected="selected">'+json.id+'</option>');
                                   
                                    $('#formEdit textarea[name="comentario_edit"]').val(json.comentario);                                   
                                    
                                 
                                    $('#load').hide();
                   

                    } else {
                        $('#errorMessage').html(json.message);
                        $('#errorMessage').show();
                     
                    }
                });
            }
          
            </script>
           
            
            <script language="javascript" type="text/javascript">
                    function rutina_clienteesp(id_cli){

                                window.location="rutina_clienteesp/"+id_cli;

                    }
            </script>
            
            
            <!--EVALUACIONCLIENTES.BLADE.PHP -->

             <script>
                function val(altura) {
                    tecla = (document.all) ? altura.keyCode : altura.which;
                    if (tecla==8) return true;
                    patron =/[0-9.)]/;
                    te = String.fromCharCode(tecla);
                    return patron.test(te);
                }
            </script>
            
            <script>
                function format(input)
                {
                    var num = input.value.replace(/\./g,'');
                    if(!isNaN(num)){
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{1})/g,'$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/,'');
                    input.value = num;
                    }

                    else{ alert('Solo se permiten numeros');
                    input.value = input.value.replace(/[^\d\.]*/g,'');
                    }
                }
            </script>
          
            <script language="javascript" type="text/javascript">
                    function rutina(){
                            
                                window.location="rutina";

                    }
            </script>

            
   
            
                     
                     
            
                 
    @stop
    
@stop
