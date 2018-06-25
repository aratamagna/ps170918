@extends('layouts.bootstrap')

@section('head')
     
<link rel="stylesheet" type="text/css" href="DateTableBootstrap/css/dataTables.bootstrap.css">

<style>
.table td {
text-align: center;   
}
.table th {
   text-align: center;   
}
</style>
@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">
                
                
                
                
                <center><h2>Gestion Grupo Muscular</h2></center>           
                <?php $status=Session::get('status'); ?>
                    @if($status=='ok_create')
                       <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> El grupo muscular fue creado con éxito</center></div>
                    @endif
                    @if($status=='ok_delete')
                    <div class="alert alert-danger fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> El grupo muscular fue eliminado con éxito</center></div>
                    @endif
                    @if($status=='ok_update')
                    <div class="alert alert-info fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> El grupo muscular fue actualizado con éxito</center></div>
                    @endif
                
                    <!-- Button trigger modal -->
                    <!-- Large modal -->
                    @if(Session::has('errors') and $status=='error1' )
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-exampleabierto-modal-sm"><i class="fa fa-plus-square"></i> Nuevo grupo muscular</button>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-examplecerrado-modal-sm"><i class="fa fa-plus-square"></i> Nuevo grupo muscular</button>
                    @endif

                    <div class="table-responsive">              		
                       <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
                           
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                  
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--asignamos a un bucle de array $users a $user-->
                                @foreach($grupomusculares as $grupomuscular)
                                    <tr>
                                        <td><br>{{ $grupomuscular->grm_cod }}</td>
                                        <td><br>{{ $grupomuscular->grm_nombre }}</td>
                               
                                        <td><center>          
                                            @if(Session::has('errors') and $status=='error2' )
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$grupomuscular->id}}')" data-toggle="modal" data-target=".bs-exampleeditabierto-modal-sm"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @else
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$grupomuscular->id}}')" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-sm"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @endif
                                        </center></td>
                                        <td><center>
                                            <button type="button" class="btn btn-sm btn-danger" onClick="eliminar('{{$grupomuscular->id}}')"><i class="icon-trash"> Eliminar</i></button>
                                        </center></td>
                                    </tr>  
                                @endforeach  	
                            </tbody>
                              
                        </table>
                    </div>
      
                
                    <!-- Modal -->

                    @if(Session::has('errors') and $status=='error1' )
                    <div class="modal fade bs-exampleabierto-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    @else
                    <div class="modal fade bs-examplecerrado-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    @endif
                        <div class="modal-dialog modal-sm">
                            <form action="registrar_grupmus" method="POST" id="form" name="form" autocomplete="off" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Registrar grupo muscular</h4>
                                    </div> 

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">
                                                
                                                
                                                
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="codigo">*Código</label>
                                                        {{Form::input("text", "codigo", Input::old('codigo'), array("class" => "form-control"))}}           
                                                        <div class="bg-danger">{{$errors->first('codigo')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre">*Nombre</label>
                                                        {{Form::input("text", "nombre",Input::old('nombre'), array("class" => "form-control","onblur"=>"upperCase()","onKeyUp"=>"this.value = this.value.toUpperCase();"))}}
                                                        <div class="bg-danger">{{$errors->first('nombre')}}</div>
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
                    
                   
                    @if(Session::has('errors') and $status=='error2' )
                    <div class="modal fade bs-exampleeditabierto-modal-sm" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @else
                    <div class="modal fade bs-exampleeditcerrado-modal-sm" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @endif
                        <div class="modal-dialog modal-sm">
                            <form action="editar_grupmus" method="POST" id="formEdit" name="form" role="form" autocomplete="off" >
                                
                           
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar grupo muscular</h4>
                                    </div> 

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">
                                           
                                                
                                                
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="codigo_edit">*Código</label>
                                                        {{Form::input("text", "codigo_edit", Input::old('codigo_edit'), array("class" => "form-control","disabled"=>"disabled"))}}           
                                                        <div class="bg-danger">{{$errors->first('codigo_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre_edit">*Nombre</label>
                                                        {{Form::input("text", "nombre_edit",Input::old('nombre_edit'), array("class" => "form-control","style"=>"text-transform:uppercase"))}}
                                                        <div class="bg-danger">{{$errors->first('nombre_edit')}}</div>
                                                    </div>
                                                  
                                                </div>
            
                                  
                                                
                                            </div>
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <input type="hidden" name="grupomuscular_id" value="">     
                                    {{Form::input("submit", null, "Guardar", array("class" => "btn btn-primary"))}}
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
                                       
                <script type="text/javascript" charset="utf-8">
			$(document).ready( function() {
                            $('#example').dataTable( {
                                 "pagingType": "full_numbers",
                            "oLanguage": {
                                   "sSearch": "Buscar:",
                                   "sInfo": "Mostrando _START_-_END_ de un total de _TOTAL_ entradas",
                                   "sEmptyTable": "No hay datos disponibles en la tabla.",
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
        
                <script>
                $(function () { $('.bs-exampleabierto-modal-sm').modal({
                   keyboard: true
                })});
                </script>
                
                <script>
                $(function () { $('.bs-exampleeditabierto-modal-sm').modal({
                   keyboard: true
                })});
                </script>
                
                <script language="javascript" type="text/javascript">
                    function eliminar(id_grupomuscular){
	
                        if(confirm("\n\n¿ Está seguro de que desea eliminar el grupo muscular?"))
                        {
                            window.location="eliminar-grupomuscular/"+id_grupomuscular;
                        }
                    }
                </script>
                             
                <input id="val" type="hidden" name="grupomuscular" class="input-block-level" value="" >
                <script>
              
                    function editar(id_grupmus){
                   
                         $('[name=grupomuscular]').val(id_grupmus);


                       var faction = "<?php echo URL::to('capturar_grupmus'); ?>";

                        var fdata = $('#val').serialize();  //hacer serializacion
                     $('#load').show();//icono cargando
                    $.post(faction, fdata, function(json) {
                        if (json.success) {

                                    $('#formEdit input[name="grupomuscular_id"]').val(json.id);

                                        $('#formEdit input[name="codigo_edit"]').val(json.codigo);
                                        $('#formEdit input[name="nombre_edit"]').val(json.nombre);



                                        $('#load').hide();

                        } else {
                            $('#errorMessage').html(json.message);
                            $('#errorMessage').show();

                        }
                    });

}
                </script>
                                       
    @stop
    
@stop
