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




                <center><h2>Gestion Comuna</h2></center>
                <?php $status=Session::get('status'); ?>
                    @if($status=='ok_create')
                       <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La comuna fue creada con éxito</center></div>
                    @endif
                    @if($status=='ok_delete')
                    <div class="alert alert-danger fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La comuna fue eliminada con éxito</center></div>
                    @endif
                    @if($status=='ok_update')
                    <div class="alert alert-info fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La comuna fue actualizada con éxito</center></div>
                    @endif

                    <!-- Button trigger modal -->
                    <!-- Large modal -->
                    @if(Session::has('errors') and $status=='error1' )
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-exampleabierto-modal-sm"><i class="fa fa-plus-square"></i> Nueva comuna</button>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-examplecerrado-modal-sm"><i class="fa fa-plus-square"></i> Nueva comuna</button>
                    @endif

                    <div class="table-responsive">
                       <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">

                            <thead>
                                <tr>
                                    <th>Comuna</th>
                                    <th>Región</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--asignamos a un bucle de array $users a $user-->
                                @foreach($comunas as $comuna)
                                    <tr>
                                        <td><br>{{ $comuna->com_nom }}</td>
                                        <td><br>{{ $comuna->region->reg_nom }}</td>
                                        <td><center>
                                            @if(Session::has('errors') and $status=='error2' )
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$comuna->id}}')" data-toggle="modal" data-target=".bs-exampleeditabierto-modal-sm"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @else
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$comuna->id}}')" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-sm"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @endif
                                        </center></td>

                                        <td><center>
                                            <button type="button" class="btn btn-sm btn-danger" onClick="eliminar('{{$comuna->id}}')"><i class="icon-trash"> Eliminar</i></button>
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
                            <form action="registrar_com" method="POST" id="form" name="form" autocomplete="off">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Registrar comuna</h4>
                                    </div>

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">



                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="com_nom">*Comuna</label>
                                                        {{Form::input("text", "com_nom", Input::old('com_nom'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('com_nom')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="reg">*Región</label>
                                                        <div class="selectpicker">
                                                {{ Form::select('reg', [null=>''] + $region, Input::old('reg'),array("class" => "form-control","id"=>"reg")) }}
                                    <!--      <select name="reg">
                                            @foreach (region as reg)
                                                <option value="{{ reg->id }}">{{ reg->name }}</option>
                                            @endforeach
                                        </select>-->
                                                        </div>
                                                        <div class="bg-danger">{{$errors->first('reg')}}</div>
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
                            <form action="editar_com" method="POST" id="formEdit" name="form" role="form" autocomplete="off" >


                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar comuna</h4>
                                    </div>

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">



                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="com_nom_edit">*Comuna</label>
                                                        {{Form::input("text", "com_nom_edit", Input::old('com_nom_edit'), array("class" => "form-control","id"=>"com_nom_edit"))}}
                                                        <div class="bg-danger">{{$errors->first('com_nom_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="region_edit">*Región</label>
                                                        {{Form::input("text", "region_edit",Input::old('region_edit'), array("class" => "form-control","style"=>"text-transform:uppercase","disabled"=>"disabled","id"=>"region_edit"))}}
                                                        <div class="bg-danger">{{$errors->first('region_edit')}}</div>
                                                    </div>


                                                </div>



                                            </div>
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <input type="hidden" name="comuna_id" value="">
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
                    function eliminar(id_com){

                        if(confirm("\n\n¿ Está seguro de que desea eliminar comuna?"))
                        {
                                window.location="eliminar-comuna/"+id_com;

                                }
                    }
                </script>

                <input id="val" type="hidden" name="comuna" class="input-block-level" value="" >
                <script>

                    function editar(id_com){
                        $('[name=comuna]').val(id_com);


                       var faction = "<?php echo URL::to('capturar_com'); ?>";

                        var fdata = $('#val').serialize();  //hacer serializacion
                     $('#load').show();//icono cargando
                    $.post(faction, fdata, function(json) {
                        if (json.success) {

                                    $('#formEdit input[name="comuna_id"]').val(json.id);

                                        $('#formEdit input[id="com_nom_edit"]').val(json.comuna);
                                        $('#formEdit input[id="region_edit"]').val(json.region);



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
