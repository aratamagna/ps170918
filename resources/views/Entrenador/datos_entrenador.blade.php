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
                <?php
                $nom2 = Session::get('nom2','No ha seleccionado una edad');
                $apell2 = Session::get('apell2','No ha seleccionado una edad');
                $apell_2 = Session::get('apell_2','No ha seleccionado una edad');
                ?>
                
                
                   
                <?php $status=Session::get('status'); ?>
                  <!--  @if($status=='ok_create')
                       <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> El cliente fue creado con éxito</center></div>
                    @endif
                    @if($status=='ok_delete')
                    <div class="alert alert-danger fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> El cliente fue eliminado con éxito</center></div>
                    @endif-->
                    @if($status=='ok_update')
                    <div class="alert alert-info fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> Sus datos fueron actualizados con éxito</center></div>
                    @endif
                
                        
                   <div class="row">
		<div class="col-sm-12">
 
			<div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
			  <div class="panel-heading"><center><h2>Entrenador {{{$nom2}}} {{{$apell2}}} {{{$apell_2}}}</h2></center>   </div>
			  <div class="panel-body">
			       @foreach($users as $user) 
                              <div class="row">     
                                                
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="email"><h4>Rut: </h4></label>
                                                        {{ $user->persona->per_rut }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre"><h4>Nombre: </h4></label>
                                                        {{ $user->persona->per_nombre }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidop"><h4>Apellido Paterno: </h4></label>
                                                        {{ $user->persona->per_apellidop }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidom"><h4>Apellido Materno: </h4></label>
                                                        {{ $user->persona->per_apellidom }}
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="fec"><h4>Fecha de nacimiento: </h4></label>
                                                        {{ $user->persona->per_nac}}
                                                    </div>
                                                
                                                </div>

                                                
                                                <div class="col-md-4">
                                                    
                                                    <div class="form-group">
                                                        <label for="genero"><h4>Sexo: </h4></label>
                                                        {{ $user->persona->sexo->sex_nombre }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="reg"><h4>Región: </h4></label>
                                                        {{ $user->comuna->region->reg_nom }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="com"><h4>Comuna: </h4></label>
                                                        {{ $user->comuna->com_nom}}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion"><h4>Dirección: </h4></label>
                                                        {{ $user->persona->per_direccion }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ndomicilio"><h4>Número de domicilio: </h4></label>
                                                        {{ $user->persona->per_numdirec }}
                                                    </div>
                                                    
                                                </div>


                                                <div class="col-md-4">
                                                    
                                                    <div class="form-group">
                                                        <label for="npiso"><h4>Número de piso: </h4></label>
                                                        {{ $user->persona->per_numpiso }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fono"><h4>Teléfono: </h4></label>
                                                        {{ $user->persona->per_fono1 }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="celu"><h4>Celular: </h4></label>
                                                        {{ $user->persona->per_fono2 }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo"><h4>Email: </h4></label>
                                                        {{ $user->persona->per_correo }}
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="usuario" class="text-primary"><h4>Nombre de Usuario: </h4></label>
                                                        {{ $user->email }}
                                                    </div> 
                                                    
                                                </div>
                                                
                                                
                                                          

                                                
                                        
                                            </div>
                                @endforeach
			  </div>
                          <div class="modal-footer">
                                   @if(Session::has('errors') and $status=='error2' )
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$user->id}}')" data-toggle="modal" data-target=".bs-exampleeditabierto-modal-lg"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @else
                                            <button type="button" class="btn btn-info btn-sm" onClick="editar('{{$user->id}}')" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-lg"><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @endif
                                    </div>
			</div>
 
		</div>
 
 
			</div>
      
                
                    <!-- Modal -->
                    
                   
                    @if(Session::has('errors') and $status=='error2' )
                    <div class="modal fade bs-exampleeditabierto-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @else
                    <div class="modal fade bs-exampleeditcerrado-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @endif
                        <div class="modal-dialog modal-lg">
                            <form action="editar_datos_ent" method="POST" id="formEdit" name="form" role="form" autocomplete="off">
                                
                           
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar evaluación</h4>
                                    </div> 

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">
                                           
                                                
                                                
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <label for="email_edit">*Rut</label>
                                                        {{Form::input("text", "email_edit", Input::old('email_edit'), array("class" => "form-control","id"=>"e","maxlength"=>"12","onkeypress"=>"return val(event)","onchange"=>"completarUsuario();","onkeyup"=>"completarUsuario();", "disabled"=>"disabled"))}}           
                                                        <div class="bg-danger">{{$errors->first('email_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre_edit">*Nombre</label>
                                                        {{Form::input("text", "nombre_edit",Input::old('nombre_edit'), array("class" => "form-control","style"=>"text-transform:uppercase"))}}
                                                        <div class="bg-danger">{{$errors->first('nombre_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidop_edit">*Apellido Paterno</label>
                                                        {{Form::input("text", "apellidop_edit",Input::old('apellidop_edit'), array("class" => "form-control","style"=>"text-transform:uppercase"))}}
                                                        <div class="bg-danger">{{$errors->first('apellidop_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidom_edit">*Apellido Materno</label>
                                                        {{Form::input("text", "apellidom_edit",Input::old('apellidom_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('apellidom_edit')}}</div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="fec_edit">*Fecha de nacimiento</label>
                                                        {{Form::input("date", "fec_edit",Input::old('fec_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('fec_edit')}}</div>
                                                    </div>
                                                
                                                </div>


                                                <div class="col-md-3">
                                                    
                                                    <div class="form-group">
                                                        <label for="genero_edit">*Sexo</label>
                                                        <div class="selectpicker">
                                                        {{ Form::select('genero_edit', [null=>''] + $sexo, Input::old('genero_edit'),array("class" => "form-control")) }}
                                                        </div>
                                                        <div class="bg-danger">{{$errors->first('genero_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="reg_edit">*Región</label>
                                                        <div class="selectpicker">
                                                        {{ Form::select('reg_edit', [null=>''] + $region, Input::old('reg_edit'),array("class" => "form-control","id"=>"reg_edit")) }}
                                                        </div>
                                                        <div class="bg-danger">{{$errors->first('reg_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="com_edit">*Comuna</label>
                                                        {{ Form::select('com_edit', [null=>''], Input::old('com_edit'),array("class" => "form-control","id"=>"com_edit")) }}
                                                        <div class="bg-danger">{{$errors->first('com_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion_edit">*Dirección</label>
                                                        {{Form::input("text", "direccion_edit",Input::old('direccion_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('direccion_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ndomicilio_edit">*Número de domicilio</label>
                                                        {{Form::input("text", "ndomicilio_edit",Input::old('ndomicilio_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('ndomicilio_edit')}}</div>
                                                    </div>
                                                    
                                                </div>


                                                <div class="col-md-3">
                                                    
                                                    <div class="form-group">
                                                        <label for="npiso_edit">Número de piso</label>
                                                        {{Form::input("text", "npiso_edit",Input::old('npiso_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('npiso_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fono_edit">Teléfono</label>
                                                        {{Form::input("text", "fono_edit",Input::old('fono_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('fono_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="celu_edit">Celular</label>
                                                        {{Form::input("text", "celu_edit",Input::old('celu_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('celu_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo_edit">*Email</label>
                                                        {{Form::input("text", "correo_edit",Input::old('correo_edit'), array("class" => "form-control",))}}
                                                        <div class="bg-danger">{{$errors->first('correo_edit')}}</div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="col-md-3">
                                          
                                                    <div class="form-group">
                                                        <label for="usuario_edit" class="text-primary">*Nombre de Usuario</label>
                                                        {{Form::input("text", "usuario_edit",Input::old('usuario_edit'), array("class" => "form-control","id"=>"u"))}}
                                                        <div class="bg-danger">{{$errors->first('usuario_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password_edit" class="text-primary">*Contraseña</label>
                                                        {{Form::input("password", "password_edit",Input::old('password_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('password_edit')}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="repetir_password_edit" class="text-primary">*Repita la Contraseña</label>
                                                        {{Form::input("password", "repetir_password_edit", Input::old('repetir_password_edit'), array("class" => "form-control"))}}
                                                        <div class="bg-danger">{{$errors->first('repetir_password_edit')}}</div>
                                                    </div>
                                                  
                                                </div>                

                                              
                                                
                                            </div>
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <input type="hidden" name="user_id" value="">            
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
                
                
                
                <script>
                $('#reg_edit').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-subcat/' + cat_id, function(data){
                        $('#com_edit').empty();
                            $.each(data, function(evaluacion, subcatObj){
                                $('#com_edit').append('<option value="'+subcatObj.id+'">'+subcatObj.com_nom+'</option>');
                        });
                    });
                });
                </script>
            
                
                <script language="javascript" type="text/javascript">
                    function eliminar(id_sup){
	
                        if(confirm("\n\n¿ Está seguro de que desea eliminar la evaluación?"))
                        {
                                window.location="eliminar-evaluacion/"+id_sup;

                                }
                    }
                </script>
             
                  
            <input id="val" type="hidden" name="user" class="input-block-level" value="" >
            <script language="javascript" type="text/javascript">
                    function editar(id_cli){
	
                          //  $('[name=user]').val($(this).attr ('id'));
                         // $('[name=user]').val($(this).attr ('id_cli'));
                         $('[name=user]').val(id_cli);

                            var faction = "<?php echo URL::to('capturar_cli_eva'); ?>";

                            var fdata = $('#val').serialize();  //hacer serializacion
                            $('#load').show();//icono cargando
                            $.post(faction, fdata, function(json) {
                            if (json.success) {

                                        $('#formEdit input[name="user_id"]').val(json.id);

                                            $('#formEdit input[name="email_edit"]').val(json.email);
                                            $('#formEdit input[name="nombre_edit"]').val(json.nombre);
                                            $('#formEdit input[name="apellidop_edit"]').val(json.apellidop);
                                            $('#formEdit input[name="apellidom_edit"]').val(json.apellidom);
                                            $('#formEdit input[name="fec_edit"]').val(json.fec);
                                            $('#formEdit select[name="genero_edit"]').append('<option value="'+json.genero_id+'" selected="selected">'+json.genero+'</option>');
                                            $('#formEdit select[name="reg_edit"]').append('<option value="'+json.reg_id+'" selected="selected">'+json.reg+'</option>');
                                            $('#formEdit select[name="com_edit"]').append('<option value="'+json.com_id+'" selected="selected">'+json.com+'</option>');
                                            $('#formEdit input[name="direccion_edit"]').val(json.direccion);
                                            $('#formEdit input[name="ndomicilio_edit"]').val(json.ndomicilio);
                                            $('#formEdit input[name="npiso_edit"]').val(json.npiso);
                                            $('#formEdit input[name="fono_edit"]').val(json.fono);
                                            $('#formEdit input[name="celu_edit"]').val(json.celu);
                                            $('#formEdit input[name="correo_edit"]').val(json.correo);
                                            $('#formEdit input[name="usuario_edit"]').val(json.usuario);
                                            $('#formEdit input[name="password_edit"]').val(json.password);
                                            $('#formEdit input[name="repetir_password_edit"]').val(json.repetir_password);


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
