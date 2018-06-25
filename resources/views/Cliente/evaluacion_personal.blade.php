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
               //  $hoy = Session::get('hoy','No ha seleccionado una edad');
             /*   echo $cliente_id;
                echo $sexo1;
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
                echo $hora;
               */
                ?>
                              
                
                <center><h2>Evaluaciones cliente {{{$nom1}}} {{{$apell1}}} {{{$apell2}}}</h2></center>           
                <?php $status=Session::get('status'); ?>
                    @if($status=='ok_create')
                       <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La evaluación fue creada con éxito</center></div>
                    @endif
                    @if($status=='ok_delete')
                    <div class="alert alert-danger fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La evaluación fue eliminada con éxito</center></div>
                    @endif
                    @if($status=='ok_update')
                    <div class="alert alert-info fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                        <center> La evaluación fue actualizada con éxito</center></div>
                    @endif
                
                   <!-- <button type="button" class="btn btn-danger" name="Back2" onClick="evaluacion()" ><i class="glyphicon glyphicon-arrow-left"></i> Cambiar cliente</button>-->
                    <!-- Button trigger modal -->
                    <!-- Large modal -->
               <!--     @if(Session::has('errors') and $status=='error1' )
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-exampleabierto-modal-lg"><i class="fa fa-plus-square"></i> Nueva evaluación</button>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-examplecerrado-modal-lg"><i class="fa fa-plus-square"></i> Nueva evaluación</button>
                    @endif-->

                    <div class="table-responsive">              		
                      <!-- <table cellpadding="0" cellspacing="0" border="0" class="display table table-striped table-bordered table-condensed " id="example" width="120%">-->
                           <table cellpadding="0" cellspacing="0" border="0" class="display table table-striped table-bordered table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th>Fecha de evaluación </th>
                                    <th>Hora</th>
                                    <th>Entrenador</th>
                                    <th>Altura</th>
                                    <th>Peso</th>
                                    <th>Imc</th>
                                    <th>Imc Resultado</th>                      
                                    <th>Tricipal</th>
                                    <th>Bicipital</th>
                                    <th>Subescapular</th>
                                    <th>Suprailiaco</th>
                                    <th>Suma de pliegues</th>
                                    <th>Porcentaje de grasa(%)</th>
                                    <th>Masa grasa(kg)</th>
                                    <th>Masa libre de grasa(kg)</th>
                                    <th>Brazos (cm)</th>
                                    <th>Cintura (cm)</th>
                                    <th>Cadera (cm)</th>
                                    <th>Indice cc</th>
                                    <th>CC-Resultado</th>
                                   <!-- <th></th>-->
                                   <!-- <th></th>-->
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach($evaluacion_basicas as $evaluacion_basica)
                                    <tr>                                     
                                       
                                        <?php
                                 //       $fecha = date("d-m-Y", strtotime($evaluacion_basica->evb_fecha));
                                        ?>
                                        <td><br>{{$evaluacion_basica->evb_fecha}}</td>         
                                      
                                        <td><br>{{ $evaluacion_basica->evb_hora }}</td>
                                        <td>{{{ $evaluacion_basica->user->persona->per_nombre }}} {{{ $evaluacion_basica->user->persona->per_apellidop }}} {{{ $evaluacion_basica->user->persona->per_apellidom }}}</td>
                                        <td><br>{{ $evaluacion_basica->evb_altura }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_peso }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_imc }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_imc_resul }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_tricipital }}</td>                             
                                        <td><br>{{ $evaluacion_basica->evb_bicipital }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_subescapular }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_suprailiaco }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_suma_pliegues }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_grasa }} %</td>
                                        <td><br>{{ $evaluacion_basica->evb_masa_grasa }} kg</td>
                                        <td><br>{{ $evaluacion_basica->evb_masa_libre_grasa }} kg</td>
                                        <td><br>{{ $evaluacion_basica->evb_brazos }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_cintura }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_cadera }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_indicecc }}</td>
                                        <td><br>{{ $evaluacion_basica->evb_indicecc_resul }}</td>
                                     
                                    

                                        
                                    <!--    <td>          
                                            @if(Session::has('errors') and $status=='error2' )
                                            <button type="button" name="#Edit2" id="{{$evaluacion_basica->id}}"  class="edit2 btn btn-info btn-sm" data-toggle="modal" data-target=".bs-exampleeditabierto-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @else
                                            <button type="button" name="#Edit2" id="{{$evaluacion_basica->id}}"  class="edit2 btn btn-info btn-sm" data-toggle="modal" data-target=".bs-exampleeditcerrado-modal-lg" ><i class="fa fa-pencil-square-o"> Editar</i></button>
                                            @endif
                                        </td>-->
                                      <!--  <td>
                                            <button type="button" class="btn btn-sm btn-danger" onClick="eliminar('{{$evaluacion_basica->id}}')"><i class="icon-trash"> Eliminar</i></button>
                                        </td>-->
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
                             <form action="registrar_eb" autocomplete="off" method="POST"  class="form-horizontal" id="form" name="form" role="form" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Evaluación Cliente  {{{$nom1 }}} {{{$apell1}}} {{{$apell2}}}</h4>
                                    </div> 

                                    <div class="modal-body">
                                        
                                        <div class="row">
                                            
                                            
                                            <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Evaluación Básica</div>
                                                <div class="panel-body">


                                                    <div class="form-group">
                                                        <label for="altura" class="col-sm-4 control-label">*Altura (mts)</label>
                                                        <div class="col-sm-8">
                                                            {{Form::input("text", "altura", Input::old('altura'), array("class" => "form-control","id"=>"altura","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{1})(\w{2})$/, '$1.$2')","placeholder"=>"Ej: x.xx","onkeyup"=>"calcular_imc()" ,"onchange"=>"calcular_imc"))}}           
                                                            <div class="bg-danger">{{$errors->first('altura')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="peso" class="col-sm-4 control-label">*Peso (kg)</label>
                                                        <div class="col-sm-8">
                                                            {{Form::input("text", "peso", Input::old('peso'), array("class" => "form-control","id"=>"peso","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{2})(\w{1})$/, '$1.$2')","placeholder"=>"Ej: xx.x","onkeyup"=>"calcular_imc()" ,"onchange"=>"calcular_imc"))}}           
                                                            <div class="bg-danger">{{$errors->first('peso')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imc" class="col-sm-4 control-label">*IMC</label>
                                                        <div class="col-sm-8">

                                                            {{Form::input("text", "imc", Input::old('imc'), array("class" => "form-control","id"=>"imc","maxlength"=>"4","onkeyup"=>"calcular_imc()" ,"onchange"=>"calcular_imc","OnFocus"=>"this.blur()"))}}           
                                                            <div class="bg-danger">{{$errors->first('imc')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imc_resul" class="col-sm-4 control-label">*Result. IMC</label>
                                                        <div class="col-sm-8">
                                                            {{ Form::textarea('imc_resul', null, ['size' => '50x4',"class" => "form-control","id"=>"imc_resul","maxlength"=>"4","onkeypress"=>"return val(event)","OnFocus"=>"this.blur()"]) }}
                                                            <div class="bg-danger">{{$errors->first('imc_resul')}}</div>
                                                        </div>
                                                    </div>
                                                 

                                                </div>
                                                </div>
                                            </div>
                                                                     
                                            <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                    <div class="panel-heading">Presión Arterial</div>
                                                    <div class="panel-body">


                                                        <div class="form-group">
                                                            <label for="sistolica" class="col-sm-7 control-label">Sistólica</label>
                                                            <div class="col-sm-5">
                                                                {{Form::input("text", "sistolica", 0, array("class" => "form-control","id"=>"sistolica","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('sistolica')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="diastolica" class="col-sm-7 control-label">Diastólica</label>
                                                            <div class="col-sm-5">
                                                                {{Form::input("text", "diastolica",0, array("class" => "form-control","id"=>"diastolica","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('diastolica')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pulsoer" class="col-sm-7 control-label">Pulso en reposo</label>
                                                            <div class="col-sm-5">

                                                                {{Form::input("text", "pulsoer",0, array("class" => "form-control","value"=>"ja","id"=>"pulsoer","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('pulsoer')}}</div>
                                                            </div>
                                                        </div>
                                                        <br><br><br><br><br><br>

                                                    </div>
                                                </div>	 
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                    <div class="panel-heading">Pliegues Cutáneos</div>
                                                    <div class="panel-body">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="tricipital" class="col-sm-5 control-label">*Tricipital (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "tricipital",Input::old('tricipital'), array("class" => "form-control","id"=>"tricipital","onkeypress"=>"return val(event)","maxlength"=>"5","onfocus"=>"if(this.value==0)this.value=''","onkeyup"=>"sumar_pliegues()","onchange"=>"rellenartri();"))}}           
                                                                        <div class="bg-danger">{{$errors->first('tricipital')}}</div>               

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="bicipital" class="col-sm-5 control-label">*Bicipital (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "bicipital",Input::old('bicipital'), array("class" => "form-control","value"=>"ja","id"=>"bicipital","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues()","onchange"=>"rellenarbi();"))}}           
                                                                        <div class="bg-danger">{{$errors->first('bicipital')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="subescapular" class="col-sm-5 control-label">*Subescapular (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "subescapular",Input::old('subescapular'), array("class" => "form-control","id"=>"subescapular","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues()","onchange"=>"rellenarsub();"))}}         
                                                                        <div class="bg-danger">{{$errors->first('subescapular')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="suprailiaco" class="col-sm-5 control-label">*Supraíliaco (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "suprailiaco",Input::old('suprailiaco'), array("class" => "form-control","id"=>"suprailiaco","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues()","onchange"=>"rellenarsup();"))}}           
                                                                        <div class="bg-danger">{{$errors->first('suprailiaco')}}</div>
                                                                    </div>
                                                                </div> 
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="suma_pliegues" class="col-sm-7 control-label">*Suma de todos los pliegues</label>
                                                                    <div class="col-sm-5">

                                                                        {{Form::input("text", "suma_pliegues", Input::old('suma_pliegues'), array("class" => "form-control transparent-input","id"=>"suma_pliegues","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('suma_pliegues')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="grasa" class="col-sm-7 control-label">% Grasa</label>
                                                                    <div class="col-sm-5">
                                                                        {{Form::input("text", "grasa", Input::old('grasa'), array("class" => "form-control","id"=>"grasa","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('grasa')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="masa_grasa" class="col-sm-7 control-label">*Masa Grasa MG</label>
                                                                    <div class="col-sm-5">

                                                                        {{Form::input("text", "masa_grasa", Input::old('masa_grasa'), array("class" => "form-control","id"=>"masa_grasa","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('masa_grasa')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="masa_libre_grasa" class="col-sm-7 control-label">*Masa Libre De Grasa MLG</label>
                                                                    <div class="col-sm-5">
                                                                        {{Form::input("text", "masa_libre_grasa", Input::old('masa_libre_grasa'), array("class" => "form-control","id"=>"masa_libre_grasa","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('masa_libre_grasa')}}</div>
                                                                    </div>
                                                                </div> 


                                                            </div>

                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>	 
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Perímetros</div>
                                                <div class="panel-body">


                                                    <div class="form-group">
                                                        <label for="brazo" class="col-sm-5 control-label">Brazos (cm)</label>
                                                        <div class="col-sm-7">
                                                            {{Form::input("text", "brazo", Input::old('brazo'), array("class" => "form-control","id"=>"brazo","maxlength"=>"5","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{1})(\w{2})$/, '$1.$2')","onchange"=>"rellenarbrazo();"))}}           
                                                            <div class="bg-danger">{{$errors->first('brazo')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cintura" class="col-sm-5 control-label">Cintura (cm)</label>
                                                        <div class="col-sm-7">
                                                            {{Form::input("text", "cintura", Input::old('cintura'), array("class" => "form-control","id"=>"cintura","maxlength"=>"5","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{2})(\w{1})$/, '$1.$2')","onkeyup"=>"calcular_indice_cc()" ,"onchange"=>"rellenarcintura();"))}}           
                                                            <div class="bg-danger">{{$errors->first('cintura')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cadera" class="col-sm-5 control-label">Cadera (cm)</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "cadera", Input::old('cadera'), array("class" => "form-control","id"=>"cadera","maxlength"=>"5","onkeyup"=>"calcular_indice_cc()","onchange"=>"rellenarcadera();"))}}           
                                                            <div class="bg-danger">{{$errors->first('cadera')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="indice_cc" class="col-sm-5 control-label">Indice C/C</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "indice_cc", Input::old('indice_cc'), array("class" => "form-control","id"=>"indice_cc","maxlength"=>"4","OnFocus"=>"this.blur()"))}}
                                                           
                                                            <div class="bg-danger">{{$errors->first('indice_cc')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cc-resul" class="col-sm-5 control-label">Resultado del indice C/C cadera-cintura</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "cc-resul", Input::old('cc-resul'), array("class" => "form-control","id"=>"cc-resul","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                            <div class="bg-danger">{{$errors->first('cc-resul')}}</div>
                                                        </div>
                                                    </div>                                                                                                   

                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-9">
                                        
                                        <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                            <div class="panel-heading">Antecedentes Clínicos</div>
                                            <div class="panel-body">

                                                <div class="row">


                                                    <div class="col-sm-4">                            

                                                        <div class="form-group">
                                                            <label for="pcardiacos" class="col-sm-7 control-label">*Problemas cardiácos</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('pcardiacos', ['NO'=>'NO','SI'=>'SI'], Input::old('pcardiacos'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('pcardiacos')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="acardiacoshere" class="col-sm-7 control-label">*Ant.cardiácos heredirarios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('acardiacoshere', ['NO'=>'NO','SI'=>'SI'], Input::old('acardiacoshere'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('acardiacoshere')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="afamiliaresddia" class="col-sm-7 control-label">*Ant.familiares de diabetes</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('afamiliaresddia', ['NO'=>'NO','SI'=>'SI'], Input::old('afamiliaresddia'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('afamiliaresddia')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="afamiliaresacer" class="col-sm-7 control-label">*Ant.familiares acc. cerebrovasculares</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('afamiliaresacer', ['NO'=>'NO','SI'=>'SI'], Input::old('afamiliaresacer'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('afamiliaresacer')}}</div>
                                                            </div>
                                                        </div>                                                           
                                                    </div>

                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="losteoarticularesact" class="col-sm-7 control-label">*Lesion actual osteoarticular</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('losteoarticularesact', ['NO'=>'NO','SI'=>'SI'], Input::old('losteoarticularesact'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('losteoarticularesact')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="losteoarticularesant" class="col-sm-7 control-label">*Lesion anterior osteoarticular</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('losteoarticularesant', ['NO'=>'NO','SI'=>'SI'], Input::old('losteoarticularesant'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('losteoarticularesant')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="enfermedades" class="col-sm-7 control-label">*Enfermedades</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('enfermedades', ['NO'=>'NO','SI'=>'SI'], Input::old('enfermedades'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('enfermedades')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alcohol" class="col-sm-7 control-label">*Alcohol</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('alcohol', ['NO'=>'NO','SI'=>'SI'], Input::old('alcohol'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('alcohol')}}</div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="tabaco" class="col-sm-7 control-label">*Tabaco</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('tabaco', ['NO'=>'NO','SI'=>'SI'], Input::old('tabaco'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('tabaco')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alergias" class="col-sm-7 control-label">*Alergias</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('alergias', ['NO'=>'NO','SI'=>'SI'], Input::old('alergias'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('alergias')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="c_alimenticios" class="col-sm-7 control-label">*Complementos alimenticios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('c_alimenticios', ['NO'=>'NO','SI'=>'SI'], Input::old('c_alimenticios'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('c_alimenticios')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_ejercicios" class="col-sm-7 control-label">*Prohibición de ejercicios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('p_ejercicios', ['NO'=>'NO','SI'=>'SI'], Input::old('p_ejercicios'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('p_ejercicios')}}</div>
                                                            </div>
                                                        </div>

                                                    </div>           

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                     <div class="form-group">
                                                        <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
                                                        <div class="col-sm-10">
                                                            {{ Form::textarea('observaciones', null, ['size' => '50x10',"class" => "form-control"]) }}
                                                            <div class="bg-danger">{{$errors->first('observaciones')}}</div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="form-group">
                                                        <label for="sistolica" class="col-sm-2 control-label">Observaciones</label>
                                                        <div class="col-sm-10">
                                                            {{ Form::textarea('notes', null, ['size' => '100x100',"class" => "form-control"]) }}
                                                            <div class="bg-danger">{{$errors->first('peso')}}</div>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>-->
                                    
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
                    <div class="modal fade bs-exampleeditabierto-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @else
                    <div class="modal fade bs-exampleeditcerrado-modal-lg" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">           
                    @endif
                        <div class="modal-dialog modal-lg">
                             <form action="editar_eb" autocomplete="off" method="POST"  class="form-horizontal" id="formEdit" name="form" role="form" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar evaluación Cliente  {{{$nom1 }}} {{{$apell1}}} {{{$apell2}}}</h4>
                                    </div> 

                                    <div class="modal-body">
                                        
                                        
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
                                        
                                        <div class="row">
                                            
                                            
                                            <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Evaluación Básica</div>
                                                <div class="panel-body">


                                                    <div class="form-group">
                                                        <label for="altura_edit" class="col-sm-4 control-label">*Altura (mts)</label>
                                                        <div class="col-sm-8">
                                                            {{Form::input("text", "altura_edit", Input::old('altura_edit'), array("class" => "form-control","id"=>"altura_edit","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{1})(\w{2})$/, '$1.$2')","onkeyup"=>"calcular_imc_edit()" ,"onchange"=>"calcular_imc_edit"))}}           
                                                            <div class="bg-danger">{{$errors->first('altura_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="peso_edit" class="col-sm-4 control-label">*Peso (kg)</label>
                                                        <div class="col-sm-8">
                                                            {{Form::input("text", "peso_edit", Input::old('peso_edit'), array("class" => "form-control","id"=>"peso_edit","maxlength"=>"4","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{2})(\w{1})$/, '$1.$2')","onkeyup"=>"calcular_imc_edit()" ,"onchange"=>"calcular_imc_edit"))}}           
                                                            <div class="bg-danger">{{$errors->first('peso_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imc_edit" class="col-sm-4 control-label">*IMC</label>
                                                        <div class="col-sm-8">

                                                            {{Form::input("text", "imc_edit", Input::old('imc_edit'), array("class" => "form-control","id"=>"imc_edit","maxlength"=>"4","onkeyup"=>"calcular_imc_edit()" ,"onchange"=>"calcular_imc_edit","OnFocus"=>"this.blur()"))}}           
                                                            <div class="bg-danger">{{$errors->first('imc_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imc_resul_edit" class="col-sm-4 control-label">*Result. IMC</label>
                                                        <div class="col-sm-8">
                                                            {{ Form::textarea('imc_resul_edit', null, ['size' => '50x4',"class" => "form-control","id"=>"imc_resul_edit","maxlength"=>"4","onkeypress"=>"return val(event)","OnFocus"=>"this.blur()"]) }}
                                                            <div class="bg-danger">{{$errors->first('imc_resul_edit')}}</div>
                                                        </div>
                                                    </div>
                                                 

                                                </div>
                                                </div>
                                            </div>
                                                                     
                                            <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                    <div class="panel-heading">Presión Arterial</div>
                                                    <div class="panel-body">


                                                        <div class="form-group">
                                                            <label for="sistolica_edit" class="col-sm-7 control-label">Sistólica</label>
                                                            <div class="col-sm-5">
                                                                {{Form::input("text", "sistolica_edit", 0, array("class" => "form-control","id"=>"sistolica_edit","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('sistolica_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="diastolica_edit" class="col-sm-7 control-label">Diastólica</label>
                                                            <div class="col-sm-5">
                                                                {{Form::input("text", "diastolica_edit",0, array("class" => "form-control","id"=>"diastolica_edit","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('diastolica_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pulsoer_edit" class="col-sm-7 control-label">Pulso en reposo</label>
                                                            <div class="col-sm-5">

                                                                {{Form::input("text", "pulsoer_edit",0, array("class" => "form-control","value"=>"ja","id"=>"pulsoer_edit","maxlength"=>"4","onkeypress"=>"return val(event)"))}}           
                                                                <div class="bg-danger">{{$errors->first('pulsoer_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <br><br><br><br><br><br>

                                                    </div>
                                                </div>	 
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                    <div class="panel-heading">Pliegues Cutáneos</div>
                                                    <div class="panel-body">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="tricipital_edit" class="col-sm-5 control-label">*Tricipital (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "tricipital_edit",Input::old('tricipital_edit'), array("class" => "form-control","id"=>"tricipital_edit","onkeypress"=>"return val(event)","maxlength"=>"5","onfocus"=>"if(this.value==0)this.value=''","onkeyup"=>"sumar_pliegues_edit()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('tricipital_edit')}}</div>               

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="bicipital_edit" class="col-sm-5 control-label">*Bicipital (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "bicipital_edit",Input::old('bicipital_edit'), array("class" => "form-control","value"=>"ja","id"=>"bicipital_edit","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues_edit()","onchange"=>"rellenartri_edit()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('bicipital_edit')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="subescapular_edit" class="col-sm-5 control-label">*Subescapular (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "subescapular_edit",Input::old('subescapular_edit'), array("class" => "form-control","id"=>"subescapular_edit","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues_edit()","onchange"=>"rellenarbi_edit()"))}}         
                                                                        <div class="bg-danger">{{$errors->first('subescapular_edit')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="suprailiaco_edit" class="col-sm-5 control-label">*Supraíliaco (mm)</label>
                                                                    <div class="col-sm-7">
                                                                        {{Form::input("text", "suprailiaco_edit",Input::old('suprailiaco_edit'), array("class" => "form-control","id"=>"suprailiaco_edit","onkeypress"=>"return val(event)","maxlength"=>"5","onkeyup"=>"sumar_pliegues_edit()","onchange"=>"rellenarsub_edit()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('suprailiaco_edit')}}</div>
                                                                    </div>
                                                                </div> 
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="suma_pliegues_edit" class="col-sm-7 control-label">*Suma de todos los pliegues</label>
                                                                    <div class="col-sm-5">

                                                                        {{Form::input("text", "suma_pliegues_edit", Input::old('suma_pliegues_edit'), array("class" => "form-control transparent-input","id"=>"suma_pliegues_edit","maxlength"=>"4","OnFocus"=>"this.blur()","onchange"=>"rellenarsup_edit()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('suma_pliegues_edit')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="grasa_edit" class="col-sm-7 control-label">% Grasa</label>
                                                                    <div class="col-sm-5">
                                                                        {{Form::input("text", "grasa_edit", Input::old('grasa_edit'), array("class" => "form-control","id"=>"grasa_edit","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('grasa_edit')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="masa_grasa_edit" class="col-sm-7 control-label">*Masa Grasa MG</label>
                                                                    <div class="col-sm-5">

                                                                        {{Form::input("text", "masa_grasa_edit", Input::old('masa_grasa_edit'), array("class" => "form-control","id"=>"masa_grasa_edit","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('masa_grasa')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="masa_libre_grasa_edit" class="col-sm-7 control-label">*Masa Libre De Grasa MLG</label>
                                                                    <div class="col-sm-5">
                                                                        {{Form::input("text", "masa_libre_grasa_edit", Input::old('masa_libre_grasa_edit'), array("class" => "form-control","id"=>"masa_libre_grasa_edit","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                                        <div class="bg-danger">{{$errors->first('masa_libre_grasa_edit')}}</div>
                                                                    </div>
                                                                </div> 


                                                            </div>

                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>	 
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                         <div class="row">
                                        <div class="col-sm-3">
                                                <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                                <div class="panel-heading">Perímetros</div>
                                                <div class="panel-body">


                                                    <div class="form-group">
                                                        <label for="brazo_edit" class="col-sm-5 control-label">Brazos (cm)</label>
                                                        <div class="col-sm-7">
                                                            {{Form::input("text", "brazo_edit", Input::old('brazo_edit'), array("class" => "form-control","id"=>"brazo_edit","maxlength"=>"5","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{1})(\w{2})$/, '$1.$2')","onchange"=>"rellenarbrazo_edit();"))}}           
                                                            <div class="bg-danger">{{$errors->first('brazo_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cintura_edit" class="col-sm-5 control-label">Cintura (cm)</label>
                                                        <div class="col-sm-7">
                                                            {{Form::input("text", "cintura_edit", Input::old('cintura_edit'), array("class" => "form-control","id"=>"cintura_edit","maxlength"=>"5","onkeypress"=>"return val(event)","onblur" => "this.value = this.value.replace( /^(\d{2})(\w{1})$/, '$1.$2')","onkeyup"=>"calcular_indice_cc_edit()" ,"onchange"=>"rellenarcintura_edit();"))}}           
                                                            <div class="bg-danger">{{$errors->first('cintura_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cadera_edit" class="col-sm-5 control-label">Cadera (cm)</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "cadera_edit", Input::old('cadera_edit'), array("class" => "form-control","id"=>"cadera_edit","maxlength"=>"5","onkeyup"=>"calcular_indice_cc_edit()","onchange"=>"rellenarcadera_edit();"))}}           
                                                            <div class="bg-danger">{{$errors->first('cadera_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="indice_cc_edit" class="col-sm-5 control-label">Indice C/C</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "indice_cc_edit", Input::old('indice_cc_edit'), array("class" => "form-control","id"=>"indice_cc_edit","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                            <div class="bg-danger">{{$errors->first('indice_cc_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <!--<label for="cc-resul_edit" class="col-sm-5 control-label">Comparación percentil 50 con CMB</label>-->
                                                        <label for="cc-resul_edit" class="col-sm-5 control-label">Resultado del indice C/C cadera-cintura</label>
                                                        <div class="col-sm-7">

                                                            {{Form::input("text", "cc-resul_edit", Input::old('cc-resul_edit'), array("class" => "form-control","id"=>"cc-resul_edit","maxlength"=>"4","OnFocus"=>"this.blur()"))}}           
                                                            <div class="bg-danger">{{$errors->first('cc-resul_edit')}}</div>
                                                        </div>
                                                    </div>                                                                                                   

                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-9">
                                        
                                        
                                        <div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
                                            <div class="panel-heading">Antecedentes Clínicos</div>
                                            <div class="panel-body">

                                                <div class="row">


                                                    <div class="col-sm-4">                            

                                                        <div class="form-group">
                                                            <label for="pcardiacos_edit" class="col-sm-7 control-label">*Problemas cardiácos</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('pcardiacos_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('pcardiacos_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('pcardiacos_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="acardiacoshere_edit" class="col-sm-7 control-label">*Ant.cardiácos heredirarios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('acardiacoshere_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('acardiacoshere_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('acardiacoshere_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="afamiliaresddia_edit" class="col-sm-7 control-label">*Ant.familiares de diabetes</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('afamiliaresddia_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('afamiliaresddia_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('afamiliaresddia_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="afamiliaresacer_edit" class="col-sm-7 control-label">*Ant.familiares acc. cerebrovasculares</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('afamiliaresacer_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('afamiliaresacer_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('afamiliaresacer_edit')}}</div>
                                                            </div>
                                                        </div>                                                           
                                                    </div>

                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="losteoarticularesact_edit" class="col-sm-7 control-label">*Lesiones osteoarticulares actuales</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('losteoarticularesact_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('losteoarticularesact_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('losteoarticularesact_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="losteoarticularesant_edit" class="col-sm-7 control-label">*Lesiones osteoarticulares anteriores</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('losteoarticularesant_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('losteoarticularesant_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('losteoarticularesant_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="enfermedades_edit" class="col-sm-7 control-label">*Enfermedades</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('enfermedades_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('enfermedades_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('enfermedades_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alcohol_edit" class="col-sm-7 control-label">*Alcohol</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('alcohol_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('alcohol_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('alcohol_edit')}}</div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="tabaco_edit" class="col-sm-7 control-label">*Tabaco</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('tabaco_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('tabaco_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('tabaco_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alergias_edit" class="col-sm-7 control-label">*Alergias</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('alergias_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('alergias_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('alergias_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="c_alimenticios_edit" class="col-sm-7 control-label">*Complementos alimenticios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('c_alimenticios_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('c_alimenticios_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('c_alimenticios_edit')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_ejercicios_edit" class="col-sm-7 control-label">*Prohibición de ejercicios</label>
                                                            <div class="col-sm-5">
                                                                {{ Form::select('p_ejercicios_edit', ['NO'=>'NO','SI'=>'SI'], Input::old('p_ejercicios_edit'),array("class" => "form-control")) }}
                                                                <div class="bg-danger">{{$errors->first('p_ejercicios_edit')}}</div>
                                                            </div>
                                                        </div>

                                                    </div>           

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                     <div class="form-group">
                                                        <label for="observaciones_edit" class="col-sm-2 control-label">Observaciones</label>
                                                        <div class="col-sm-10">
                                                            {{ Form::textarea('observaciones_edit', null, ['size' => '50x10',"class" => "form-control"]) }}
                                                            <div class="bg-danger">{{$errors->first('observaciones_edit')}}</div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="form-group">
                                                        <label for="sistolica" class="col-sm-2 control-label">Observaciones</label>
                                                        <div class="col-sm-10">
                                                            {{ Form::textarea('notes', null, ['size' => '100x100',"class" => "form-control"]) }}
                                                            <div class="bg-danger">{{$errors->first('peso')}}</div>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>-->
                                    
                                        </div>
                                        </div>
                                         </div>
                                           
                                    </div>


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                     <input type="hidden" name="evaluacionbasica_id" value="">  
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
                                   "sEmptyTable": "El cliente no tiene evaluaciones en el sistema.",
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
                
                
                <script>
                $('#reg').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-subcat/' + cat_id, function(data){
                        $('#com').empty();
                            $.each(data, function(evaluacion, subcatObj){
                                $('#com').append('<option value="'+subcatObj.id+'">'+subcatObj.com_nom+'</option>');
                        });
                    });
                });
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
             
                  
            <input id="val" type="hidden" name="evaluacionbasica" class="input-block-level" value="" >
            <script>
            $(document).ready(function() {

              $('.edit2').click(function() {

                    $('[name=evaluacionbasica]').val($(this).attr ('id'));

              
                   var faction = "<?php echo URL::to('capturar_eb'); ?>";

                    var fdata = $('#val').serialize();  //hacer serializacion
                 $('#load').show();//icono cargando
                $.post(faction, fdata, function(json) {
                    if (json.success) {
                       
                                    $('#formEdit input[name="evaluacionbasica_id"]').val(json.id);
                                    $('#formEdit input[name="fecha_edit"]').val(json.fecha);
                                    $('#formEdit input[name="hora_edit"]').val(json.hora);
                                    $('#formEdit select[name="entrenador_edit"]').append('<option value="'+json.user_id+'" selected="selected">'+json.user_id+'</option>');
                                    
                                    
                                    $('#formEdit input[name="altura_edit"]').val(json.altura);
                                    $('#formEdit input[name="peso_edit"]').val(json.peso);
                                    $('#formEdit input[name="imc_edit"]').val(json.imc);
                                    $('#formEdit textarea[name="imc_resul_edit"]').val(json.imc_resul);                                   
                                    $('#formEdit input[name="sistolica_edit"]').val(json.sistolica);
                                    $('#formEdit input[name="diastolica_edit"]').val(json.diastolica);
                                    $('#formEdit input[name="pulsoer_edit"]').val(json.pulso_reposo);
                                    $('#formEdit input[name="tricipital_edit"]').val(json.tricipital);
                                    $('#formEdit input[name="bicipital_edit"]').val(json.bicipital);
                                    $('#formEdit input[name="subescapular_edit"]').val(json.subescapular);
                                    $('#formEdit input[name="suprailiaco_edit"]').val(json.suprailiaco);
                                    $('#formEdit input[name="suma_pliegues_edit"]').val(json.suma_pliegues);
                                    $('#formEdit input[name="grasa_edit"]').val(json.grasa);
                                    $('#formEdit input[name="masa_grasa_edit"]').val(json.masa_grasa);
                                    $('#formEdit input[name="masa_libre_grasa_edit"]').val(json.masa_libre_grasa);
                                    $('#formEdit input[name="brazo_edit"]').val(json.brazo);
                                    $('#formEdit input[name="cintura_edit"]').val(json.cintura);
                                    $('#formEdit input[name="cadera_edit"]').val(json.cadera);
                                    $('#formEdit input[name="indice_cc_edit"]').val(json.indice_cc);
                                    $('#formEdit input[name="cc-resul_edit"]').val(json.cc_resul);
                                    
                                    $('#formEdit select[name="pcardiacos_edit"]').append('<option value="'+json.problema_cardiaco+'" selected="selected">'+json.problema_cardiaco+'</option>');
                                    $('#formEdit select[name="acardiacoshere_edit"]').append('<option value="'+json.ant_cardiaco_hereditario+'" selected="selected">'+json.ant_cardiaco_hereditario+'</option>');
                                    $('#formEdit select[name="afamiliaresddia_edit"]').append('<option value="'+json.ant_familiar_dm+'" selected="selected">'+json.ant_familiar_dm+'</option>');
                                    $('#formEdit select[name="afamiliaresacer_edit"]').append('<option value="'+json.ant_familiar_acv+'" selected="selected">'+json.ant_familiar_acv+'</option>');
                                    $('#formEdit select[name="losteoarticularesact_edit"]').append('<option value="'+json.lesion_osteoarticular_act+'" selected="selected">'+json.lesion_osteoarticular_act+'</option>');
                                    $('#formEdit select[name="losteoarticularesant_edit"]').append('<option value="'+json.lesion_osteoarticular_ant+'" selected="selected">'+json.lesion_osteoarticular_ant+'</option>');
                                    $('#formEdit select[name="enfermedades_edit"]').append('<option value="'+json.enfermedad+'" selected="selected">'+json.enfermedad+'</option>');
                                    $('#formEdit select[name="alcohol_edit"]').append('<option value="'+json.alcohol+'" selected="selected">'+json.alcohol+'</option>');
                                    $('#formEdit select[name="tabaco_edit"]').append('<option value="'+json.tabaco+'" selected="selected">'+json.tabaco+'</option>');
                                    $('#formEdit select[name="alergias_edit"]').append('<option value="'+json.alergia+'" selected="selected">'+json.alergia+'</option>');
                                    $('#formEdit select[name="c_alimenticios_edit"]').append('<option value="'+json.complemento_alimenticio+'" selected="selected">'+json.complemento_alimenticio+'</option>');
                                    $('#formEdit select[name="p_ejercicios_edit"]').append('<option value="'+json.prohibicion_ejer+'" selected="selected">'+json.prohibicion_ejer+'</option>');
                                    
                                    $('#formEdit input[name="observaciones_edit"]').val(json.observacion);
                                 
                                    $('#load').hide();
                   

                    } else {
                        $('#errorMessage').html(json.message);
                        $('#errorMessage').show();
                     
                    }
                });

              });

            });
            </script>
           
            
            <script language="javascript" type="text/javascript">
                    function evaluacion_clienteesp(id_cli){
	
                       // if(confirm("\n\n¿ Está seguro de que desea eliminar la evaluación?"+id_cli))
                      //  {
                            
                                window.location="evaluacion_clienteesp/"+id_cli;
                                
                       // }
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
            <script>
                function calcular_imc(){
                    var peso = parseFloat($("#peso").val().replace(",","."));
                    var altura = parseFloat($("#altura").val().replace(",","."));
                    var altura2 = altura*altura;

                    if(peso == '0') $("#imc_resul").val('');
                    if(altura == '0') $("#imc_resul").val('');

                    if(altura!=0){
                            var imc = (peso/altura2).toFixed(2);
                            if(!isNaN(imc)) $("#imc").val(imc.replace(".","."));
                            else $("#imc_resul").val(''); 
                            if(imc < 15) $("#imc_resul").val('Desnutrición muy severa (criterio de internación)');
                            if(imc >= 15 && imc <= 15.9) $("#imc_resul").val('Desnutrición severa (Grado III)');
                            if(imc >= 16 && imc <= 16.9) $("#imc_resul").val('Desnutrición moderada (Grado II)');
                            if(imc >= 17 && imc <= 18.4) $("#imc_resul").val('Desnutrición leve (Grado I)');
                            if(imc >= 18.5 && imc <= 24.9) $("#imc_resul").val('Normal');
                            if(imc >= 25 && imc <= 29.9) $("#imc_resul").val('Sobrepeso');
                            if(imc >= 30 && imc <= 34.5) $("#imc_resul").val('Obesidad grado I');
                            if(imc >= 35 && imc <= 39.9) $("#imc_resul").val('Obesidad grado II');
                            if(imc >= 40)$ ("#imc_resul").val('Obesidad grado III (mórbida)');
                    }else $("#imc").val('0');
                mg();
                }                          
            </script>
            
               <script>
                function calcular_imc_edit(){
                    var peso = parseFloat($("#peso_edit").val().replace(",","."));
                    var altura = parseFloat($("#altura_edit").val().replace(",","."));
                    var altura2 = altura*altura;

                    if(peso == '0') $("#imc_resul_edit").val('');
                    if(altura == '0') $("#imc_resul_edit").val('');

                    if(altura!=0){
                            var imc = (peso/altura2).toFixed(2);
                            if(!isNaN(imc)) $("#imc_edit").val(imc.replace(".","."));
                            else $("#imc_resul_edit").val(''); 
                            if(imc < 15) $("#imc_resul_edit").val('Desnutrición muy severa (criterio de internación)');
                            if(imc >= 15 && imc <= 15.9) $("#imc_resul_edit").val('Desnutrición severa (Grado III)');
                            if(imc >= 16 && imc <= 16.9) $("#imc_resul_edit").val('Desnutrición moderada (Grado II)');
                            if(imc >= 17 && imc <= 18.4) $("#imc_resul_edit").val('Desnutrición leve (Grado I)');
                            if(imc >= 18.5 && imc <= 24.9) $("#imc_resul_edit").val('Normal');
                            if(imc >= 25 && imc <= 29.9) $("#imc_resul_edit").val('Sobrepeso');
                            if(imc >= 30 && imc <= 34.5) $("#imc_resul_edit").val('Obesidad grado I');
                            if(imc >= 35 && imc <= 39.9) $("#imc_resul_edit").val('Obesidad grado II');
                            if(imc >= 40)$ ("#imc_resul_edit").val('Obesidad grado III (mórbida)');
                    }else $("#imc_edit").val('0');
                mg_edit();
                }                          
            </script>
            
            
                        
            <script>
                function mg(){
                //kilos * %grasa / 100
                    if($('#grasa').val() != '0' && $('#peso').val() != '0' ){
                        var grasa = parseFloat($('#grasa').val());
                        var peso = parseFloat($('#peso').val());
                        var string = peso +' * '+ grasa+' / 100';
                        var resul = peso * grasa / 100;
                        $('#masa_grasa').val(resul.toFixed(2));
                        $('#mg-now').html(string);
                        //$('#gd_mg').val(resul.toFixed(2));
                        var mg = resul;
                        string = peso+' - '+mg;
                        resul = peso - mg;
                        $('#masa_libre_grasa').val(resul.toFixed(2));
                        $('#mlg-now').html(string);
                }
            }
            </script>
               <script>
                function mg_edit(){
                //kilos * %grasa / 100
                    if($('#grasa_edit').val() != '0' && $('#peso_edit').val() != '0' ){
                        var grasa = parseFloat($('#grasa_edit').val());
                        var peso = parseFloat($('#peso_edit').val());
                        var string = peso +' * '+ grasa+' / 100';
                        var resul = peso * grasa / 100;
                        $('#masa_grasa_edit').val(resul.toFixed(2));
                        $('#mg-now_edit').html(string);
                        //$('#gd_mg').val(resul.toFixed(2));
                        var mg = resul;
                        string = peso+' - '+mg;
                        resul = peso - mg;
                        $('#masa_libre_grasa_edit').val(resul.toFixed(2));
                        $('#mlg-now_edit').html(string);
                }
            }
            </script>

            <script> 
                function sumar_pliegues(){
                  
                   var sexo='<?php echo$sexo1;?>';
                    var edad='<?php echo$edad;?>';
 
                //    document.write(edad,sexo);
         
                    var valor1=$("#tricipital").val();
                    var valor2=$("#bicipital").val();
                    var valor3=$("#subescapular").val();
                    var valor4=$("#suprailiaco").val();
                    document.getElementById("suma_pliegues").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4);
                 
                    calcular_pgrasa();
                 
            }
            </script>
            <script> 
                function sumar_pliegues_edit(){
                  
                   var sexo='<?php echo$sexo1;?>';
                    var edad='<?php echo$edad;?>';
 
                //    document.write(edad,sexo);
         
                    var valor1=$("#tricipital_edit").val();
                    var valor2=$("#bicipital_edit").val();
                    var valor3=$("#subescapular_edit").val();
                    var valor4=$("#suprailiaco_edit").val();
                    document.getElementById("suma_pliegues_edit").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4);
                 
                    calcular_pgrasa_edit();
                 
            }
            </script>

            <script>                        
                function calcular_pgrasa(){
                    tricipital = document.getElementById("tricipital").value;
                    bicipital = document.getElementById("bicipital").value;
                    subescapular = document.getElementById("subescapular").value;
                    suprailiaco = document.getElementById("suprailiaco").value;
                    
                    var sexo='<?php echo$sexo1;?>';
                    var edad='<?php echo$edad;?>';
              //      if( tricipital == 2) {
            //    if( tricipital != 0 || bicipital != 0 || subescapular != 0 || suprailiaco !=0 ) {
                    var pliegues    = parseFloat($('#suma_pliegues').val());
              /*      document.write(tricipital);
                    document.write(bicipital);
                    document.write(subescapular);
                    document.write(suprailiaco);
                    document.write(pliegues);
                    */
                    if(sexo==='F'){
                    var durning_womersley_f0 = new Array(4); 
                    durning_womersley_f0[0] = 16;
                    durning_womersley_f0[1] = 19 ;
                    durning_womersley_f0[2] = 1.1549;
                    durning_womersley_f0[3] = 0.0678;
                    
                    var durning_womersley_f1 = new Array(4); 
                    durning_womersley_f1[0] = 20;
                    durning_womersley_f1[1] = 29;
                    durning_womersley_f1[2] = 1.1599;
                    durning_womersley_f1[3] = 0.0717;
                    
                    var durning_womersley_f2 = new Array(4); 
                    durning_womersley_f2[0] = 30;
                    durning_womersley_f2[1] = 39;
                    durning_womersley_f2[2] = 1.1423;
                    durning_womersley_f2[3] = 0.0632;
                    
                    var durning_womersley_f3 = new Array(4); 
                    durning_womersley_f3[0] = 40;
                    durning_womersley_f3[1] = 49;
                    durning_womersley_f3[2] = 1.1333;
                    durning_womersley_f3[3] = 0.0612;
                    
                    var durning_womersley_f4 = new Array(4); 
                    durning_womersley_f4[0] = 50;
                    durning_womersley_f4[1] = 150;
                    durning_womersley_f4[2] = 1.1339;
                    durning_womersley_f4[3] = 0.0645;
                    
                    var durning_womersley_f = new Array (5); 
                    durning_womersley_f[0] = durning_womersley_f0; 
                    durning_womersley_f[1] = durning_womersley_f1;
                    durning_womersley_f[2] = durning_womersley_f2;
                    durning_womersley_f[3] = durning_womersley_f3;
                    durning_womersley_f[4] = durning_womersley_f4;
                    /*
                    document.write("<table width=200 border=1 cellpadding=1 cellspacing=1>"); 
                    for (i=0;i< durning_womersley_f.length;i++){ 
                            document.write("<tr>");
                            document.write("<td><b>Durning y Womersley MUJERES " + i + "</b></td>"); 
                            for (j=0;j< durning_womersley_f[i].length;j++){ 
                            document.write("<td>" +  durning_womersley_f[i][j] + "</td>");
                            } 
                            document.write("</tr>"); 
                    } 
                    document.write("</table>");
                    */
                    for (i=0;i< durning_womersley_f.length;i++){ 
                        if(parseInt(durning_womersley_f[i][0]) <= edad && edad <= parseInt(durning_womersley_f[i][1])){
                                    c = parseFloat(durning_womersley_f[i][2]);
                                    m = parseFloat(durning_womersley_f[i][3]);
                            }
                        }
                          $('#grasa').val(((4.95/(c-m*(Math.log(parseFloat(pliegues))/Math.log(10)))-4.5)*100).toFixed(2));
                    //document.write(c);
                    //document.write(m);
                    }
                    
                    
                    if(sexo==="M"){
                    var durning_womersley_m0 = new Array(4); 
                    durning_womersley_m0[0] = 16;
                    durning_womersley_m0[1] = 19 ;
                    durning_womersley_m0[2] = 1.1620;
                    durning_womersley_m0[3] = 0.0630;
                    
                    var durning_womersley_m1 = new Array(4); 
                    durning_womersley_m1[0] = 20;
                    durning_womersley_m1[1] = 29;
                    durning_womersley_m1[2] = 1.1631;
                    durning_womersley_m1[3] = 0.0632;
                    
                    var durning_womersley_m2 = new Array(4); 
                    durning_womersley_m2[0] = 30;
                    durning_womersley_m2[1] = 39;
                    durning_womersley_m2[2] = 1.1422;
                    durning_womersley_m2[3] = 0.0544;
                    
                    var durning_womersley_m3 = new Array(4); 
                    durning_womersley_m3[0] = 40;
                    durning_womersley_m3[1] = 49;
                    durning_womersley_m3[2] = 1.1620;
                    durning_womersley_m3[3] = 0.0700;
                    
                    var durning_womersley_m4 = new Array(4); 
                    durning_womersley_m4[0] = 50;
                    durning_womersley_m4[1] = 150;
                    durning_womersley_m4[2] = 1.1715;
                    durning_womersley_m4[3] = 0.0779;
                    
                    var durning_womersley_m = new Array (5); 
                    durning_womersley_m[0] = durning_womersley_m0; 
                    durning_womersley_m[1] = durning_womersley_m1;
                    durning_womersley_m[2] = durning_womersley_m2;
                    durning_womersley_m[3] = durning_womersley_m3;
                    durning_womersley_m[4] = durning_womersley_m4;
                    /*
                    document.write("<table width=200 border=1 cellpadding=1 cellspacing=1>"); 
                    for (i=0;i< durning_womersley_m.length;i++){ 
                            document.write("<tr>");
                            document.write("<td><b>Durning y Womersley HOMBRES " + i + "</b></td>"); 
                            for (j=0;j< durning_womersley_m[i].length;j++){ 
                            document.write("<td>" +  durning_womersley_m[i][j] + "</td>");
                            } 
                            document.write("</tr>"); 
                    } 
                    document.write("</table>");
                    */
                    for (i=0;i< durning_womersley_m.length;i++){ 
                        if(parseInt(durning_womersley_m[i][0]) <= edad && edad <= parseInt(durning_womersley_m[i][1])){
                                    c = parseFloat(durning_womersley_m[i][2]);
                                    m = parseFloat(durning_womersley_m[i][3]);
                            }
                    }
                    //document.write(c);
                    //document.write(m);                      

                   $('#grasa').val(((4.95/(c-m*(Math.log(parseFloat(pliegues))/Math.log(10)))-4.5)*100).toFixed(2));
               }
                    mg();
                }
            </script>
            <script>                        
                function calcular_pgrasa_edit(){
                    tricipital = document.getElementById("tricipital_edit").value;
                    bicipital = document.getElementById("bicipital_edit").value;
                    subescapular = document.getElementById("subescapular_edit").value;
                    suprailiaco = document.getElementById("suprailiaco_edit").value;
                    
                    var sexo='<?php echo$sexo1;?>';
                    var edad='<?php echo$edad;?>';
              //      if( tricipital == 2) {
            //    if( tricipital != 0 || bicipital != 0 || subescapular != 0 || suprailiaco !=0 ) {
                    var pliegues    = parseFloat($('#suma_pliegues_edit').val());
              /*      document.write(tricipital);
                    document.write(bicipital);
                    document.write(subescapular);
                    document.write(suprailiaco);
                    document.write(pliegues);
                    */
                    if(sexo==='F'){
                    var durning_womersley_f0 = new Array(4); 
                    durning_womersley_f0[0] = 16;
                    durning_womersley_f0[1] = 19 ;
                    durning_womersley_f0[2] = 1.1549;
                    durning_womersley_f0[3] = 0.0678;
                    
                    var durning_womersley_f1 = new Array(4); 
                    durning_womersley_f1[0] = 20;
                    durning_womersley_f1[1] = 29;
                    durning_womersley_f1[2] = 1.1599;
                    durning_womersley_f1[3] = 0.0717;
                    
                    var durning_womersley_f2 = new Array(4); 
                    durning_womersley_f2[0] = 30;
                    durning_womersley_f2[1] = 39;
                    durning_womersley_f2[2] = 1.1423;
                    durning_womersley_f2[3] = 0.0632;
                    
                    var durning_womersley_f3 = new Array(4); 
                    durning_womersley_f3[0] = 40;
                    durning_womersley_f3[1] = 49;
                    durning_womersley_f3[2] = 1.1333;
                    durning_womersley_f3[3] = 0.0612;
                    
                    var durning_womersley_f4 = new Array(4); 
                    durning_womersley_f4[0] = 50;
                    durning_womersley_f4[1] = 150;
                    durning_womersley_f4[2] = 1.1339;
                    durning_womersley_f4[3] = 0.0645;
                    
                    var durning_womersley_f = new Array (5); 
                    durning_womersley_f[0] = durning_womersley_f0; 
                    durning_womersley_f[1] = durning_womersley_f1;
                    durning_womersley_f[2] = durning_womersley_f2;
                    durning_womersley_f[3] = durning_womersley_f3;
                    durning_womersley_f[4] = durning_womersley_f4;
                    /*
                    document.write("<table width=200 border=1 cellpadding=1 cellspacing=1>"); 
                    for (i=0;i< durning_womersley_f.length;i++){ 
                            document.write("<tr>");
                            document.write("<td><b>Durning y Womersley MUJERES " + i + "</b></td>"); 
                            for (j=0;j< durning_womersley_f[i].length;j++){ 
                            document.write("<td>" +  durning_womersley_f[i][j] + "</td>");
                            } 
                            document.write("</tr>"); 
                    } 
                    document.write("</table>");
                    */
                    for (i=0;i< durning_womersley_f.length;i++){ 
                        if(parseInt(durning_womersley_f[i][0]) <= edad && edad <= parseInt(durning_womersley_f[i][1])){
                                    c = parseFloat(durning_womersley_f[i][2]);
                                    m = parseFloat(durning_womersley_f[i][3]);
                            }
                        }
                          $('#grasa_edit').val(((4.95/(c-m*(Math.log(parseFloat(pliegues))/Math.log(10)))-4.5)*100).toFixed(2));
                    //document.write(c);
                    //document.write(m);
                    }
                    
                    
                    if(sexo==="M"){
                    var durning_womersley_m0 = new Array(4); 
                    durning_womersley_m0[0] = 16;
                    durning_womersley_m0[1] = 19 ;
                    durning_womersley_m0[2] = 1.1620;
                    durning_womersley_m0[3] = 0.0630;
                    
                    var durning_womersley_m1 = new Array(4); 
                    durning_womersley_m1[0] = 20;
                    durning_womersley_m1[1] = 29;
                    durning_womersley_m1[2] = 1.1631;
                    durning_womersley_m1[3] = 0.0632;
                    
                    var durning_womersley_m2 = new Array(4); 
                    durning_womersley_m2[0] = 30;
                    durning_womersley_m2[1] = 39;
                    durning_womersley_m2[2] = 1.1422;
                    durning_womersley_m2[3] = 0.0544;
                    
                    var durning_womersley_m3 = new Array(4); 
                    durning_womersley_m3[0] = 40;
                    durning_womersley_m3[1] = 49;
                    durning_womersley_m3[2] = 1.1620;
                    durning_womersley_m3[3] = 0.0700;
                    
                    var durning_womersley_m4 = new Array(4); 
                    durning_womersley_m4[0] = 50;
                    durning_womersley_m4[1] = 150;
                    durning_womersley_m4[2] = 1.1715;
                    durning_womersley_m4[3] = 0.0779;
                    
                    var durning_womersley_m = new Array (5); 
                    durning_womersley_m[0] = durning_womersley_m0; 
                    durning_womersley_m[1] = durning_womersley_m1;
                    durning_womersley_m[2] = durning_womersley_m2;
                    durning_womersley_m[3] = durning_womersley_m3;
                    durning_womersley_m[4] = durning_womersley_m4;
                    /*
                    document.write("<table width=200 border=1 cellpadding=1 cellspacing=1>"); 
                    for (i=0;i< durning_womersley_m.length;i++){ 
                            document.write("<tr>");
                            document.write("<td><b>Durning y Womersley HOMBRES " + i + "</b></td>"); 
                            for (j=0;j< durning_womersley_m[i].length;j++){ 
                            document.write("<td>" +  durning_womersley_m[i][j] + "</td>");
                            } 
                            document.write("</tr>"); 
                    } 
                    document.write("</table>");
                    */
                    for (i=0;i< durning_womersley_m.length;i++){ 
                        if(parseInt(durning_womersley_m[i][0]) <= edad && edad <= parseInt(durning_womersley_m[i][1])){
                                    c = parseFloat(durning_womersley_m[i][2]);
                                    m = parseFloat(durning_womersley_m[i][3]);
                            }
                    }
                    //document.write(c);
                    //document.write(m);                      

                   $('#grasa_edit').val(((4.95/(c-m*(Math.log(parseFloat(pliegues))/Math.log(10)))-4.5)*100).toFixed(2));
               }
                    mg();
                }
            </script>
            
            <script language="javascript" type="text/javascript">
                    function evaluacion(){
	
                       // if(confirm("\n\n¿ Está seguro de que desea eliminar la evaluación?"+id_cli))
                      //  {
                            
                                window.location="evaluacion";
                                
                       // }
                    }
            </script>
            <!--
            <script>
            $(document).ready(function() {
$('#example').dataTable( {
"aaSorting": [[ 0, "desc" ]]
});
</script>
    
  <script>
$(document).ready(function() {
    $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
    $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
 
    $('#example').DataTable();
} );
    </script>    
    <script>
    (function($) {
 
$.fn.dataTable.moment = function ( format, locale ) {
    var types = $.fn.dataTable.ext.type;
 
    // Add type detection
    types.detect.unshift( function ( d ) {
        // Null and empty values are acceptable
        if ( d === '' || d === null ) {
            return 'moment-'+format;
        }
 
        return moment( d.replace ? d.replace(/<.*?>/g, '') : d, format, locale, true ).isValid() ?
            'moment-'+format :
            null;
    } );
 
    // Add sorting method - use an integer for the sorting
    types.order[ 'moment-'+format+'-pre' ] = function ( d ) {
        return d === '' || d === null ?
            -Infinity :
            parseInt( moment( d.replace ? d.replace(/<.*?>/g, '') : d, format, locale, true ).format( 'x' ), 10 );
    };
};
 
}(jQuery));
            
            </script>
            -->
           <script>            
                function rellenarpeso(){
                   // var ip = document.getElementById('tricipital');
                     var valor = document.getElementById('peso').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('peso').value=valor+'.00';
                 }
                }
            </script>
            
            <script>            
                function rellenartri(){
                   // var ip = document.getElementById('tricipital');
                     var valor = document.getElementById('tricipital').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('tricipital').value=valor+'.00';
                 }
                }
                
                function rellenarbi(){
                     var valor = document.getElementById('bicipital').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('bicipital').value=valor+'.00';
                 }
                }
                
                function rellenarsub(){
                     var valor = document.getElementById('subescapular').value;
                     var n = valor.length;
                 if(n===1 || n===2){
                 document.getElementById('subescapular').value=valor+'.00';
                 }
                }
                
                function rellenarsup(){
                   // var ip = document.getElementById('tricipital');
                     var valor = document.getElementById('suprailiaco').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('suprailiaco').value=valor+'.00';
                 }
                }                 
            </script>
            
            <script>            
                function rellenarbrazo(){
                    var valor = document.getElementById('brazo').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('brazo').value=valor+'.00';
                    }
                }
       
                function rellenarcintura(){
                    var valor = document.getElementById('cintura').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('cintura').value=valor+'.00';
                    }
                }
                
                function rellenarcadera(){
                    var valor = document.getElementById('cadera').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('cadera').value=valor+'.00';
                    }
                }
                
                
                function rellenarbrazo_edit(){
                    var valor = document.getElementById('brazo_edit').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('brazo_edit').value=valor+'.00';
                    }
                }
       
                function rellenarcintura_edit(){
                    var valor = document.getElementById('cintura_edit').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('cintura_edit').value=valor+'.00';
                    }
                }
                
                function rellenarcadera_edit(){
                    var valor = document.getElementById('cadera_edit').value;
                    var n = valor.length;
                    if(n===1 || n===2){
                    document.getElementById('cadera_edit').value=valor+'.00';
                    }
                }
            </script>
            
            <script>            
                function rellenartri_edit(){
                   // var ip = document.getElementById('tricipital');
                     var valor = document.getElementById('tricipital_edit').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('tricipital_edit').value=valor+'.00';
                 }
                }
                
                function rellenarbi_edit(){
                     var valor = document.getElementById('bicipital_edit').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('bicipital_edit').value=valor+'.00';
                 }
                }
                
                function rellenarsub_edit(){
                     var valor = document.getElementById('subescapular_edit').value;
                     var n = valor.length;
                 if(n===1 || n===2){
                 document.getElementById('subescapular_edit').value=valor+'.00';
                 }
                }
                
                function rellenarsup_edit(){
                   // var ip = document.getElementById('tricipital');
                     var valor = document.getElementById('suprailiaco_edit').value;
                     var n = valor.length;
                  //   document.write(n);
                 if(n===1 || n===2){
                 document.getElementById('suprailiaco_edit').value=valor+'.00';
                 }
                }            
            </script>
            
            <script>              
                function calcular_indice_cc(){
			var cintura = parseFloat($("#cintura").val());
			var cadera  = parseFloat($("#cadera").val());
                        var sexo='<?php echo$sexo1;?>';
                        var edad='<?php echo$edad;?>';         
                        //var tabla   = formulario.base.indicecc[socio.txtsexo];
         
                        if(sexo==='F'){
                            var indice_cc_f0 = new Array(4); 
                            indice_cc_f0[0] = 20;
                            indice_cc_f0[1] = 0.71 ;
                            indice_cc_f0[2] = 0.78;
                            indice_cc_f0[3] = 0.82;

                            var indice_cc_f1 = new Array(4); 
                            indice_cc_f1[0] = 30;
                            indice_cc_f1[1] = 0.72 ;
                            indice_cc_f1[2] = 0.79;
                            indice_cc_f1[3] = 0.84;

                            var indice_cc_f2 = new Array(4); 
                            indice_cc_f2[0] = 40;
                            indice_cc_f2[1] = 0.73 ;
                            indice_cc_f2[2] = 0.80;
                            indice_cc_f2[3] = 0.87;

                            var indice_cc_f3 = new Array(4); 
                            indice_cc_f3[0] = 50;
                            indice_cc_f3[1] = 0.74 ;
                            indice_cc_f3[2] = 0.82;
                            indice_cc_f3[3] = 0.88;

                            var indice_cc_f4 = new Array(4); 
                            indice_cc_f4[0] = 60;
                            indice_cc_f4[1] = 0.76 ;
                            indice_cc_f4[2] = 0.84;
                            indice_cc_f4[3] = 0.90;

                            var indice_cc_f = new Array (5); 
                            indice_cc_f[0] = indice_cc_f0; 
                            indice_cc_f[1] = indice_cc_f1;
                            indice_cc_f[2] = indice_cc_f2;
                            indice_cc_f[3] = indice_cc_f3;
                            indice_cc_f[4] = indice_cc_f4;

                            if(cadera!=0){
                                $("#indice_cc").val(cc = (cintura/cadera).toFixed(2));
                                    for(var i = 0; i < indice_cc_f.length; i++){
                                        if(edad >= indice_cc_f[i][0]){
                                            if(cc<indice_cc_f[i][1]) $('#cc-resul').css({'background':'lightgreen','color':'black'}).val('Baja');
                                            if(cc>=indice_cc_f[i][1]&&cc<indice_cc_f[i][2]) $('#cc-resul').css({'background':'lightblue','color':'black'}).val('Moderado');
                                            if(cc>=indice_cc_f[i][2]&&cc<=indice_cc_f[i][3]) $('#cc-resul').css({'background':'yellow','color':'black'}).val('Alto');
                                            if(cc>indice_cc_f[i][3]) $('#cc-resul').css({'background':'red','color':'white'}).val('Muy alto');
                                        }
                                    }
                                }
                            else{ 
                            $('#cc-resul').css({'background':'white','color':'black'}).val('');
                            }

                        }
                        if(sexo==='M'){
                             var indice_cc_m0 = new Array(4); 
                            indice_cc_m0[0] = 20;
                            indice_cc_m0[1] = 0.83 ;
                            indice_cc_m0[2] = 0.89;
                            indice_cc_m0[3] = 0.94;

                            var indice_cc_m1 = new Array(4); 
                            indice_cc_m1[0] = 30;
                            indice_cc_m1[1] = 0.84 ;
                            indice_cc_m1[2] = 0.92;
                            indice_cc_m1[3] = 0.96;

                            var indice_cc_m2 = new Array(4); 
                            indice_cc_m2[0] = 40;
                            indice_cc_m2[1] = 0.88 ;
                            indice_cc_m2[2] = 0.96;
                            indice_cc_m2[3] = 1.00;

                            var indice_cc_m3 = new Array(4); 
                            indice_cc_m3[0] = 50;
                            indice_cc_m3[1] = 0.90 ;
                            indice_cc_m3[2] = 0.97;
                            indice_cc_m3[3] = 1.02;

                            var indice_cc_m4 = new Array(4); 
                            indice_cc_m4[0] = 60;
                            indice_cc_m4[1] = 0.91 ;
                            indice_cc_m4[2] = 0.99;
                            indice_cc_m4[3] = 1.03;

                            var indice_cc_m = new Array (5); 
                            indice_cc_m[0] = indice_cc_m0; 
                            indice_cc_m[1] = indice_cc_m1;
                            indice_cc_m[2] = indice_cc_m2;
                            indice_cc_m[3] = indice_cc_m3;
                            indice_cc_m[4] = indice_cc_m4;
                            
                                if(cadera!=0){
                                $("#indice_cc").val(cc = (cintura/cadera).toFixed(2));
                                    for(var i = 0; i < indice_cc_m.length; i++){
                                        if(edad >= indice_cc_m[i][0]){
                                            if(cc<indice_cc_m[i][1]) $('#cc-resul').css({'background':'lightgreen','color':'black'}).val('Baja');
                                            if(cc>=indice_cc_m[i][1]&&cc<indice_cc_m[i][2]) $('#cc-resul').css({'background':'lightblue','color':'black'}).val('Moderado');
                                            if(cc>=indice_cc_m[i][2]&&cc<=indice_cc_m[i][3]) $('#cc-resul').css({'background':'yellow','color':'black'}).val('Alto');
                                            if(cc>indice_cc_m[i][3]) $('#cc-resul').css({'background':'red','color':'white'}).val('Muy alto');
                                        }
                                    }
                                }
                                else{ 
                                $('#cc-resul').css({'background':'white','color':'black'}).val('');
                                }

                        }

                        }
                                            
                function calcular_indice_cc_edit(){
			var cintura = parseFloat($("#cintura_edit").val());
			var cadera  = parseFloat($("#cadera_edit").val());
                        var sexo='<?php echo$sexo1;?>';
                        var edad='<?php echo$edad;?>';         
                        //var tabla   = formulario.base.indicecc[socio.txtsexo];
         
                        if(sexo==='F'){
                            var indice_cc_f0 = new Array(4); 
                            indice_cc_f0[0] = 20;
                            indice_cc_f0[1] = 0.71 ;
                            indice_cc_f0[2] = 0.78;
                            indice_cc_f0[3] = 0.82;

                            var indice_cc_f1 = new Array(4); 
                            indice_cc_f1[0] = 30;
                            indice_cc_f1[1] = 0.72 ;
                            indice_cc_f1[2] = 0.79;
                            indice_cc_f1[3] = 0.84;

                            var indice_cc_f2 = new Array(4); 
                            indice_cc_f2[0] = 40;
                            indice_cc_f2[1] = 0.73 ;
                            indice_cc_f2[2] = 0.80;
                            indice_cc_f2[3] = 0.87;

                            var indice_cc_f3 = new Array(4); 
                            indice_cc_f3[0] = 50;
                            indice_cc_f3[1] = 0.74 ;
                            indice_cc_f3[2] = 0.82;
                            indice_cc_f3[3] = 0.88;

                            var indice_cc_f4 = new Array(4); 
                            indice_cc_f4[0] = 60;
                            indice_cc_f4[1] = 0.76 ;
                            indice_cc_f4[2] = 0.84;
                            indice_cc_f4[3] = 0.90;

                            var indice_cc_f = new Array (5); 
                            indice_cc_f[0] = indice_cc_f0; 
                            indice_cc_f[1] = indice_cc_f1;
                            indice_cc_f[2] = indice_cc_f2;
                            indice_cc_f[3] = indice_cc_f3;
                            indice_cc_f[4] = indice_cc_f4;

                            if(cadera!=0){
                                $("#indice_cc_edit").val(cc = (cintura/cadera).toFixed(2));
                                    for(var i = 0; i < indice_cc_f.length; i++){
                                        if(edad >= indice_cc_f[i][0]){
                                            if(cc<indice_cc_f[i][1]) $('#cc-resul_edit').css({'background':'lightgreen','color':'black'}).val('Baja');
                                            if(cc>=indice_cc_f[i][1]&&cc<indice_cc_f[i][2]) $('#cc-resul_edit').css({'background':'lightblue','color':'black'}).val('Moderado');
                                            if(cc>=indice_cc_f[i][2]&&cc<=indice_cc_f[i][3]) $('#cc-resul_edit').css({'background':'yellow','color':'black'}).val('Alto');
                                            if(cc>indice_cc_f[i][3]) $('#cc-resul_edit').css({'background':'red','color':'white'}).val('Muy alto');
                                        }
                                    }
                                }
                            else{ 
                            $('#cc-resul_edit').css({'background':'white','color':'black'}).val('');
                            }

                        }
                        if(sexo==='M'){
                             var indice_cc_m0 = new Array(4); 
                            indice_cc_m0[0] = 20;
                            indice_cc_m0[1] = 0.83 ;
                            indice_cc_m0[2] = 0.89;
                            indice_cc_m0[3] = 0.94;

                            var indice_cc_m1 = new Array(4); 
                            indice_cc_m1[0] = 30;
                            indice_cc_m1[1] = 0.84 ;
                            indice_cc_m1[2] = 0.92;
                            indice_cc_m1[3] = 0.96;

                            var indice_cc_m2 = new Array(4); 
                            indice_cc_m2[0] = 40;
                            indice_cc_m2[1] = 0.88 ;
                            indice_cc_m2[2] = 0.96;
                            indice_cc_m2[3] = 1.00;

                            var indice_cc_m3 = new Array(4); 
                            indice_cc_m3[0] = 50;
                            indice_cc_m3[1] = 0.90 ;
                            indice_cc_m3[2] = 0.97;
                            indice_cc_m3[3] = 1.02;

                            var indice_cc_m4 = new Array(4); 
                            indice_cc_m4[0] = 60;
                            indice_cc_m4[1] = 0.91 ;
                            indice_cc_m4[2] = 0.99;
                            indice_cc_m4[3] = 1.03;

                            var indice_cc_m = new Array (5); 
                            indice_cc_m[0] = indice_cc_m0; 
                            indice_cc_m[1] = indice_cc_m1;
                            indice_cc_m[2] = indice_cc_m2;
                            indice_cc_m[3] = indice_cc_m3;
                            indice_cc_m[4] = indice_cc_m4;
                            
                                if(cadera!=0){
                                $("#indice_cc_edit").val(cc = (cintura/cadera).toFixed(2));
                                    for(var i = 0; i < indice_cc_m.length; i++){
                                        if(edad >= indice_cc_m[i][0]){
                                            if(cc<indice_cc_m[i][1]) $('#cc-resul_edit').css({'background':'lightgreen','color':'black'}).val('Baja');
                                            if(cc>=indice_cc_m[i][1]&&cc<indice_cc_m[i][2]) $('#cc-resul_edit').css({'background':'lightblue','color':'black'}).val('Moderado');
                                            if(cc>=indice_cc_m[i][2]&&cc<=indice_cc_m[i][3]) $('#cc-resul_edit').css({'background':'yellow','color':'black'}).val('Alto');
                                            if(cc>indice_cc_m[i][3]) $('#cc-resul_edit').css({'background':'red','color':'white'}).val('Muy alto');
                                        }
                                    }
                                }
                                else{ 
                                $('#cc-resul_edit').css({'background':'white','color':'black'}).val('');
                                }

                        }

                        }    
            </script>
            
      <!--      <script>
                function comparacion_cmb(){
                    if($("#brazo").val()!=0 && typeof formulario.base.per50[socio.txtsexo] != 'undefined'){
                        var brazo = parseFloat($("#brazo").val());
                        var triccipital = parseFloat($('#triccipital').val());
                        var tabla = formulario.base.per50[socio.txtsexo];
         
				if(socio.edad > 65) socio.edad = 65;
				for(var i in tabla){
					if(parseFloat(tabla[i][0]) <= socio.edad && socio.edad <= parseFloat(tabla[i][1])){
						var percentil = tabla[i][2];
					}
				}
				var cmb = (brazo-(triccipital/10*3.14))*10;
				var resultado = cmb/percentil;
				resultado = resultado.toFixed(2);
				if(resultado >= 0.9) $('#color-cmb').css('background-color','green');
				if(0.9 > resultado >= 0.6) $('#color-cmb').css('background-color','yellow');
				if(0.6 > resultado) $('#color-cmb').css('background-color','red');
				$("#cmb").val(resultado);
			}
			else{$("#cmb").val('0');$('#color-cmb').css('background-color','white');}
		}

            </script>-->
            
                     
                     
            
                 
    @stop
    
@stop
