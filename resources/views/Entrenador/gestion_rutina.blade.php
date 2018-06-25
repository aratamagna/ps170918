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
                
                $varformfieldcount = Session::get('Form_FieldCount',1);
                $varformfieldcount2 = Session::get('Form_FieldCount2',1);
                $varformfieldcount_dsa = Session::get('Form_FieldCount_dsa',1);
                
                $varformfieldcount2b = Session::get('Form_FieldCount2b',1);
                $varformfieldcount_dsb = Session::get('Form_FieldCount_dsb',1);
                
                $varformfieldcount2c = Session::get('Form_FieldCount2c',1);
                $varformfieldcount_dsc = Session::get('Form_FieldCount_dsc',1);
                
                $varformfieldcount2d = Session::get('Form_FieldCount2d',1);
                $varformfieldcount_dsd = Session::get('Form_FieldCount_dsd',1);
                
                $varformfieldcount2e = Session::get('Form_FieldCount2e',1);
                $varformfieldcount_dse = Session::get('Form_FieldCount_dse',1);
                
                $varformfieldcount2f = Session::get('Form_FieldCount2f',1);
                $varformfieldcount_dsf = Session::get('Form_FieldCount_dsf',1);
                
                $varformfieldcount2g = Session::get('Form_FieldCount2g',1);
                $varformfieldcount_dsg = Session::get('Form_FieldCount_dsg',1);
                
               /* echo $varformfieldcount;
                echo $varformfieldcount2;
                echo $varformfieldcount_dsa;
                
                echo $varformfieldcount2b;
                echo $varformfieldcount_dsb;
                
                echo $varformfieldcount2c;
                echo $varformfieldcount_dsc;
                
                echo $varformfieldcount2d;
                echo $varformfieldcount_dsd;
                
                echo $varformfieldcount2e;
                echo $varformfieldcount_dse;
                
                echo $varformfieldcount2f;
                echo $varformfieldcount_dsf;
                
                echo $varformfieldcount2g;
                echo $varformfieldcount_dsg;*/
                 
               // $variablephp = 1;
                ?>
                
                <center><h2>Gestion Rutina</h2></center>           
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
                
                    <!-- Button trigger modal -->
                    <!-- Large modal -->
                    @if(Session::has('errors') and $status=='error1' )
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-exampleabierto-modal-lg"><i class="fa fa-plus-square"></i> Nuevo rutina</button>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-examplecerrado-modal-lg"><i class="fa fa-plus-square"></i> Nuevo rutina</button>
                    @endif

                    <div class="table-responsive">              		
                       <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condensed" id="example">
                           
                            <thead>
                                <tr>
                                    <th rowspan="2">Objetivo</th>
                                    <th rowspan="2">Nombre Entrenamiento</th>
                                    <th rowspan="2">Fases del Entrenamiento</th>
                                    <th rowspan="2">Días de la semana</th>
                                    <th colspan="5">Información de la rutina</th>
                                </tr>
                                <tr>
                                  
                                    <th>Grupo Muscular</th>
                                    <th>Ejercicio</th>
                                    <th>Series</th>
                                    <th>Repeticiones</th>
                                    <th>Descanso (minutos)</th>      
                                </tr>
                            </thead>
                            <tbody>
                                <!--asignamos a un bucle de array $users a $user-->
                                <?php
                                $aux=0;

                                $noment_idaux=0;
                                ?>
                                
                                
                                @foreach($entrenamientos as $entrenamiento)
                                    
                                
                                      	<?php
                                        $cont=0;     
                                        $dsemanas = Entrenamiento::find($entrenamiento->id)->dsemanas;
                                        $ejercicios = Entrenamiento::find($entrenamiento->id)->ejercicios;
                                        $con_entrenamiento = count($ejercicios);
                                        $noment_id = $entrenamiento->entnombre->id;
                                        
                                       
                                            
                                           /* echo "aux:".$aux;
                                            
                                            echo "  noment_id:".$noment_id;
                                            echo "  noment_idaux:".$noment_idaux;
                                            echo "<br>";*/
                                            
                                            if($aux!==0 && $noment_id!==$noment_idaux)
                                            {
                                            ?>  
                                
                                                <tr>
                                                    <td class="active"><br><br></td>
                                                    <td class="active"></td>  
                                                    <td class="active"</td>  
                                                    <td class="active"></td>  
                                                    <td class="active"></td>
                                                    <td class="active"></td>  
                                                    <td class="active"></td>  
                                                    <td class="active"></td>  
                                                    <td class="active"></td>  
                                                  
                                                </tr>
                                            <?php
                                            }
                                        ?>
                                                
                                <tr>
                                        <td>{{ $entrenamiento->objetivo->obj_nombre}}</td>      <!--Objetivo-->
                                        
                                        <td>{{ $entrenamiento->entnombre->enn_nombre }}</td>    <!--Nombre entrenamiento-->
                                        
                                        <td>{{ $entrenamiento->ent_nombre }}</td>               <!--Fase entrenamiento-->                      
                                     
                                        <td>
                                        @foreach($dsemanas as $dsemana)
                                         {{ $dsemana->dis_nombre}}                              <!--Días de la semana-->
                                        @endforeach 
                                        </td>
                                        
                                        
                                        @foreach($ejercicios as $ejercicio)
                                                                
                                            <td>{{ $ejercicio->grupomuscular->grm_nombre}}</td> <!--Grupo muscular-->
                                            <td>{{ $ejercicio->eje_nombre}}</td>                <!--Ejercicio-->
                                            <td>{{ $ejercicio->pivot->ejn_serie}}</td>          <!--Serie-->
                                            <td>{{ $ejercicio->pivot->ejn_repeticion}}</td>     <!--Repetición-->
                                            <td>{{ $ejercicio->pivot->ejn_descanso}}</td>       <!--Descanso-->                          
                                            </tr>
                                          
                                            <?php
                                            $cont ++;
                                            if($cont!=count($ejercicios))
                                            { 
                                            ?>
                                            <tr>
                                            <td></td>
                                            <td>{{ $entrenamiento->entnombre->enn_nombre }}</td>
                                            <td></td>    
                                            <td></td>  
                                            <?php
                                            }                                        
                                            ?>
                                                              
                                        @endforeach 
                                        
                                         <?php
                                          
                                            if(0==count($ejercicios))
                                            { 
                                            ?>
                                            <td></td>
                                            <td></td>  
                                            <td></td>  
                                            <td></td>  
                                            <td></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                      
                                        
                                        
                                        
                                           <?php
                                            $noment_idaux=$noment_id;
                                            $aux++;
                                            ?>
                                   
                                   
                                        
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
                            <form action="registrar_rutina" method="POST" id="form" name="form" autocomplete="off" >
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Registrar rutina</h4>
                                    </div> 

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

                                            <div class="row">
                                            
                                                <div class="col-md-6">     
                                                    <div class="form-group">
                                                        <label for="objetivo">*Objetivo</label>
                                                        <div class="selectpicker">
                                                        {{ Form::select('objetivo', [null=>''] + $objetivo, Input::old('objetivo'),array('class' => 'form-control')) }}
                                                        </div>
                                                        <div class="bg-danger">{{$errors->first('objetivo')}}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nombre_ent">*Nombre Entrenamiento</label>
                                                        {{Form::input("text", "nombre_ent",Input::old('nombre_ent'), array("class" => "form-control","onblur"=>"upperCase()","onKeyUp"=>"this.value = this.value.toUpperCase();","placeholder"=>"Ej: HIPERTROFIA NIVEL 1"))}}
                                                        <div class="bg-danger">{{$errors->first('nombre_ent')}}</div>
                                                    </div>                                              
                                                </div>
                    
                                            </div>
                                         
                                            
                                            <a id="agregarFaseEntrenamiento" class="btn btn-info btn-sm" href="#">Agregar Fase Entrenamiento</a>
                                            <center><h4><div class="results">  </div></h4></center>
                                            
                   
                                            <a href="" disabled style="display:block;" class="btn btn-primary btn-sm">Fase Entrenamiento 1</a>
                                             <!--<div class="row">-->
                                              
                       

                                                <br>
                                                <div id="fase_entrenamiento">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="fases_ent">*Fase del entrenamiento</label>
                                                               <textarea cols=20 rows=3 name="fases_ent" class="form-control" ><?php if (empty(Input::old('fases_ent'))){ ?>ENTRENAMIENTO 1:<?php } else{echo Input::old('fases_ent');}?>
                                                               </textarea>
                                                            <div class="bg-danger"><?php echo $fe=$errors->first("fases_ent")?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dia_semana">  
                                                    <div class="col-md-2">   
                                                        <div class="form-group">
                                                             <label for="diasemana">*Día semana</label>
                                                             <div class="selectpicker">
                                                                <select name="diasemana" id="diasemana" class="form-control">
                                                                    <option value="{{Input::old('diasemana')}}"><?php echo $diasemana = DB::table('dsemanas')->where('id','=', Input::old('diasemana') )->pluck('dis_nombre'); ?></option>
                                                                    @foreach($diasemanas as $dsemana)
                                                                    <option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>
                                                                    @endforeach 
                                                                </select>
                                                             </div>
                                                             <div class="bg-danger">{{$errors->first("diasemana")}}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div  id="completar_ds">

                                                </div>

                                                <div class="col-md-1">
                                                    <a id="agregarDiaSemana" style='display:block;' href="#">+</a>
                                                </div>
                                                                       
                                            <!--</div>-->
                                            
                                            <div class="row"></div>
                                            <div class="row">
                                                    <div id="grupomuscular_">  
                                                        <div class="col-md-2">   
                                                            <div class="form-group">
                                                                 <label for="grupomuscular">*Grupo Muscular</label>
                                                                 <div class="selectpicker">
                                                                    <select name="grupomuscular" id="grupomuscular" class="form-control">
                                                                        <option value="{{Input::old('grupomuscular')}}">{{DB::table('grupomusculares')->where('id','=', Input::old('grupomuscular') )->pluck('grm_nombre')}}</option>
                                                                        @foreach($grupomusculares as $grupomuscular)
                                                                        <option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>
                                                                        @endforeach 
                                                                    </select>
                                                                 </div>
                                                                 <div class="bg-danger">{{$errors->first("grupomuscular")}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      
                                                    <div id="ejercicio_">   
                                                        <div class="col-md-4"> 
                                                            <div class="form-group">
                                                                <label for="ejercicio">*Ejercicio</label>
                                                                 <select name="ejercicio" id="ejercicio" class="form-control">
                                                                    <option value="{{Input::old('ejercicio')}}">{{DB::table('ejercicios')->where('id','=', Input::old('ejercicio') )->pluck('eje_nombre')}}</option>
                                                                </select>
                                                                <div class="bg-danger">{{$errors->first("ejercicio")}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="series_">   
                                                        <div class="col-md-2">     
                                                            <div class="form-group">
                                                                <label for="series">*Series</label>                                                                                   
                                                                <input type="text" name="series" value="{{Input::old('series')}}" class="form-control" id="series"  placeholder="Ej: 4">
                                                                <div class="bg-danger">{{$errors->first("series")}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="repeticiones">   
                                                        <div class="col-md-2">     
                                                            <div class="form-group">
                                                                <label for="repeticiones">*Repeticiones</label>
                                                                 <input type="text" name="repeticiones" value="{{Input::old('repeticiones')}}" class="form-control" id="repeticiones"  placeholder="Ej: 6-7*">
                                                                <div class="bg-danger">{{$errors->first('repeticiones')}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="descanso">   
                                                        <div class="col-md-2">     
                                                            <div class="form-group">
                                                                <label for="descanso">*Descanso (minutos)</label>                         
                                                                 <input type="text" name="descanso" value="{{Input::old('descanso')}}" class="form-control" id="descanso"  placeholder="Ej: 2-3">
                                                                <div class="bg-danger">{{$errors->first('descanso')}}</div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                      <br>
                                                      
                                            <div  id="completar2a">
                                                
                                            </div>  
                                                    
                                    </div>
                                       <center>
                                           <div id="addGrupoMuscular" style='display:block;'>
                                           <a id="agregarGrupoMuscular" class="btn btn-info btn-sm" href="#">+</a>
                                           </div>
                                       </center>
                
                     
                                       
<!--/****************************************************************************************************************/-->

                                            <div class="b">
                                                <div id="completar2">         
                                                </div>
                                                    <div id="completar_ds2">
                                                    </div>
                                                    <div id="addDiaSemana2" style="display:none;">
                                                        <a id="agregarDiaSemana2"  href="#">+</a>
                                                    </div>
                                                <div id="completar2_2">
                                                </div>
                                                    
                                              
                                                <div id="completar2b">
                                                </div> 
                                                <div id="div2" style="display:none;">
                                                <center><a id="agregarGrupoMuscular2" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>    
                                         
                                            
                                            <div class="c">
                                                <div id="completar3">
                                                </div>
                                                    <div id="completar_ds3">
                                                    </div>
                                                    <div id="addDiaSemana3" style="display:none;">
                                                        <a id="agregarDiaSemana3"  href="#">+</a>
                                                    </div>
                                                <div id="completar3_2">   
                                                </div>
                                                
                                                <div id="completar2c">
                                                </div> 
                                                <div id='div3' style='display:none;'>
                                                <center><a id="agregarGrupoMuscular3" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>
                                            

                                            <div class="d">
                                                <div id="completar4">
                                                </div>
                                                    <div id="completar_ds4">
                                                    </div>
                                                    <div id="addDiaSemana4" style="display:none;">
                                                        <a id="agregarDiaSemana4"  href="#">+</a>
                                                    </div>
                                                <div id="completar4_2">
                                                </div>
                                                
                                                <div id="completar2d">
                                                </div> 
                                                <div id='div4' style='display:none;'>
                                                <center><a id="agregarGrupoMuscular4" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>


                                            <div class="e">
                                                <div id="completar5">
                                                </div>
                                                    <div id="completar_ds5">
                                                    </div>
                                                    <div id="addDiaSemana5" style="display:none;">
                                                        <a id="agregarDiaSemana5"  href="#">+</a>
                                                    </div>
                                                <div id="completar5_2">
                                                </div>
                                                
                                                <div id="completar2e">
                                                </div> 
                                                <div id='div5' style='display:none;'>
                                                <center><a id="agregarGrupoMuscular5" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>


                                            <div class="f">
                                                <div id="completar6">
                                                </div>
                                                    <div id="completar_ds6">
                                                    </div>
                                                    <div id="addDiaSemana6" style="display:none;">
                                                        <a id="agregarDiaSemana6"  href="#">+</a>
                                                    </div>
                                                <div id="completar6_2">
                                                </div>
                                                
                                                <div id="completar2f">
                                                </div> 
                                                <div id='div6' style='display:none;'>
                                                <center><a id="agregarGrupoMuscular6" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>


                                            <div class="g">
                                                <div id="completar7">
                                                </div>
                                                    <div id="completar_ds7">
                                                    </div>
                                                    <div id="addDiaSemana7" style="display:none;">
                                                        <a id="agregarDiaSemana7"  href="#">+</a>
                                                    </div>
                                                <div id="completar7_2">
                                                </div>
                                                
                                                <div id="completar2g">
                                                </div> 
                                                <div id='div7' style='display:none;'>
                                                <center><a id="agregarGrupoMuscular7" class="btn btn-info btn-sm" href="#">+</a></center>
                                                </div>
                                            </div>
                                            

                                            


                                    </div>

                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <input type="hidden" id="Form_FieldCount" name="Form_FieldCount">
                                    
                                    <input type="hidden" id="Form_FieldCount2" name="Form_FieldCount2">
                                    <input type="hidden" id="Form_FieldCount_dsa" name="Form_FieldCount_dsa">
                                    
                                    <input type="hidden" id="Form_FieldCount2b" name="Form_FieldCount2b">
                                    <input type="hidden" id="Form_FieldCount_dsb" name="Form_FieldCount_dsb">
                                    
                                    <input type="hidden" id="Form_FieldCount2c" name="Form_FieldCount2c">
                                    <input type="hidden" id="Form_FieldCount_dsc" name="Form_FieldCount_dsc">
                                    
                                    <input type="hidden" id="Form_FieldCount2d" name="Form_FieldCount2d">
                                    <input type="hidden" id="Form_FieldCount_dsd" name="Form_FieldCount_dsd">
                                    
                                    <input type="hidden" id="Form_FieldCount2e" name="Form_FieldCount2e">
                                    <input type="hidden" id="Form_FieldCount_dse" name="Form_FieldCount_dse">
                                    
                                    <input type="hidden" id="Form_FieldCount2f" name="Form_FieldCount2f">
                                    <input type="hidden" id="Form_FieldCount_dsf" name="Form_FieldCount_dsf">
                                    
                                    <input type="hidden" id="Form_FieldCount2g" name="Form_FieldCount2g">
                                    <input type="hidden" id="Form_FieldCount_dsg" name="Form_FieldCount_dsg">
                                    
                                    
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
                            <form action="editar_ent" method="POST" id="formEdit" name="form" role="form" autocomplete="off">
                                
                           
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar rutina</h4>
                                    </div> 

                                    <div class="modal-body">
                                           <p>Los campos marcados (*) deben ser llenados obligatoriamente</p>

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
           <!--     <script type="text/javascript" language="javascript" src="FormularioDinamico/js/jquery.agregaform.js"></script>-->
           
                
                
                
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
                            $('#example').dataTable( {
                                 //"order": [[ 1, "desc" ]],
                                 "order": [],
                                 //"columnDefs": [ { "targets": 0, "orderable": false } ],
                                 "columnDefs": [{ targets: 'no-sort', orderable: false }],
                                 "pagingType": "full_numbers",
                            "oLanguage": {
                                   "sSearch": "Buscar:",
                                   "sInfo": "Mostrando _START_-_END_ de un total de _TOTAL_ entradas",
                                   "sEmptyTable": "No se han ingresado rutinas.",
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
                });
            });
                </script>
                
                <script>
                $(function () { $('.bs-exampleeditabierto-modal-lg').modal({
                   keyboard: true
                });
            });
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
                $('#grupomuscular').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                </script>
                
        
                
               
                
                <script language="javascript" type="text/javascript">
                    function eliminar(id_sup){
	
                        if(confirm("\n\n¿ Está seguro de que desea eliminar rutina?"))
                        {
                                window.location="eliminar-rutina/"+id_sup;

                                }
                    }
                </script>
           
                
                  
                  
         <!--   <input id="val" type="hidden" name="user" class="input-block-level" value="" >
            <script>
            $(document).ready(function() {

              $('.edit2').click(function() {

                    $('[name=user]').val($(this).attr ('id'));

              
                   var faction = "<?php echo URL::to('data'); ?>";

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

              });

            });
            </script>-->
                
      
              

                
       

<script type="text/javascript">
                $(document).ready(function() {

            var varformfieldcount = "<?php echo $varformfieldcount; ?>" ;
            
            var varformfieldcount2 = "<?php echo $varformfieldcount2; ?>" ;
            var varformfieldcount_dsa = "<?php echo $varformfieldcount_dsa; ?>" ;
            
            var varformfieldcount2b = "<?php echo $varformfieldcount2b; ?>" ;
            var varformfieldcount_dsb = "<?php echo $varformfieldcount_dsb; ?>" ; 
            
            var varformfieldcount2c = "<?php echo $varformfieldcount2c; ?>" ;
            var varformfieldcount_dsc = "<?php echo $varformfieldcount_dsc; ?>" ; 

            var varformfieldcount2d = "<?php echo $varformfieldcount2d; ?>" ;
            var varformfieldcount_dsd = "<?php echo $varformfieldcount_dsd; ?>" ; 
            
            var varformfieldcount2e = "<?php echo $varformfieldcount2e; ?>" ;
            var varformfieldcount_dse = "<?php echo $varformfieldcount_dse; ?>" ;
            
            var varformfieldcount2f = "<?php echo $varformfieldcount2f; ?>" ;
            var varformfieldcount_dsf = "<?php echo $varformfieldcount_dsf; ?>" ;
            
            var varformfieldcount2g = "<?php echo $varformfieldcount2g; ?>" ;
            var varformfieldcount_dsg = "<?php echo $varformfieldcount_dsg; ?>" ;            
    
    

    
    

window.onload = function(){
    for(i=1;i<varformfieldcount;i++){ 
    document.getElementById("agregarFaseEntrenamiento").click();
    }
    
    for(j=1;j<varformfieldcount2;j++){ 
    document.getElementById("agregarGrupoMuscular").click();
    }
    for(k=1;k<varformfieldcount_dsa;k++){
    document.getElementById("agregarDiaSemana").click();
    }
    
    for(j2=1;j2<varformfieldcount2b;j2++){ 
    document.getElementById("agregarGrupoMuscular2").click();
    }
    for(k2=1;k2<varformfieldcount_dsb;k2++){
    document.getElementById("agregarDiaSemana2").click();
    }
    
    for(j3=1;j3<varformfieldcount2c;j3++){ 
    document.getElementById("agregarGrupoMuscular3").click();
    }
    for(k3=1;k3<varformfieldcount_dsc;k3++){
    document.getElementById("agregarDiaSemana3").click();
    }
    
    for(j4=1;j4<varformfieldcount2d;j4++){ 
    document.getElementById("agregarGrupoMuscular4").click();
    }
    for(k4=1;k4<varformfieldcount_dsd;k4++){
    document.getElementById("agregarDiaSemana4").click();
    }
    
    for(j5=1;j5<varformfieldcount2e;j5++){ 
    document.getElementById("agregarGrupoMuscular5").click();
    }
    for(k5=1;k5<varformfieldcount_dse;k5++){
    document.getElementById("agregarDiaSemana5").click();
    }
    
    for(j6=1;j6<varformfieldcount2f;j6++){ 
    document.getElementById("agregarGrupoMuscular6").click();
    }
    for(k6=1;k6<varformfieldcount_dsf;k6++){
    document.getElementById("agregarDiaSemana6").click();
    }
    
    for(j7=1;j7<varformfieldcount2g;j7++){ 
    document.getElementById("agregarGrupoMuscular7").click();
    }
    for(k7=1;k7<varformfieldcount_dsg;k7++){
    document.getElementById("agregarDiaSemana7").click();
    }
};


/**********************************************************************************************************************************/



document.getElementById('Form_FieldCount').value = 1;
 
                    var MaxInputs           = 9; //Número Maximo de Campos
                   
                    var completar2      = $("#completar2");
                    var completar2_2      = $("#completar2_2");
                    var completar3      = $("#completar3");
                    var completar3_2      = $("#completar3_2");
                    var completar4      = $("#completar4");
                    var completar4_2      = $("#completar4_2");
                    var completar5      = $("#completar5");
                    var completar5_2      = $("#completar5_2");
                    var completar6      = $("#completar6");
                    var completar6_2      = $("#completar6_2");
                    var completar7      = $("#completar7");
                    var completar7_2      = $("#completar7_2");
                    var completar;
                    var completarv2;

                    var AddButton       = $("#agregarFaseEntrenamiento"); //ID del Botón Agregar

                    var a = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount = a-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_fases_ent='';
                    var str2_fases_ent='';
                    var str_diasemana='';
                    var str2_diasemana='';
                    var str3_diasemana='';
                    var str_grupomuscular='';
                    var str2_grupomuscular='';
                    var str3_grupomuscular='';
                    var str_ejercicio='';
                    var str2_ejercicio='';
                    var str3_ejercicio='';
                    var str_series='';
                    var str2_series='';
                    var str_repeticiones='';
                    var str2_repeticiones='';
                    var str_descanso='';
                    var str2_descanso='';
                
                document.querySelector('.results').innerHTML = 'Cantidad de fases '+FieldCount;
                // Using the jQuery library
                $('.results').html('Cantidad de fases '+FieldCount);


                    //document.write(a);//4
                    //document.write(FieldCount);//1
                    
                                    
  

    
     
     
     
   // $(AddButton).click(FuncFieldCount);
    
    
   // function FuncFieldCount(){
        
        $(AddButton).click(function(e){
        

                            if(a <= MaxInputs) //max input box allowed
                            {
                                FieldCount++; //primera vez es 2
                         
                                
                               document.getElementById('Form_FieldCount').value = FieldCount; 
                                document.querySelector('.results').innerHTML = 'Cantidad de fases '+FieldCount;
                                // Using the jQuery library
                                $('.results').html('Cantidad de fases '+FieldCount);
if(FieldCount===2){
completar=completar2;
completarv2=completar2_2;
document.getElementById('div2').style.display = 'block';
document.getElementById('addDiaSemana2').style.display = 'block';
str_fases_ent='<?php if (empty(Input::old('fases_ent2'))){ ?>ENTRENAMIENTO 2:<?php } else{echo Input::old('fases_ent2');}?>';
str2_fases_ent='{{$errors->first("fases_ent2")}}';
str_diasemana='{{Input::old("diasemana2")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana2")}}';
str_grupomuscular='{{Input::old("grupomuscular2")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular2")}}';
str_ejercicio='{{Input::old("ejercicio2")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2"))->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio2")}}';
str_series='{{{Input::old("series2")}}}';
str2_series='{{$errors->first("series2")}}';
str_repeticiones='{{{Input::old("repeticiones2")}}}';
str2_repeticiones='{{$errors->first("repeticiones2")}}';
str_descanso='{{{Input::old("descanso2")}}}';
str2_descanso='{{$errors->first("descanso2")}}';
}
else if(FieldCount===3){
completar=completar3;
completarv2=completar3_2;
document.getElementById('div3').style.display = 'block';
document.getElementById('addDiaSemana3').style.display = 'block';
document.getElementById('delete2').style.display = 'none';
document.getElementById('show2').style.display = 'block';
str_fases_ent='<?php if (empty(Input::old('fases_ent3'))){ ?>ENTRENAMIENTO 3:<?php } else{echo Input::old('fases_ent3');}?>';
str2_fases_ent='{{$errors->first("fases_ent3")}}';
str_diasemana='{{Input::old("diasemana3")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana3")}}';
str_grupomuscular='{{Input::old("grupomuscular3")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular3")}}';
str_ejercicio='{{Input::old("ejercicio3")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3") )->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio3")}}';
str_series='{{{Input::old("series3")}}}';
str2_series='{{$errors->first("series3")}}';
str_repeticiones='{{{Input::old("repeticiones3")}}}';
str2_repeticiones='{{$errors->first("repeticiones3")}}';
str_descanso='{{{Input::old("descanso3")}}}';
str2_descanso='{{$errors->first("descanso3")}}';
}
else if(FieldCount===4){
completar=completar4;
completarv2=completar4_2;
document.getElementById('div4').style.display = 'block';
document.getElementById('addDiaSemana4').style.display = 'block';
document.getElementById('delete3').style.display = 'none';
document.getElementById('show3').style.display = 'block';
str_fases_ent='<?php if (empty(Input::old('fases_ent4'))){ ?>ENTRENAMIENTO 4:<?php } else{echo Input::old('fases_ent4');}?>';
str2_fases_ent='{{$errors->first("fases_ent4")}}';
str_diasemana='{{Input::old("diasemana4")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana4")}}';
str_grupomuscular='{{Input::old("grupomuscular4")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular4")}}';
str_ejercicio='{{Input::old("ejercicio4")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4") )->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio4")}}';
str_series='{{{Input::old("series4")}}}';
str2_series='{{$errors->first("series4")}}';
str_repeticiones='{{{Input::old("repeticiones4")}}}';
str2_repeticiones='{{$errors->first("repeticiones4")}}';
str_descanso='{{{Input::old("descanso4")}}}';
str2_descanso='{{$errors->first("descanso4")}}';
}
else if(FieldCount===5){
completar=completar5;
completarv2=completar5_2;
document.getElementById('div5').style.display = 'block';
document.getElementById('addDiaSemana5').style.display = 'block';
document.getElementById('delete4').style.display = 'none';
document.getElementById('show4').style.display = 'block';
str_fases_ent='<?php if (empty(Input::old('fases_ent5'))){ ?>ENTRENAMIENTO 5:<?php } else{echo Input::old('fases_ent5');}?>';
str2_fases_ent='{{$errors->first("fases_ent5")}}';
str_diasemana='{{Input::old("diasemana5")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana5")}}';
str_grupomuscular='{{Input::old("grupomuscular5")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular5")}}';
str_ejercicio='{{Input::old("ejercicio5")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5") )->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio5")}}';
str_series='{{{Input::old("series5")}}}';
str2_series='{{$errors->first("series5")}}';
str_repeticiones='{{{Input::old("repeticiones5")}}}';
str2_repeticiones='{{$errors->first("repeticiones5")}}';
str_descanso='{{{Input::old("descanso5")}}}';
str2_descanso='{{$errors->first("descanso5")}}';
}
else if(FieldCount===6){
completar=completar6;
completarv2=completar6_2;
document.getElementById('div6').style.display = 'block';
document.getElementById('addDiaSemana6').style.display = 'block';
document.getElementById('delete5').style.display = 'none';
document.getElementById('show5').style.display = 'block';
str_fases_ent='<?php if (empty(Input::old('fases_ent6'))){ ?>ENTRENAMIENTO 6:<?php } else{echo Input::old('fases_ent6');}?>';
str2_fases_ent='{{$errors->first("fases_ent6")}}';
str_diasemana='{{Input::old("diasemana6")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana6")}}';
str_grupomuscular='{{Input::old("grupomuscular6")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular6")}}';
str_ejercicio='{{Input::old("ejercicio6")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6") )->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio6")}}';
str_series='{{{Input::old("series6")}}}';
str2_series='{{$errors->first("series6")}}';
str_repeticiones='{{{Input::old("repeticiones6")}}}';
str2_repeticiones='{{$errors->first("repeticiones6")}}';
str_descanso='{{{Input::old("descanso6")}}}';
str2_descanso='{{$errors->first("descanso6")}}';
}
else if(FieldCount===7){
completar=completar7;
completarv2=completar7_2;
document.getElementById('div7').style.display = 'block';
document.getElementById('addDiaSemana7').style.display = 'block';
document.getElementById('delete6').style.display = 'none';
document.getElementById('show6').style.display = 'block';
//str_fases_ent='{{{Input::old("fases_ent7")}}}';
str_fases_ent='<?php if (empty(Input::old('fases_ent7'))){ ?>ENTRENAMIENTO 7:<?php } else{echo Input::old('fases_ent7');}?>';
str2_fases_ent='{{$errors->first("fases_ent7")}}';
str_diasemana='{{Input::old("diasemana7")}}';
str2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7") )->pluck("dis_nombre")}}';
str3_diasemana='{{$errors->first("diasemana7")}}';
str_grupomuscular='{{Input::old("grupomuscular7")}}';
str2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7") )->pluck("grm_nombre")}}';
str3_grupomuscular='{{$errors->first("grupomuscular7")}}';
str_ejercicio='{{Input::old("ejercicio7")}}';
str2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7") )->pluck("eje_nombre")}}';
str3_ejercicio='{{$errors->first("ejercicio7")}}';
str_series='{{{Input::old("series7")}}}';
str2_series='{{$errors->first("series7")}}';
str_repeticiones='{{{Input::old("repeticiones7")}}}';
str2_repeticiones='{{$errors->first("repeticiones7")}}';
str_descanso='{{{Input::old("descanso7")}}}';
str2_descanso='{{$errors->first("descanso7")}}';

}

(completar).append('<div class="a'+FieldCount+'">'+
                        '<a href="#" id="delete'+FieldCount+'" style="display:block;" class="eliminar btn btn-danger btn-sm">Eliminar Fase Entrenamiento '+FieldCount+'</a>'+
                        '<a href="" id="show'+FieldCount+'" disabled style="display:none;" class="btn btn-primary btn-sm">Fase Entrenamiento '+FieldCount+'</a>'+
                                '<div id="fase_entrenamiento">'+
                                   '<div class="col-sm-4">'+
                                       '<div class="form-group text-left">'+
                                          '<label for="fases_ent'+FieldCount+'">*Fase del entrenamiento</label>'+
                                              '<textarea cols=20 rows=3 name="fases_ent'+FieldCount+'" class="form-control" >'+str_fases_ent+'</textarea>'+
                                              '<div class="bg-danger">'+str2_fases_ent+'</div>'+
                                        '</div>'+
                                   '</div>'+
                                '</div>'+
                                '<div id="dia_semana">'+
                                    '<div class="col-md-2">'+
                                        '<div class="form-group">'+
                                             '<label for="diasemana'+FieldCount+'">*Día semana</label>'+
                                             '<div class="selectpicker">'+
                                                '<select name="diasemana'+FieldCount+'" id="diasemana'+FieldCount+'" class="form-control">'+
                                                    '<option value="'+str_diasemana+'">'+str2_diasemana+'</option>'+
                                                    '@foreach($diasemanas as $dsemana)'+
                                                    '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                                    '@endforeach'+
                                                '</select>'+
                                             '</div>'+
                                             '<div class="bg-danger">'+str3_diasemana+'</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                    '</div>');
                                                    
$(completarv2).append('<div class="b'+FieldCount+'">'+
                        '<div class="row"></div>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group text-left">'+
                                         '<label for="grupomuscular'+FieldCount+'">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount+'" id="grupomuscular'+FieldCount+'" class="form-control">'+
                                                '<option value="'+str_grupomuscular+'">'+str2_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group text-left">'+
                                        '<label for="ejercicio'+FieldCount+'">*Ejercicio</label>'+
                                         '<select name="ejercicio'+FieldCount+'" id="ejercicio'+FieldCount+'" class="form-control">'+
                                            '<option value="'+str_ejercicio+'">'+str2_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group text-left">'+
                                        '<label for="series'+FieldCount+'">*Series</label>'+
                                         '<input type="text" class="form-control" name="series'+FieldCount+'" value="'+str_series+'" id="series'+FieldCount+'" placeholder="series'+FieldCount+' ">'+
                                        '<div class="bg-danger">'+str2_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group text-left">'+
                                        '<label for="repeticiones'+FieldCount+'">*Repeticiones</label>'+
                                         '<input type="text" class="form-control" name="repeticiones'+FieldCount+'" value="'+str_repeticiones+'" id="repeticiones'+FieldCount+'" placeholder="repeticiones'+FieldCount+' ">'+
                                        '<div class="bg-danger">'+str2_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group text-left">'+
                                        '<label for="descanso'+FieldCount+'">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount+'" value="'+str_descanso+'" id="descanso'+FieldCount+'" placeholder="descanso'+FieldCount+' ">'+
                                         '<div class="bg-danger">'+str2_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                        '</div>'+
                    '</div>');
                                                                                  

a++; //text box increment




                                             

                $('#grupomuscular2').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });



                            }
                            
                            
                            
                            
                            return false;
                        
                        });
                         

                        $("body").on("click",".eliminar", function(e){ //click en eliminar campo
                            if( a > 1 ) {
                                //$(this).parent('div').remove(); //eliminar el campo
                                //$(this).closest(".b").remove();
                                //$( ".a2" ).remove();
                                if(FieldCount===2){
                                $( "div" ).remove( ".a2" );
                                $( "div" ).remove( ".b2" );
                                }
                                if(FieldCount===3){
                                $( "div" ).remove( ".a3" );
                                $( "div" ).remove( ".b3" );
                                }
                                if(FieldCount===4){
                                $( "div" ).remove( ".a4" );
                                $( "div" ).remove( ".b4" );
                                }
                                if(FieldCount===5){
                                $( "div" ).remove( ".a5" );
                                $( "div" ).remove( ".b5" );
                                }
                                if(FieldCount===6){
                                $( "div" ).remove( ".a6" );
                                $( "div" ).remove( ".b6" );
                                }   
                                if(FieldCount===7){
                                $( "div" ).remove( ".a7" );
                                $( "div" ).remove( ".b7" );
                                }
                                       
                                //$( "div" ).remove( ".a" );
                                //$( "empty" ).remove( ".a" );
                                //$(".a").empty();
                                a--;
                                FieldCount=FieldCount-1;
                                document.getElementById('Form_FieldCount').value = FieldCount;
                                
                                document.querySelector('.results').innerHTML = 'Cantidad de fases '+FieldCount;
                                // Using the jQuery library
                                $('.results').html('Cantidad de fases '+FieldCount);
                                
                                if(FieldCount===1){
                                document.getElementById('div2').style.display = 'none';
                                document.getElementById('addDiaSemana2').style.display = 'none';
                                }
                                else if(FieldCount===2){  
                                document.getElementById('div3').style.display = 'none';
                                document.getElementById('addDiaSemana3').style.display = 'none';
                                document.getElementById('delete2').style.display = 'block';
                                document.getElementById('show2').style.display = 'none';
                                }
                                else if(FieldCount===3){
                                document.getElementById('div4').style.display = 'none';
                                document.getElementById('addDiaSemana4').style.display = 'none';
                                document.getElementById('delete3').style.display = 'block';
                                document.getElementById('show3').style.display = 'none';
                                }
                                else if(FieldCount===4){
                                document.getElementById('div5').style.display = 'none';
                                document.getElementById('addDiaSemana5').style.display = 'none';
                                document.getElementById('delete4').style.display = 'block';
                                document.getElementById('show4').style.display = 'none';
                                }
                                else if(FieldCount===5){
                                document.getElementById('div6').style.display = 'none';
                                document.getElementById('addDiaSemana6').style.display = 'none';
                                document.getElementById('delete5').style.display = 'block';
                                document.getElementById('show5').style.display = 'none';
                                }
                                else if(FieldCount===6){
                                document.getElementById('div7').style.display = 'none';
                                document.getElementById('addDiaSemana7').style.display = 'none';
                                document.getElementById('delete6').style.display = 'block';
                                document.getElementById('show6').style.display = 'none';
                                }
                            }
                            return false;
                        });



/****************************************************************************************************************************/
/*2A3A4A5A6A7A8A9A10A*/ 
                    

                    var MaxInputs2           = 12; //Número Maximo de Campos
         
                    var completar2a      = $("#completar2a");

                   
                    var AddButton2       = $("#agregarGrupoMuscular"); //ID del Botón Agregar

                    var a2a = $("#fase_entrenamiento div").length + 1;  //4
       

                    var FieldCount2 = a2a-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    document.getElementById('Form_FieldCount2').value = 1;
                    
                    var str_grup_grupomuscular='';
                    var str2_grup_grupomuscular='';
                    var str3_grup_grupomuscular='';
                    var str_grup_ejercicio='';
                    var str2_grup_ejercicio='';
                    var str3_grup_ejercicio='';
                    var str_grup_series='';
                    var str2_grup_series='';
                    var str_grup_repeticiones='';
                    var str2_grup_repeticiones='';
                    var str_grup_descanso='';
                    var str2_grup_descanso='';  
                   // document.write(FieldCount2);

                    //document.write(FieldCount);
                    
                    
                    
        

    
     

        
        $(AddButton2).click(function(e){
            

                            if(a2a <= MaxInputs2) //max input box allowed
                            {
                                FieldCount2++;
                                document.getElementById('Form_FieldCount2').value = FieldCount2;


if(FieldCount2===2){
str_grup_grupomuscular='{{Input::old("grupomuscular2a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular2a")}}';
str_grup_ejercicio='{{Input::old("ejercicio2a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio2a")}}';
str_grup_series='{{{Input::old("series2a")}}}';
str2_grup_series='{{$errors->first("series2a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones2a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones2a")}}';
str_grup_descanso='{{{Input::old("descanso2a")}}}';
str2_grup_descanso='{{$errors->first("descanso2a")}}';  
}
else if(FieldCount2===3){
document.getElementById('eliminar_a2').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular3a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular3a")}}';
str_grup_ejercicio='{{Input::old("ejercicio3a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio3a")}}';
str_grup_series='{{{Input::old("series3a")}}}';
str2_grup_series='{{$errors->first("series3a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones3a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones3a")}}';
str_grup_descanso='{{{Input::old("descanso3a")}}}';
str2_grup_descanso='{{$errors->first("descanso3a")}}';
}
else if(FieldCount2===4){
document.getElementById('eliminar_a3').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular4a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular4a")}}';
str_grup_ejercicio='{{Input::old("ejercicio4a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio4a")}}';
str_grup_series='{{{Input::old("series4a")}}}';
str2_grup_series='{{$errors->first("series4a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones4a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones4a")}}';
str_grup_descanso='{{{Input::old("descanso4a")}}}';
str2_grup_descanso='{{$errors->first("descanso4a")}}';
}
else if(FieldCount2===5){
document.getElementById('eliminar_a4').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular5a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular5a")}}';
str_grup_ejercicio='{{Input::old("ejercicio5a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio5a")}}';
str_grup_series='{{{Input::old("series5a")}}}';
str2_grup_series='{{$errors->first("series5a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones5a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones5a")}}';
str_grup_descanso='{{{Input::old("descanso5a")}}}';
str2_grup_descanso='{{$errors->first("descanso5a")}}';
}
else if(FieldCount2===6){
document.getElementById('eliminar_a5').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular6a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular6a")}}';
str_grup_ejercicio='{{Input::old("ejercicio6a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio6a")}}';
str_grup_series='{{{Input::old("series6a")}}}';
str2_grup_series='{{$errors->first("series6a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones6a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones6a")}}';
str_grup_descanso='{{{Input::old("descanso6a")}}}';
str2_grup_descanso='{{$errors->first("descanso6a")}}';
}
else if(FieldCount2===7){
document.getElementById('eliminar_a6').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular7a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular7a")}}';
str_grup_ejercicio='{{Input::old("ejercicio7a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio7a")}}';
str_grup_series='{{{Input::old("series7a")}}}';
str2_grup_series='{{$errors->first("series7a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones7a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones7a")}}';
str_grup_descanso='{{{Input::old("descanso7a")}}}';
str2_grup_descanso='{{$errors->first("descanso7a")}}';
}
else if(FieldCount2===8){
document.getElementById('eliminar_a7').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular8a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular8a")}}';
str_grup_ejercicio='{{Input::old("ejercicio8a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio8a")}}';
str_grup_series='{{{Input::old("series8a")}}}';
str2_grup_series='{{$errors->first("series8a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones8a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones8a")}}';
str_grup_descanso='{{{Input::old("descanso8a")}}}';
str2_grup_descanso='{{$errors->first("descanso8a")}}';
}
else if(FieldCount2===9){
document.getElementById('eliminar_a8').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular9a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular9a")}}';
str_grup_ejercicio='{{Input::old("ejercicio9a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio9a")}}';
str_grup_series='{{{Input::old("series9a")}}}';
str2_grup_series='{{$errors->first("series9a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones9a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones9a")}}';
str_grup_descanso='{{{Input::old("descanso9a")}}}';
str2_grup_descanso='{{$errors->first("descanso9a")}}';
}
else if(FieldCount2===10){
document.getElementById('eliminar_a9').style.display = 'none';
document.getElementById('addGrupoMuscular').style.display = 'none';
str_grup_grupomuscular='{{Input::old("grupomuscular10a")}}';
str2_grup_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10a") )->pluck("grm_nombre")}}';
str3_grup_grupomuscular='{{$errors->first("grupomuscular10a")}}';
str_grup_ejercicio='{{Input::old("ejercicio10a")}}';
str2_grup_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10a") )->pluck("eje_nombre")}}';
str3_grup_ejercicio='{{$errors->first("ejercicio10a")}}';
str_grup_series='{{{Input::old("series10a")}}}';
str2_grup_series='{{$errors->first("series10a")}}';
str_grup_repeticiones='{{{Input::old("repeticiones10a")}}}';
str2_grup_repeticiones='{{$errors->first("repeticiones10a")}}';
str_grup_descanso='{{{Input::old("descanso10a")}}}';
str2_grup_descanso='{{$errors->first("descanso10a")}}';
}



$(completar2a).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2" id="eliminar_a'+FieldCount2+'" style="display:block;"><center>&times;</center></a>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2+'a" id="grupomuscular'+FieldCount2+'a" class="form-control">'+
                                                '<option value="'+str_grup_grupomuscular+'">'+str2_grup_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                        '</div>'+
                                        '<div class="bg-danger">'+str3_grup_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2+'a">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2+'a" id="ejercicio'+FieldCount2+'a" class="form-control">'+
                                        '<option value="'+str_grup_ejercicio+'">'+str2_grup_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2+'a">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2+'a" value="'+str_grup_series+'" id="series'+FieldCount2+'a" placeholder="series'+FieldCount2+'a">'+
                                        '<div class="bg-danger">'+str2_grup_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2+'a">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2+'a" value="'+str_grup_repeticiones+'" id="repeticiones'+FieldCount2+'a" placeholder="repeticiones'+FieldCount2+'a">'+
                                        '<div class="bg-danger">'+str2_grup_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2+'a">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2+'a" value="'+str_grup_descanso+'" id="descanso'+FieldCount2+'a" placeholder="descanso'+FieldCount2+'a">'+
                                        '<div class="bg-danger">'+str2_grup_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                    '</div>');

a2a++; //text box increment

    $('#grupomuscular2a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                $('#grupomuscular6a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                $('#grupomuscular7a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                $('#grupomuscular8a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                $('#grupomuscular9a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                $('#grupomuscular10a').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10a').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10a').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2", function(e){ //click en eliminar campo
                            if( a2a > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2a--;
                                FieldCount2=FieldCount2-1;
                                document.getElementById('Form_FieldCount2').value = FieldCount2;
                                
                                if(FieldCount2===2){
                                document.getElementById('eliminar_a2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2===3){
                                document.getElementById('eliminar_a3').style.display = 'block';
                                }
                                else if(FieldCount2===4){
                                document.getElementById('eliminar_a4').style.display = 'block';
                                }
                                else if(FieldCount2===5){
                                document.getElementById('eliminar_a5').style.display = 'block';
                                }
                                else if(FieldCount2===6){
                                document.getElementById('eliminar_a6').style.display = 'block';
                                }
                                else if(FieldCount2===7){
                                document.getElementById('eliminar_a7').style.display = 'block';
                                }
                                else if(FieldCount2===8){
                                document.getElementById('eliminar_a8').style.display = 'block';
                                }
                                else if(FieldCount2===9){
                                document.getElementById('eliminar_a9').style.display = 'block';
                                document.getElementById('addGrupoMuscular').style.display = 'block';
                                }
                                                                                                                                
                            }
                            return false;
                        });
                    
                    
/****************************************************************************************************************************/
/*2B3B4B5B6B7B8B9B10B*/
                                                           
                    var MaxInputs2b           = 12; //Número Maximo de Campos
         
                    var completar2b      = $("#completar2b");
                   
                    var AddButton2b       = $("#agregarGrupoMuscular2"); //ID del Botón Agregar

                    var a2b = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2b = a2b-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    
                    
                    var str_grup2_grupomuscular='';
                    var str2_grup2_grupomuscular='';
                    var str3_grup2_grupomuscular='';
                    var str_grup2_ejercicio='';
                    var str2_grup2_ejercicio='';
                    var str3_grup2_ejercicio='';
                    var str_grup2_series='';
                    var str2_grup2_series='';
                    var str_grup2_repeticiones='';
                    var str2_grup2_repeticiones='';
                    var str_grup2_descanso='';
                    var str2_grup2_descanso='';
                
                    //document.write(FieldCount);
                     document.getElementById('Form_FieldCount2b').value = 1;




           $(AddButton2b).click(function(e){
                            if(a2b <= MaxInputs2b) //max input box allowed
                            {
                                FieldCount2b++;
                                 document.getElementById('Form_FieldCount2b').value = FieldCount2b;

if(FieldCount2b===2){
document.getElementById('delete2').style.display = 'none';    
document.getElementById('show2').style.display = 'block';
str_grup2_grupomuscular='{{Input::old("grupomuscular2b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular2b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio2b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio2b")}}';
str_grup2_series='{{{Input::old("series2b")}}}';
str2_grup2_series='{{$errors->first("series2b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones2b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones2b")}}';
str_grup2_descanso='{{{Input::old("descanso2b")}}}';
str2_grup2_descanso='{{$errors->first("descanso2b")}}';
}
else if(FieldCount2b===3){
document.getElementById('eliminar_b2').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular3b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular3b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio3b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio3b")}}';
str_grup2_series='{{{Input::old("series3b")}}}';
str2_grup2_series='{{$errors->first("series3b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones3b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones3b")}}';
str_grup2_descanso='{{{Input::old("descanso3b")}}}';
str2_grup2_descanso='{{$errors->first("descanso3b")}}';
}
else if(FieldCount2b===4){
document.getElementById('eliminar_b3').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular4b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular4b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio4b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio4b")}}';
str_grup2_series='{{{Input::old("series4b")}}}';
str2_grup2_series='{{$errors->first("series4b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones4b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones4b")}}';
str_grup2_descanso='{{{Input::old("descanso4b")}}}';
str2_grup2_descanso='{{$errors->first("descanso4b")}}';
}
else if(FieldCount2b===5){
document.getElementById('eliminar_b4').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular5b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular5b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio5b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio5b")}}';
str_grup2_series='{{{Input::old("series5b")}}}';
str2_grup2_series='{{$errors->first("series5b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones5b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones5b")}}';
str_grup2_descanso='{{{Input::old("descanso5b")}}}';
str2_grup2_descanso='{{$errors->first("descanso5b")}}';
}
else if(FieldCount2b===6){
document.getElementById('eliminar_b5').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular6b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular6b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio6b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio6b")}}';
str_grup2_series='{{{Input::old("series6b")}}}';
str2_grup2_series='{{$errors->first("series6b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones6b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones6b")}}';
str_grup2_descanso='{{{Input::old("descanso6b")}}}';
str2_grup2_descanso='{{$errors->first("descanso6b")}}';
}
else if(FieldCount2b===7){
document.getElementById('eliminar_b6').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular7b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular7b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio7b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio7b")}}';
str_grup2_series='{{{Input::old("series7b")}}}';
str2_grup2_series='{{$errors->first("series7b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones7b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones7b")}}';
str_grup2_descanso='{{{Input::old("descanso7b")}}}';
str2_grup2_descanso='{{$errors->first("descanso7b")}}';
}
else if(FieldCount2b===8){
document.getElementById('eliminar_b7').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular8b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular8b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio8b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio8b")}}';
str_grup2_series='{{{Input::old("series8b")}}}';
str2_grup2_series='{{$errors->first("series8b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones8b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones8b")}}';
str_grup2_descanso='{{{Input::old("descanso8b")}}}';
str2_grup2_descanso='{{$errors->first("descanso8b")}}';
}
else if(FieldCount2b===9){
document.getElementById('eliminar_b8').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular9b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular9b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio9b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio9b")}}';
str_grup2_series='{{{Input::old("series9b")}}}';
str2_grup2_series='{{$errors->first("series9b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones9b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones9b")}}';
str_grup2_descanso='{{{Input::old("descanso9b")}}}';
str2_grup2_descanso='{{$errors->first("descanso9b")}}';
}
else if(FieldCount2b===10){
document.getElementById('eliminar_b9').style.display = 'none';
document.getElementById('div2').style.display = 'none';
str_grup2_grupomuscular='{{Input::old("grupomuscular10b")}}';
str2_grup2_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10b") )->pluck("grm_nombre")}}';
str3_grup2_grupomuscular='{{$errors->first("grupomuscular10b")}}';
str_grup2_ejercicio='{{Input::old("ejercicio10b")}}';
str2_grup2_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10b") )->pluck("eje_nombre")}}';
str3_grup2_ejercicio='{{$errors->first("ejercicio10b")}}';
str_grup2_series='{{{Input::old("series10b")}}}';
str2_grup2_series='{{$errors->first("series10b")}}';
str_grup2_repeticiones='{{{Input::old("repeticiones10b")}}}';
str2_grup2_repeticiones='{{$errors->first("repeticiones10b")}}';
str_grup2_descanso='{{{Input::old("descanso10b")}}}';
str2_grup2_descanso='{{$errors->first("descanso10b")}}';
}

$(completar2b).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2b" id="eliminar_b'+FieldCount2b+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2b+'b">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2b+'b" id="grupomuscular'+FieldCount2b+'b" class="form-control">'+
                                                '<option value="'+str_grup2_grupomuscular+'">'+str2_grup2_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup2_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2b+'b">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2b+'b" id="ejercicio'+FieldCount2b+'b" class="form-control">'+
                                        '<option value="'+str_grup2_ejercicio+'">'+str2_grup2_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup2_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2b+'b">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2b+'b" value="'+str_grup2_series+'" id="series'+FieldCount2b+'b" placeholder="series'+FieldCount2b+'b">'+
                                        '<div class="bg-danger">'+str2_grup2_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2b+'b">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2b+'b" value="'+str_grup2_repeticiones+'" id="repeticiones'+FieldCount2b+'b" placeholder="repeticiones'+FieldCount2b+'b">'+
                                        '<div class="bg-danger">'+str2_grup2_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2b+'b">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2b+'b" value="'+str_grup2_descanso+'" id="descanso'+FieldCount2b+'b" placeholder="descanso'+FieldCount2b+'b">'+
                                        '<div class="bg-danger">'+str2_grup2_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2b++; //text box increment

                $('#grupomuscular2b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular5b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10b').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10b').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10b').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2b", function(e){ //click en eliminar campo
                            if( a2b > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2b--;
                                FieldCount2b=FieldCount2b-1;
                                 document.getElementById('Form_FieldCount2b').value = FieldCount2b;
                                
                                if(FieldCount2b===1&&FieldCount_dsb===1&&FieldCount===2){
                                document.getElementById('show2').style.display = 'none';    
                                document.getElementById('delete2').style.display = 'block';
                                }
                                else if(FieldCount2b===2){
                                document.getElementById('eliminar_b2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2b===3){
                                document.getElementById('eliminar_b3').style.display = 'block';
                                }
                                else if(FieldCount2b===4){
                                document.getElementById('eliminar_b4').style.display = 'block';
                                }
                                else if(FieldCount2b===5){
                                document.getElementById('eliminar_b5').style.display = 'block';
                                }
                                else if(FieldCount2b===6){
                                document.getElementById('eliminar_b6').style.display = 'block';
                                }
                                else if(FieldCount2b===7){
                                document.getElementById('eliminar_b7').style.display = 'block';
                                }
                                else if(FieldCount2b===8){
                                document.getElementById('eliminar_b8').style.display = 'block';
                                }
                                else if(FieldCount2b===9){
                                document.getElementById('eliminar_b9').style.display = 'block';
                                document.getElementById('div2').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        

/****************************************************************************************************************************/
/*2C3C4C5C6C7C8C9C10C*/                        
                      
                      
                    var MaxInputs2c           = 12; //Número Maximo de Campos
         
                    var completar2c      = $("#completar2c");
                   
                    var AddButton2c       = $("#agregarGrupoMuscular3"); //ID del Botón Agregar

                    var a2c = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2c = a2c-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_grup3_grupomuscular='';
                    var str2_grup3_grupomuscular='';
                    var str3_grup3_grupomuscular='';
                    var str_grup3_ejercicio='';
                    var str2_grup3_ejercicio='';
                    var str3_grup3_ejercicio='';
                    var str_grup3_series='';
                    var str2_grup3_series='';
                    var str_grup3_repeticiones='';
                    var str2_grup3_repeticiones='';
                    var str_grup3_descanso='';
                    var str2_grup3_descanso='';
                    
                    document.getElementById('Form_FieldCount2c').value = 1;
                    //document.write(FieldCount);

                        $(AddButton2c).click(function (e) {
                            if(a2c <= MaxInputs2c) //max input box allowed
                            {
                                FieldCount2c++;
                                document.getElementById('Form_FieldCount2c').value = FieldCount2c;

if(FieldCount2c===2){
document.getElementById('delete3').style.display = 'none';    
document.getElementById('show3').style.display = 'block';
str_grup3_grupomuscular='{{Input::old("grupomuscular2c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular2c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio2c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio2c")}}';
str_grup3_series='{{{Input::old("series2c")}}}';
str2_grup3_series='{{$errors->first("series2c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones2c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones2c")}}';
str_grup3_descanso='{{{Input::old("descanso2c")}}}';
str2_grup3_descanso='{{$errors->first("descanso2c")}}';
}
else if(FieldCount2c===3){
document.getElementById('eliminar_c2').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular3c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular3c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio3c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio3c")}}';
str_grup3_series='{{{Input::old("series3c")}}}';
str2_grup3_series='{{$errors->first("series3c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones3c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones3c")}}';
str_grup3_descanso='{{{Input::old("descanso3c")}}}';
str2_grup3_descanso='{{$errors->first("descanso3c")}}';
}
else if(FieldCount2c===4){
document.getElementById('eliminar_c3').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular4c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular4c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio4c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio4c")}}';
str_grup3_series='{{{Input::old("series4c")}}}';
str2_grup3_series='{{$errors->first("series4c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones4c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones4c")}}';
str_grup3_descanso='{{{Input::old("descanso4c")}}}';
str2_grup3_descanso='{{$errors->first("descanso4c")}}';
}
else if(FieldCount2c===5){
document.getElementById('eliminar_c4').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular5c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular5c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio5c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio5c")}}';
str_grup3_series='{{{Input::old("series5c")}}}';
str2_grup3_series='{{$errors->first("series5c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones5c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones5c")}}';
str_grup3_descanso='{{{Input::old("descanso5c")}}}';
str2_grup3_descanso='{{$errors->first("descanso5c")}}';
}
else if(FieldCount2c===6){
document.getElementById('eliminar_c5').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular6c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular6c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio6c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio6c")}}';
str_grup3_series='{{{Input::old("series6c")}}}';
str2_grup3_series='{{$errors->first("series6c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones6c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones6c")}}';
str_grup3_descanso='{{{Input::old("descanso6c")}}}';
str2_grup3_descanso='{{$errors->first("descanso6c")}}';
}
else if(FieldCount2c===7){
document.getElementById('eliminar_c6').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular7c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular7c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio7c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio7c")}}';
str_grup3_series='{{{Input::old("series7c")}}}';
str2_grup3_series='{{$errors->first("series7c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones7c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones7c")}}';
str_grup3_descanso='{{{Input::old("descanso7c")}}}';
str2_grup3_descanso='{{$errors->first("descanso7c")}}';
}
else if(FieldCount2c===8){
document.getElementById('eliminar_c7').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular8c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular8c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio8c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio8c")}}';
str_grup3_series='{{{Input::old("series8c")}}}';
str2_grup3_series='{{$errors->first("series8c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones8c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones8c")}}';
str_grup3_descanso='{{{Input::old("descanso8c")}}}';
str2_grup3_descanso='{{$errors->first("descanso8c")}}';
}
else if(FieldCount2c===9){
document.getElementById('eliminar_c8').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular9c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular9c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio9c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio9c")}}';
str_grup3_series='{{{Input::old("series9c")}}}';
str2_grup3_series='{{$errors->first("series9c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones9c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones9c")}}';
str_grup3_descanso='{{{Input::old("descanso9c")}}}';
str2_grup3_descanso='{{$errors->first("descanso9c")}}';
}
else if(FieldCount2c===10){
document.getElementById('eliminar_c9').style.display = 'none';
document.getElementById('div3').style.display = 'none';
str_grup3_grupomuscular='{{Input::old("grupomuscular10c")}}';
str2_grup3_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10c") )->pluck("grm_nombre")}}';
str3_grup3_grupomuscular='{{$errors->first("grupomuscular10c")}}';
str_grup3_ejercicio='{{Input::old("ejercicio10c")}}';
str2_grup3_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10c") )->pluck("eje_nombre")}}';
str3_grup3_ejercicio='{{$errors->first("ejercicio10c")}}';
str_grup3_series='{{{Input::old("series10c")}}}';
str2_grup3_series='{{$errors->first("series10c")}}';
str_grup3_repeticiones='{{{Input::old("repeticiones10c")}}}';
str2_grup3_repeticiones='{{$errors->first("repeticiones10c")}}';
str_grup3_descanso='{{{Input::old("descanso10c")}}}';
str2_grup3_descanso='{{$errors->first("descanso10c")}}';
}

$(completar2c).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2c" id="eliminar_c'+FieldCount2c+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2c+'c">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2c+'c" id="grupomuscular'+FieldCount2c+'c" class="form-control">'+
                                                '<option value="'+str_grup3_grupomuscular+'">'+str2_grup3_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup3_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2c+'c">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2c+'c" id="ejercicio'+FieldCount2c+'c" class="form-control">'+
                                        '<option value="'+str_grup3_ejercicio+'">'+str2_grup3_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup3_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2c+'c">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2c+'c" value="'+str_grup3_series+'" id="series'+FieldCount2c+'c" placeholder="series'+FieldCount2c+'c">'+
                                        '<div class="bg-danger">'+str2_grup3_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2c+'c">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2c+'c" value="'+str_grup3_repeticiones+'" id="repeticiones'+FieldCount2c+'c" placeholder="repeticiones'+FieldCount2c+'c">'+
                                        '<div class="bg-danger">'+str2_grup3_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2c+'c">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2c+'c" value="'+str_grup3_descanso+'" id="descanso'+FieldCount2c+'c" placeholder="descanso'+FieldCount2c+'c">'+
                                        '<div class="bg-danger">'+str2_grup3_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2c++; //text box increment

                $('#grupomuscular2c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10c').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10c').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10c').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2c", function(e){ //click en eliminar campo
                            if( a2c > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2c--;
                                FieldCount2c=FieldCount2c-1;
                                document.getElementById('Form_FieldCount2c').value = FieldCount2c;
                                
                                if(FieldCount2c===1&&FieldCount_dsc===1&&FieldCount===3){
                                document.getElementById('show3').style.display = 'none';    
                                document.getElementById('delete3').style.display = 'block';
                                }
                                else if(FieldCount2c===2){
                                document.getElementById('eliminar_c2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2c===3){
                                document.getElementById('eliminar_c3').style.display = 'block';
                                }
                                else if(FieldCount2c===4){
                                document.getElementById('eliminar_c4').style.display = 'block';
                                }
                                else if(FieldCount2c===5){
                                document.getElementById('eliminar_c5').style.display = 'block';
                                }
                                else if(FieldCount2c===6){
                                document.getElementById('eliminar_c6').style.display = 'block';
                                }
                                else if(FieldCount2c===7){
                                document.getElementById('eliminar_c7').style.display = 'block';
                                }
                                else if(FieldCount2c===8){
                                document.getElementById('eliminar_c8').style.display = 'block';
                                }
                                else if(FieldCount2c===9){
                                document.getElementById('eliminar_c9').style.display = 'block';
                                document.getElementById('div3').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        
                                                              
/****************************************************************************************************************************/
/*2D3D4D5D6D7D8D9D10D*/                        
                      
                      
                    var MaxInputs2d           = 12; //Número Maximo de Campos
         
                    var completar2d      = $("#completar2d");
                   
                    var AddButton2d       = $("#agregarGrupoMuscular4"); //ID del Botón Agregar

                    var a2d = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2d = a2d-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_grup4_grupomuscular='';
                    var str2_grup4_grupomuscular='';
                    var str3_grup4_grupomuscular='';
                    var str_grup4_ejercicio='';
                    var str2_grup4_ejercicio='';
                    var str3_grup4_ejercicio='';
                    var str_grup4_series='';
                    var str2_grup4_series='';
                    var str_grup4_repeticiones='';
                    var str2_grup4_repeticiones='';
                    var str_grup4_descanso='';
                    var str2_grup4_descanso='';
                    
                    document.getElementById('Form_FieldCount2d').value = 1;
                    //document.write(FieldCount);

                        $(AddButton2d).click(function (e) {
                            if(a2d <= MaxInputs2d) //max input box allowed
                            {
                                FieldCount2d++;
                                document.getElementById('Form_FieldCount2d').value = FieldCount2d;
                                
if(FieldCount2d===2){
document.getElementById('delete4').style.display = 'none';    
document.getElementById('show4').style.display = 'block';
str_grup4_grupomuscular='{{Input::old("grupomuscular2d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular2d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio2d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio2d")}}';
str_grup4_series='{{{Input::old("series2d")}}}';
str2_grup4_series='{{$errors->first("series2d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones2d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones2d")}}';
str_grup4_descanso='{{{Input::old("descanso2d")}}}';
str2_grup4_descanso='{{$errors->first("descanso2d")}}';
}
else if(FieldCount2d===3){
document.getElementById('eliminar_d2').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular3d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular3d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio3d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio3d")}}';
str_grup4_series='{{{Input::old("series3d")}}}';
str2_grup4_series='{{$errors->first("series3d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones3d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones3d")}}';
str_grup4_descanso='{{{Input::old("descanso3d")}}}';
str2_grup4_descanso='{{$errors->first("descanso3d")}}';
}
else if(FieldCount2d===4){
document.getElementById('eliminar_d3').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular4d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular4d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio4d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio4d")}}';
str_grup4_series='{{{Input::old("series4d")}}}';
str2_grup4_series='{{$errors->first("series4d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones4d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones4d")}}';
str_grup4_descanso='{{{Input::old("descanso4d")}}}';
str2_grup4_descanso='{{$errors->first("descanso4d")}}';
}
else if(FieldCount2d===5){
document.getElementById('eliminar_d4').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular5d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular5d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio5d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio5d")}}';
str_grup4_series='{{{Input::old("series5d")}}}';
str2_grup4_series='{{$errors->first("series5d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones5d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones5d")}}';
str_grup4_descanso='{{{Input::old("descanso5d")}}}';
str2_grup4_descanso='{{$errors->first("descanso5d")}}';
}
else if(FieldCount2d===6){
document.getElementById('eliminar_d5').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular6d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular6d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio6d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio6d")}}';
str_grup4_series='{{{Input::old("series6d")}}}';
str2_grup4_series='{{$errors->first("series6d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones6d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones6d")}}';
str_grup4_descanso='{{{Input::old("descanso6d")}}}';
str2_grup4_descanso='{{$errors->first("descanso6d")}}';
}
else if(FieldCount2d===7){
document.getElementById('eliminar_d6').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular7d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular7d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio7d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio7d")}}';
str_grup4_series='{{{Input::old("series7d")}}}';
str2_grup4_series='{{$errors->first("series7d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones7d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones7d")}}';
str_grup4_descanso='{{{Input::old("descanso7d")}}}';
str2_grup4_descanso='{{$errors->first("descanso7d")}}';
}
else if(FieldCount2d===8){
document.getElementById('eliminar_d7').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular8d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular8d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio8d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio8d")}}';
str_grup4_series='{{{Input::old("series8d")}}}';
str2_grup4_series='{{$errors->first("series8d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones8d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones8d")}}';
str_grup4_descanso='{{{Input::old("descanso8d")}}}';
str2_grup4_descanso='{{$errors->first("descanso8d")}}';
}
else if(FieldCount2d===9){
document.getElementById('eliminar_d8').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular9d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular9d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio9d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio9d")}}';
str_grup4_series='{{{Input::old("series9d")}}}';
str2_grup4_series='{{$errors->first("series9d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones9d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones9d")}}';
str_grup4_descanso='{{{Input::old("descanso9d")}}}';
str2_grup4_descanso='{{$errors->first("descanso9d")}}';
}
else if(FieldCount2d===10){
document.getElementById('eliminar_d9').style.display = 'none';
document.getElementById('div4').style.display = 'none';
str_grup4_grupomuscular='{{Input::old("grupomuscular10d")}}';
str2_grup4_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10d") )->pluck("grm_nombre")}}';
str3_grup4_grupomuscular='{{$errors->first("grupomuscular10d")}}';
str_grup4_ejercicio='{{Input::old("ejercicio10d")}}';
str2_grup4_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10d") )->pluck("eje_nombre")}}';
str3_grup4_ejercicio='{{$errors->first("ejercicio10d")}}';
str_grup4_series='{{{Input::old("series10d")}}}';
str2_grup4_series='{{$errors->first("series10d")}}';
str_grup4_repeticiones='{{{Input::old("repeticiones10d")}}}';
str2_grup4_repeticiones='{{$errors->first("repeticiones10d")}}';
str_grup4_descanso='{{{Input::old("descanso10d")}}}';
str2_grup4_descanso='{{$errors->first("descanso10d")}}';
}

$(completar2d).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2d" id="eliminar_d'+FieldCount2d+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2d+'d">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2d+'d" id="grupomuscular'+FieldCount2d+'d" class="form-control">'+
                                                '<option value="'+str_grup4_grupomuscular+'">'+str2_grup4_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup4_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2d+'d">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2d+'d" id="ejercicio'+FieldCount2d+'d" class="form-control">'+
                                        '<option value="'+str_grup4_ejercicio+'">'+str2_grup4_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup4_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2d+'d">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2d+'d" value="'+str_grup4_series+'" id="series'+FieldCount2d+'d" placeholder="series'+FieldCount2d+'d">'+
                                        '<div class="bg-danger">'+str2_grup4_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2d+'d">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2d+'d" value="'+str_grup4_repeticiones+'" id="repeticiones'+FieldCount2d+'d" placeholder="repeticiones'+FieldCount2d+'d">'+
                                        '<div class="bg-danger">'+str2_grup4_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2d+'d">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2d+'d" value="'+str_grup4_descanso+'" id="descanso'+FieldCount2d+'d" placeholder="descanso'+FieldCount2d+'d">'+
                                        '<div class="bg-danger">'+str2_grup4_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2d++; //text box increment

                $('#grupomuscular2d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10d').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10d').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10d').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2d", function(e){ //click en eliminar campo
                            if( a2d > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2d--;
                                FieldCount2d=FieldCount2d-1;
                                document.getElementById('Form_FieldCount2d').value = FieldCount2d;
                                
                                if(FieldCount2d===1&&FieldCount_dsd===1&&FieldCount===4){
                                document.getElementById('show4').style.display = 'none';    
                                document.getElementById('delete4').style.display = 'block';
                                }
                                else if(FieldCount2d===2){
                                document.getElementById('eliminar_d2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2d===3){
                                document.getElementById('eliminar_d3').style.display = 'block';
                                }
                                else if(FieldCount2d===4){
                                document.getElementById('eliminar_d4').style.display = 'block';
                                }
                                else if(FieldCount2d===5){
                                document.getElementById('eliminar_d5').style.display = 'block';
                                }
                                else if(FieldCount2d===6){
                                document.getElementById('eliminar_d6').style.display = 'block';
                                }
                                else if(FieldCount2d===7){
                                document.getElementById('eliminar_d7').style.display = 'block';
                                }
                                else if(FieldCount2d===8){
                                document.getElementById('eliminar_d8').style.display = 'block';
                                }
                                else if(FieldCount2d===9){
                                document.getElementById('eliminar_d9').style.display = 'block';
                                document.getElementById('div4').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        
                                                            
/****************************************************************************************************************************/
/*2E3E4E5E6E7E8E9E10E*/                        
                      
                      
                    var MaxInputs2e           = 12; //Número Maximo de Campos
         
                    var completar2e      = $("#completar2e");
                   
                    var AddButton2e       = $("#agregarGrupoMuscular5"); //ID del Botón Agregar

                    var a2e = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2e = a2e-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_grup5_grupomuscular='';
                    var str2_grup5_grupomuscular='';
                    var str3_grup5_grupomuscular='';
                    var str_grup5_ejercicio='';
                    var str2_grup5_ejercicio='';
                    var str3_grup5_ejercicio='';
                    var str_grup5_series='';
                    var str2_grup5_series='';
                    var str_grup5_repeticiones='';
                    var str2_grup5_repeticiones='';
                    var str_grup5_descanso='';
                    var str2_grup5_descanso='';
                    
                    document.getElementById('Form_FieldCount2e').value = 1;
                    //document.write(FieldCount);

                        $(AddButton2e).click(function (e) {
                            if(a2e <= MaxInputs2e) //max input box allowed
                            {
                                FieldCount2e++;
                                document.getElementById('Form_FieldCount2e').value = FieldCount2e;
if(FieldCount2e===2){
document.getElementById('delete5').style.display = 'none';    
document.getElementById('show5').style.display = 'block';
str_grup5_grupomuscular='{{Input::old("grupomuscular2e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular2e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio2e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio2e")}}';
str_grup5_series='{{{Input::old("series2e")}}}';
str2_grup5_series='{{$errors->first("series2e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones2e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones2e")}}';
str_grup5_descanso='{{{Input::old("descanso2e")}}}';
str2_grup5_descanso='{{$errors->first("descanso2e")}}';
}
else if(FieldCount2e===3){
document.getElementById('eliminar_e2').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular3e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular3e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio3e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio3e")}}';
str_grup5_series='{{{Input::old("series3e")}}}';
str2_grup5_series='{{$errors->first("series3e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones3e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones3e")}}';
str_grup5_descanso='{{{Input::old("descanso3e")}}}';
str2_grup5_descanso='{{$errors->first("descanso3e")}}';
}
else if(FieldCount2e===4){
document.getElementById('eliminar_e3').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular4e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular4e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio4e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio4e")}}';
str_grup5_series='{{{Input::old("series4e")}}}';
str2_grup5_series='{{$errors->first("series4e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones4e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones4e")}}';
str_grup5_descanso='{{{Input::old("descanso4e")}}}';
str2_grup5_descanso='{{$errors->first("descanso4e")}}';
}
else if(FieldCount2e===5){
document.getElementById('eliminar_e4').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular5e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular5e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio5e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio5e")}}';
str_grup5_series='{{{Input::old("series5e")}}}';
str2_grup5_series='{{$errors->first("series5e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones5e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones5e")}}';
str_grup5_descanso='{{{Input::old("descanso5e")}}}';
str2_grup5_descanso='{{$errors->first("descanso5e")}}';
}
else if(FieldCount2e===6){
document.getElementById('eliminar_e5').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular6e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular6e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio6e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio6e")}}';
str_grup5_series='{{{Input::old("series6e")}}}';
str2_grup5_series='{{$errors->first("series6e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones6e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones6e")}}';
str_grup5_descanso='{{{Input::old("descanso6e")}}}';
str2_grup5_descanso='{{$errors->first("descanso6e")}}';
}
else if(FieldCount2e===7){
document.getElementById('eliminar_e6').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular7e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular7e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio7e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio7e")}}';
str_grup5_series='{{{Input::old("series7e")}}}';
str2_grup5_series='{{$errors->first("series7e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones7e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones7e")}}';
str_grup5_descanso='{{{Input::old("descanso7e")}}}';
str2_grup5_descanso='{{$errors->first("descanso7e")}}';
}
else if(FieldCount2e===8){
document.getElementById('eliminar_e7').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular8e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular8e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio8e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio8e")}}';
str_grup5_series='{{{Input::old("series8e")}}}';
str2_grup5_series='{{$errors->first("series8e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones8e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones8e")}}';
str_grup5_descanso='{{{Input::old("descanso8e")}}}';
str2_grup5_descanso='{{$errors->first("descanso8e")}}';
}
else if(FieldCount2e===9){
document.getElementById('eliminar_e8').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular9e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular9e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio9e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio9e")}}';
str_grup5_series='{{{Input::old("series9e")}}}';
str2_grup5_series='{{$errors->first("series9e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones9e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones9e")}}';
str_grup5_descanso='{{{Input::old("descanso9e")}}}';
str2_grup5_descanso='{{$errors->first("descanso9e")}}';
}
else if(FieldCount2e===10){
document.getElementById('eliminar_e9').style.display = 'none';
document.getElementById('div5').style.display = 'none';
str_grup5_grupomuscular='{{Input::old("grupomuscular10e")}}';
str2_grup5_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10e") )->pluck("grm_nombre")}}';
str3_grup5_grupomuscular='{{$errors->first("grupomuscular10e")}}';
str_grup5_ejercicio='{{Input::old("ejercicio10e")}}';
str2_grup5_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10e") )->pluck("eje_nombre")}}';
str3_grup5_ejercicio='{{$errors->first("ejercicio10e")}}';
str_grup5_series='{{{Input::old("series10e")}}}';
str2_grup5_series='{{$errors->first("series10e")}}';
str_grup5_repeticiones='{{{Input::old("repeticiones10e")}}}';
str2_grup5_repeticiones='{{$errors->first("repeticiones10e")}}';
str_grup5_descanso='{{{Input::old("descanso10e")}}}';
str2_grup5_descanso='{{$errors->first("descanso10e")}}';
}

$(completar2e).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2e" id="eliminar_e'+FieldCount2e+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2e+'e">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2e+'e" id="grupomuscular'+FieldCount2e+'e" class="form-control">'+
                                                '<option value="'+str_grup5_grupomuscular+'">'+str2_grup5_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup5_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2e+'e">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2e+'e" id="ejercicio'+FieldCount2e+'e" class="form-control">'+
                                        '<option value="'+str_grup5_ejercicio+'">'+str2_grup5_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup5_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2e+'e">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2e+'e" value="'+str_grup5_series+'" id="series'+FieldCount2e+'e" placeholder="series'+FieldCount2e+'e">'+
                                        '<div class="bg-danger">'+str2_grup5_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2e+'e">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2e+'e" value="'+str_grup5_repeticiones+'" id="repeticiones'+FieldCount2e+'e" placeholder="repeticiones'+FieldCount2e+'e">'+
                                        '<div class="bg-danger">'+str2_grup5_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2e+'e">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2e+'e" value="'+str_grup5_descanso+'" id="descanso'+FieldCount2e+'e" placeholder="descanso'+FieldCount2e+'e">'+
                                        '<div class="bg-danger">'+str2_grup5_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2e++; //text box increment

                $('#grupomuscular2e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10e').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10e').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10e').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2e", function(e){ //click en eliminar campo
                            if( a2e > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2e--;
                                FieldCount2e=FieldCount2e-1;
                                document.getElementById('Form_FieldCount2e').value = FieldCount2e;
                                
                                if(FieldCount2e===1&&FieldCount_dse===1&&FieldCount===5){
                                document.getElementById('show5').style.display = 'none';    
                                document.getElementById('delete5').style.display = 'block';
                                }
                                else if(FieldCount2e===2){
                                document.getElementById('eliminar_e2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2e===3){
                                document.getElementById('eliminar_e3').style.display = 'block';
                                }
                                else if(FieldCount2e===4){
                                document.getElementById('eliminar_e4').style.display = 'block';
                                }
                                else if(FieldCount2e===5){
                                document.getElementById('eliminar_e5').style.display = 'block';
                                }
                                else if(FieldCount2e===6){
                                document.getElementById('eliminar_e6').style.display = 'block';
                                }
                                else if(FieldCount2e===7){
                                document.getElementById('eliminar_e7').style.display = 'block';
                                }
                                else if(FieldCount2e===8){
                                document.getElementById('eliminar_e8').style.display = 'block';
                                }
                                else if(FieldCount2e===9){
                                document.getElementById('eliminar_e9').style.display = 'block';
                                document.getElementById('div5').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        
                                           
/****************************************************************************************************************************/
/*2F3F4F5F6F7F8F9F10F*/                        
                      
                      
                    var MaxInputs2f           = 12; //Número Maximo de Campos
         
                    var completar2f      = $("#completar2f");
                   
                    var AddButton2f       = $("#agregarGrupoMuscular6"); //ID del Botón Agregar

                    var a2f = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2f = a2f-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_grup6_grupomuscular='';
                    var str2_grup6_grupomuscular='';
                    var str3_grup6_grupomuscular='';
                    var str_grup6_ejercicio='';
                    var str2_grup6_ejercicio='';
                    var str3_grup6_ejercicio='';
                    var str_grup6_series='';
                    var str2_grup6_series='';
                    var str_grup6_repeticiones='';
                    var str2_grup6_repeticiones='';
                    var str_grup6_descanso='';
                    var str2_grup6_descanso='';
                    
                    document.getElementById('Form_FieldCount2f').value = 1;
                    //document.write(FieldCount);

                        $(AddButton2f).click(function (e) {
                            if(a2f <= MaxInputs2f) //max input box allowed
                            {
                                FieldCount2f++;
                                document.getElementById('Form_FieldCount2f').value = FieldCount2f;
if(FieldCount2f===2){
document.getElementById('delete6').style.display = 'none';    
document.getElementById('show6').style.display = 'block';
str_grup6_grupomuscular='{{Input::old("grupomuscular2f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular2f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio2f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio2f")}}';
str_grup6_series='{{{Input::old("series2f")}}}';
str2_grup6_series='{{$errors->first("series2f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones2f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones2f")}}';
str_grup6_descanso='{{{Input::old("descanso2f")}}}';
str2_grup6_descanso='{{$errors->first("descanso2f")}}';
}                                
else if(FieldCount2f===3){
document.getElementById('eliminar_f2').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular3f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular3f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio3f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio3f")}}';
str_grup6_series='{{{Input::old("series3f")}}}';
str2_grup6_series='{{$errors->first("series3f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones3f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones3f")}}';
str_grup6_descanso='{{{Input::old("descanso3f")}}}';
str2_grup6_descanso='{{$errors->first("descanso3f")}}';
}
else if(FieldCount2f===4){
document.getElementById('eliminar_f3').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular4f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular4f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio4f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio4f")}}';
str_grup6_series='{{{Input::old("series4f")}}}';
str2_grup6_series='{{$errors->first("series4f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones4f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones4f")}}';
str_grup6_descanso='{{{Input::old("descanso4f")}}}';
str2_grup6_descanso='{{$errors->first("descanso4f")}}';
}
else if(FieldCount2f===5){
document.getElementById('eliminar_f4').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular5f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular5f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio5f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio5f")}}';
str_grup6_series='{{{Input::old("series5f")}}}';
str2_grup6_series='{{$errors->first("series5f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones5f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones5f")}}';
str_grup6_descanso='{{{Input::old("descanso5f")}}}';
str2_grup6_descanso='{{$errors->first("descanso5f")}}';
}
else if(FieldCount2f===6){
document.getElementById('eliminar_f5').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular6f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular6f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio6f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio6f")}}';
str_grup6_series='{{{Input::old("series6f")}}}';
str2_grup6_series='{{$errors->first("series6f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones6f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones6f")}}';
str_grup6_descanso='{{{Input::old("descanso6f")}}}';
str2_grup6_descanso='{{$errors->first("descanso6f")}}';
}
else if(FieldCount2f===7){
document.getElementById('eliminar_f6').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular7f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular7f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio7f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio7f")}}';
str_grup6_series='{{{Input::old("series7f")}}}';
str2_grup6_series='{{$errors->first("series7f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones7f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones7f")}}';
str_grup6_descanso='{{{Input::old("descanso7f")}}}';
str2_grup6_descanso='{{$errors->first("descanso7f")}}';
}
else if(FieldCount2f===8){
document.getElementById('eliminar_f7').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular8f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular8f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio8f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio8f")}}';
str_grup6_series='{{{Input::old("series8f")}}}';
str2_grup6_series='{{$errors->first("series8f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones8f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones8f")}}';
str_grup6_descanso='{{{Input::old("descanso8f")}}}';
str2_grup6_descanso='{{$errors->first("descanso8f")}}';
}
else if(FieldCount2f===9){
document.getElementById('eliminar_f8').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular9f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular9f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio9f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio9f")}}';
str_grup6_series='{{{Input::old("series9f")}}}';
str2_grup6_series='{{$errors->first("series9f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones9f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones9f")}}';
str_grup6_descanso='{{{Input::old("descanso9f")}}}';
str2_grup6_descanso='{{$errors->first("descanso9f")}}';
}
else if(FieldCount2f===10){
document.getElementById('eliminar_f9').style.display = 'none';
document.getElementById('div6').style.display = 'none';
str_grup6_grupomuscular='{{Input::old("grupomuscular10f")}}';
str2_grup6_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10f") )->pluck("grm_nombre")}}';
str3_grup6_grupomuscular='{{$errors->first("grupomuscular10f")}}';
str_grup6_ejercicio='{{Input::old("ejercicio10f")}}';
str2_grup6_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10f") )->pluck("eje_nombre")}}';
str3_grup6_ejercicio='{{$errors->first("ejercicio10f")}}';
str_grup6_series='{{{Input::old("series10f")}}}';
str2_grup6_series='{{$errors->first("series10f")}}';
str_grup6_repeticiones='{{{Input::old("repeticiones10f")}}}';
str2_grup6_repeticiones='{{$errors->first("repeticiones10f")}}';
str_grup6_descanso='{{{Input::old("descanso10f")}}}';
str2_grup6_descanso='{{$errors->first("descanso10f")}}';
}

$(completar2f).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2f" id="eliminar_f'+FieldCount2f+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2f+'f">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2f+'f" id="grupomuscular'+FieldCount2f+'f" class="form-control">'+
                                                '<option value="'+str_grup6_grupomuscular+'">'+str2_grup6_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup6_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2f+'f">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2f+'f" id="ejercicio'+FieldCount2f+'f" class="form-control">'+
                                        '<option value="'+str_grup6_ejercicio+'">'+str2_grup6_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup6_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2f+'f">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2f+'f" value="'+str_grup6_series+'" id="series'+FieldCount2f+'f" placeholder="series'+FieldCount2f+'f">'+
                                        '<div class="bg-danger">'+str2_grup6_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2f+'f">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2f+'f" value="'+str_grup6_repeticiones+'" id="repeticiones'+FieldCount2f+'f" placeholder="repeticiones'+FieldCount2f+'f">'+
                                        '<div class="bg-danger">'+str2_grup6_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2f+'f">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2f+'f" value="'+str_grup6_descanso+'" id="descanso'+FieldCount2f+'f" placeholder="descanso'+FieldCount2f+'f">'+
                                        '<div class="bg-danger">'+str2_grup6_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2f++; //text box increment

                $('#grupomuscular2f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10f').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10f').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10f').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2f", function(e){ //click en eliminar campo
                            if( a2f > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2f--;
                                FieldCount2f=FieldCount2f-1;
                                document.getElementById('Form_FieldCount2f').value = FieldCount2f;
                                
                                if(FieldCount2f===1&&FieldCount_dsf===1&&FieldCount===6){
                                document.getElementById('show6').style.display = 'none';    
                                document.getElementById('delete6').style.display = 'block';
                                }
                                else if(FieldCount2f===2){
                                document.getElementById('eliminar_f2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2f===3){
                                document.getElementById('eliminar_f3').style.display = 'block';
                                }
                                else if(FieldCount2f===4){
                                document.getElementById('eliminar_f4').style.display = 'block';
                                }
                                else if(FieldCount2f===5){
                                document.getElementById('eliminar_f5').style.display = 'block';
                                }
                                else if(FieldCount2f===6){
                                document.getElementById('eliminar_f6').style.display = 'block';
                                }
                                else if(FieldCount2f===7){
                                document.getElementById('eliminar_f7').style.display = 'block';
                                }
                                else if(FieldCount2f===8){
                                document.getElementById('eliminar_f8').style.display = 'block';
                                }
                                else if(FieldCount2f===9){
                                document.getElementById('eliminar_f9').style.display = 'block';
                                document.getElementById('div6').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        
                                           
/****************************************************************************************************************************/
/*2G3G4G5G6G7G8G9G10G*/                        
                      
                      
                    var MaxInputs2g           = 12; //Número Maximo de Campos
         
                    var completar2g      = $("#completar2g");
                   
                    var AddButton2g       = $("#agregarGrupoMuscular7"); //ID del Botón Agregar

                    var a2g = $("#fase_entrenamiento div").length + 1;  //4
       
                    var FieldCount2g = a2g-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_grup7_grupomuscular='';
                    var str2_grup7_grupomuscular='';
                    var str3_grup7_grupomuscular='';
                    var str_grup7_ejercicio='';
                    var str2_grup7_ejercicio='';
                    var str3_grup7_ejercicio='';
                    var str_grup7_series='';
                    var str2_grup7_series='';
                    var str_grup7_repeticiones='';
                    var str2_grup7_repeticiones='';
                    var str_grup7_descanso='';
                    var str2_grup7_descanso='';
                    
                    
                    document.getElementById('Form_FieldCount2g').value = 1;
                
                    //document.write(FieldCount);

                        $(AddButton2g).click(function (e) {
                            if(a2g <= MaxInputs2g) //max input box allowed
                            {
                                FieldCount2g++;
                                document.getElementById('Form_FieldCount2g').value = FieldCount2g;
if(FieldCount2g===2){
document.getElementById('delete7').style.display = 'none';    
document.getElementById('show7').style.display = 'block';
str_grup7_grupomuscular='{{Input::old("grupomuscular2g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular2g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular2g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio2g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio2g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio2g")}}';
str_grup7_series='{{{Input::old("series2g")}}}';
str2_grup7_series='{{$errors->first("series2g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones2g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones2g")}}';
str_grup7_descanso='{{{Input::old("descanso2g")}}}';
str2_grup7_descanso='{{$errors->first("descanso2g")}}';
}                                
else if(FieldCount2g===3){
document.getElementById('eliminar_g2').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular3g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular3g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular3g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio3g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio3g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio3g")}}';
str_grup7_series='{{{Input::old("series3g")}}}';
str2_grup7_series='{{$errors->first("series3g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones3g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones3g")}}';
str_grup7_descanso='{{{Input::old("descanso3g")}}}';
str2_grup7_descanso='{{$errors->first("descanso3g")}}';
}
else if(FieldCount2g===4){
document.getElementById('eliminar_g3').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular4g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular4g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular4g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio4g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio4g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio4g")}}';
str_grup7_series='{{{Input::old("series4g")}}}';
str2_grup7_series='{{$errors->first("series4g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones4g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones4g")}}';
str_grup7_descanso='{{{Input::old("descanso4g")}}}';
str2_grup7_descanso='{{$errors->first("descanso4g")}}';
}
else if(FieldCount2g===5){
document.getElementById('eliminar_g4').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular5g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular5g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular5g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio5g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio5g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio5g")}}';
str_grup7_series='{{{Input::old("series5g")}}}';
str2_grup7_series='{{$errors->first("series5g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones5g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones5g")}}';
str_grup7_descanso='{{{Input::old("descanso5g")}}}';
str2_grup7_descanso='{{$errors->first("descanso5g")}}';
}
else if(FieldCount2g===6){
document.getElementById('eliminar_g5').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular6g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular6g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular6g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio6g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio6g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio6g")}}';
str_grup7_series='{{{Input::old("series6g")}}}';
str2_grup7_series='{{$errors->first("series6g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones6g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones6g")}}';
str_grup7_descanso='{{{Input::old("descanso6g")}}}';
str2_grup7_descanso='{{$errors->first("descanso6g")}}';
}
else if(FieldCount2g===7){
document.getElementById('eliminar_g6').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular7g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular7g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular7g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio7g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio7g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio7g")}}';
str_grup7_series='{{{Input::old("series7g")}}}';
str2_grup7_series='{{$errors->first("series7g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones7g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones7g")}}';
str_grup7_descanso='{{{Input::old("descanso7g")}}}';
str2_grup7_descanso='{{$errors->first("descanso7g")}}';
}
else if(FieldCount2g===8){
document.getElementById('eliminar_g7').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular8g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular8g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular8g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio8g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio8g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio8g")}}';
str_grup7_series='{{{Input::old("series8g")}}}';
str2_grup7_series='{{$errors->first("series8g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones8g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones8g")}}';
str_grup7_descanso='{{{Input::old("descanso8g")}}}';
str2_grup7_descanso='{{$errors->first("descanso8g")}}';
}
else if(FieldCount2g===9){
document.getElementById('eliminar_g8').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular9g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular9g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular9g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio9g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio9g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio9g")}}';
str_grup7_series='{{{Input::old("series9g")}}}';
str2_grup7_series='{{$errors->first("series9g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones9g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones9g")}}';
str_grup7_descanso='{{{Input::old("descanso9g")}}}';
str2_grup7_descanso='{{$errors->first("descanso9g")}}';
}
else if(FieldCount2g===10){
document.getElementById('eliminar_g9').style.display = 'none';
document.getElementById('div7').style.display = 'none';
str_grup7_grupomuscular='{{Input::old("grupomuscular10g")}}';
str2_grup7_grupomuscular='{{DB::table("grupomusculares")->where("id","=", Input::old("grupomuscular10g") )->pluck("grm_nombre")}}';
str3_grup7_grupomuscular='{{$errors->first("grupomuscular10g")}}';
str_grup7_ejercicio='{{Input::old("ejercicio10g")}}';
str2_grup7_ejercicio='{{DB::table("ejercicios")->where("id","=", Input::old("ejercicio10g") )->pluck("eje_nombre")}}';
str3_grup7_ejercicio='{{$errors->first("ejercicio10g")}}';
str_grup7_series='{{{Input::old("series10g")}}}';
str2_grup7_series='{{$errors->first("series10g")}}';
str_grup7_repeticiones='{{{Input::old("repeticiones10g")}}}';
str2_grup7_repeticiones='{{$errors->first("repeticiones10g")}}';
str_grup7_descanso='{{{Input::old("descanso10g")}}}';
str2_grup7_descanso='{{$errors->first("descanso10g")}}';
}

$(completar2g).append('<div class="llaa">'+
                        '<a href="#" class="eliminar2g" id="eliminar_g'+FieldCount2g+'" ><center>&times;</center></a>'+
                            '<div class="row">'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                         '<label for="grupomuscular'+FieldCount2g+'g">*Grupo Muscular</label>'+
                                         '<div class="selectpicker">'+
                                            '<select name="grupomuscular'+FieldCount2g+'g" id="grupomuscular'+FieldCount2g+'g" class="form-control">'+
                                                '<option value="'+str_grup7_grupomuscular+'">'+str2_grup7_grupomuscular+'</option>'+
                                                '@foreach($grupomusculares as $grupomuscular)'+
                                                '<option value="{{$grupomuscular->id}}">{{$grupomuscular->grm_nombre}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
                                         '</div>'+
                                         '<div class="bg-danger">'+str3_grup7_grupomuscular+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="form-group">'+
                                        '<label for="ejercicio'+FieldCount2g+'g">*Ejercicio</label>'+
                                        '<select name="ejercicio'+FieldCount2g+'g" id="ejercicio'+FieldCount2g+'g" class="form-control">'+
                                        '<option value="'+str_grup7_ejercicio+'">'+str2_grup7_ejercicio+'</option>'+
                                        '</select>'+
                                        '<div class="bg-danger">'+str3_grup7_ejercicio+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="series'+FieldCount2g+'g">*Series</label>'+
                                        '<input type="text" class="form-control" name="series'+FieldCount2g+'g" value="'+str_grup7_series+'" id="series'+FieldCount2g+'g" placeholder="series'+FieldCount2g+'g">'+
                                        '<div class="bg-danger">'+str2_grup7_series+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="repeticiones'+FieldCount2g+'g">*Repeticiones</label>'+
                                        '<input type="text" class="form-control" name="repeticiones'+FieldCount2g+'g" value="'+str_grup7_repeticiones+'" id="repeticiones'+FieldCount2g+'g" placeholder="repeticiones'+FieldCount2g+'g">'+
                                        '<div class="bg-danger">'+str2_grup7_repeticiones+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-2">'+
                                    '<div class="form-group">'+
                                        '<label for="descanso'+FieldCount2g+'g">*Descanso (minutos)</label>'+
                                         '<input type="text" class="form-control" name="descanso'+FieldCount2g+'g" value="'+str_grup7_descanso+'" id="descanso'+FieldCount2g+'g" placeholder="descanso'+FieldCount2g+'g">'+
                                        '<div class="bg-danger">'+str2_grup7_descanso+'</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');

a2g++; //text box increment

                $('#grupomuscular2g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio2g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio2g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular3g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio3g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio3g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular4g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio4g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio4g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
         
                $('#grupomuscular5g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio5g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio5g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular6g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio6g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio6g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular7g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio7g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio7g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular8g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio8g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio8g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular9g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio9g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio9g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });
                
                $('#grupomuscular10g').on('change', function(e){
                console.log(e);
                var cat_id = e.target.value;

                // AJAX
                    $.get('ajax-grupomuscular/' + cat_id, function(data){
                        $('#ejercicio10g').empty();
                            $.each(data, function(gestion_rutina, subcatObj){
                                $('#ejercicio10g').append('<option value="'+subcatObj.id+'">'+subcatObj.eje_nombre+'</option>');
                        });
                    });
                });


                            }
                            return false;
                        });

                        $("body").on("click",".eliminar2g", function(e){ //click en eliminar campo
                            if( a2g > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                a2g--;
                                FieldCount2g=FieldCount2g-1;
                                document.getElementById('Form_FieldCount2g').value = FieldCount2g;
                                
                                if(FieldCount2g===1&&FieldCount_dsg===1&&FieldCount===7){
                                document.getElementById('show7').style.display = 'none';    
                                document.getElementById('delete7').style.display = 'block';
                                }
                                else if(FieldCount2g===2){
                                document.getElementById('eliminar_g2').style.display = 'block';
                                }                                                                
                                else if(FieldCount2g===3){
                                document.getElementById('eliminar_g3').style.display = 'block';
                                }
                                else if(FieldCount2g===4){
                                document.getElementById('eliminar_g4').style.display = 'block';
                                }
                                else if(FieldCount2g===5){
                                document.getElementById('eliminar_g5').style.display = 'block';
                                }
                                else if(FieldCount2g===6){
                                document.getElementById('eliminar_g6').style.display = 'block';
                                }
                                else if(FieldCount2g===7){
                                document.getElementById('eliminar_g7').style.display = 'block';
                                }
                                else if(FieldCount2g===8){
                                document.getElementById('eliminar_g8').style.display = 'block';
                                }
                                else if(FieldCount2g===9){
                                document.getElementById('eliminar_g9').style.display = 'block';
                                document.getElementById('div7').style.display = 'block';
                                }
                            }
                            return false;
                        });
  
  
  
/****************************************************************************************************************************/
/****************************************************************************************************************************/
/****************************************************************************************************************************/
/****************************************************************************************************************************/
/*2DSA3DSA4DSA5DSA6DSA7DSA8DSA9DSA10DSA*/ 
                                              
                    var MaxInputs_dsa           = 9; //Número Maximo de Campos
                                    
                    var completar_ds      = $("#completar_ds");

                    var AddButton_dsa       = $("#agregarDiaSemana"); //ID del Botón Agregar

                    var dsa = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsa = dsa-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                
                    var str_dsem_diasemana='';
                    var str2_dsem_diasemana='';
                    var str3_dsem_diasemana='';
                    //document.write(a);//4
                    //document.write(FieldCount);//1
                    document.getElementById('Form_FieldCount_dsa').value = 1;
                    
                    
        
                    
                    
                    
   

    
     $(AddButton_dsa).click(function (e) {
                            if(dsa <= MaxInputs_dsa) //max input box allowed
                            {
                                FieldCount_dsa++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dsa').value = FieldCount_dsa;

if(FieldCount_dsa===2){
str_dsem_diasemana='{{Input::old("diasemana2a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana2a")}}';    
}
if(FieldCount_dsa===3){
document.getElementById('delete_dsa2').style.display = 'none';
str_dsem_diasemana='{{Input::old("diasemana3a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana3a")}}';
}
else if(FieldCount_dsa===4){
document.getElementById('delete_dsa3').style.display = 'none';
str_dsem_diasemana='{{Input::old("diasemana4a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana4a")}}';
}
else if(FieldCount_dsa===5){
document.getElementById('delete_dsa4').style.display = 'none';
str_dsem_diasemana='{{Input::old("diasemana5a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana5a")}}';
}
else if(FieldCount_dsa===6){
document.getElementById('delete_dsa5').style.display = 'none';
str_dsem_diasemana='{{Input::old("diasemana6a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana6a")}}';
}
else if(FieldCount_dsa===7){
document.getElementById('delete_dsa6').style.display = 'none';
document.getElementById('agregarDiaSemana').style.display = 'none';
str_dsem_diasemana='{{Input::old("diasemana7a")}}';
str2_dsem_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7a") )->pluck("dis_nombre")}}';
str3_dsem_diasemana='{{$errors->first("diasemana7a")}}';
}


$(completar_ds).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsa+'a">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsa+'a" id="diasemana'+FieldCount_dsa+'a" class="form-control">'+
                                        '<option value="'+str_dsem_diasemana+'">'+str2_dsem_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsa'+FieldCount_dsa+'" style="display:block;" class="eliminar_dsa">&times;</a>'+
'</div>');
                                                                                  

dsa++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsa", function(e){ //click en eliminar campo
                            if( dsa > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsa--;
                                FieldCount_dsa=FieldCount_dsa-1;
                                document.getElementById('Form_FieldCount_dsa').value = FieldCount_dsa;
                                if(FieldCount_dsa===2){
                                document.getElementById('delete_dsa2').style.display = 'block';
                                }
                                else if(FieldCount_dsa===3){
                                document.getElementById('delete_dsa3').style.display = 'block';
                                }
                                else if(FieldCount_dsa===4){
                                document.getElementById('delete_dsa4').style.display = 'block';
                                }
                                else if(FieldCount_dsa===5){
                                document.getElementById('delete_dsa5').style.display = 'block';
                                }
                                else if(FieldCount_dsa===6){
                                document.getElementById('delete_dsa6').style.display = 'block';
                                document.getElementById('agregarDiaSemana').style.display = 'block';
                                }
                            }
                            return false;
                        });



/****************************************************************************************************************************/
/*2DSB3DSB4DSB5DSB6DSB7DSB8DSB9DSB10DSB*/ 
                                              
                    var MaxInputs_dsb           = 9; //Número Maximo de Campos
                                    
                    var completar_ds2      = $("#completar_ds2");

                    var AddButton_dsb       = $("#agregarDiaSemana2"); //ID del Botón Agregar

                    var dsb = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsb = dsb-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem2_diasemana='';
                    var str2_dsem2_diasemana='';
                    var str3_dsem2_diasemana=''; 
                    
                    document.getElementById('Form_FieldCount_dsb').value = 1;
                
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dsb).click(function(e){
                            if(dsb <= MaxInputs_dsb) //max input box allowed
                            {
                            
                                FieldCount_dsb++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dsb').value = FieldCount_dsb;
if(FieldCount_dsb===2){
document.getElementById('delete2').style.display = 'none';    
document.getElementById('show2').style.display = 'block';
str_dsem2_diasemana='{{Input::old("diasemana2b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana2b")}}'; 
}
if(FieldCount_dsb===3){
document.getElementById('delete_dsb2').style.display = 'none';
str_dsem2_diasemana='{{Input::old("diasemana3b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana3b")}}'; 
}
else if(FieldCount_dsb===4){
document.getElementById('delete_dsb3').style.display = 'none';
str_dsem2_diasemana='{{Input::old("diasemana4b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana4b")}}'; 
}
else if(FieldCount_dsb===5){
document.getElementById('delete_dsb4').style.display = 'none';
str_dsem2_diasemana='{{Input::old("diasemana5b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana5b")}}'; 
}
else if(FieldCount_dsb===6){
document.getElementById('delete_dsb5').style.display = 'none';
str_dsem2_diasemana='{{Input::old("diasemana6b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana6b")}}'; 
}
else if(FieldCount_dsb===7){
document.getElementById('delete_dsb6').style.display = 'none';
document.getElementById('agregarDiaSemana2').style.display = 'none';
str_dsem2_diasemana='{{Input::old("diasemana7b")}}';
str2_dsem2_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7b") )->pluck("dis_nombre")}}';
str3_dsem2_diasemana='{{$errors->first("diasemana7b")}}'; 
}

                                        
$(completar_ds2).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsb+'b">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsb+'b" id="diasemana'+FieldCount_dsb+'b" class="form-control">'+
                                        '<option value="'+str_dsem2_diasemana+'">'+str2_dsem2_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem2_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsb'+FieldCount_dsb+'" style="display:block;" class="eliminar_dsb">&times;</a>'+
'</div>');
                                                                                  

dsb++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsb", function(e){ //click en eliminar campo
                            if( dsb > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsb--;
                                FieldCount_dsb=FieldCount_dsb-1;
                                document.getElementById('Form_FieldCount_dsb').value = FieldCount_dsb;
                                
                                if(FieldCount_dsb===1&&FieldCount2b===1&&FieldCount===2){
                                document.getElementById('show2').style.display = 'none';    
                                document.getElementById('delete2').style.display = 'block';
                                }
                                else if(FieldCount_dsb===2){
                                document.getElementById('delete_dsb2').style.display = 'block';
                                }
                                else if(FieldCount_dsb===3){
                                document.getElementById('delete_dsb3').style.display = 'block';
                                }
                                else if(FieldCount_dsb===4){
                                document.getElementById('delete_dsb4').style.display = 'block';
                                }
                                else if(FieldCount_dsb===5){
                                document.getElementById('delete_dsb5').style.display = 'block';
                                }
                                else if(FieldCount_dsb===6){
                                document.getElementById('delete_dsb6').style.display = 'block';
                                document.getElementById('agregarDiaSemana2').style.display = 'block';
                                }
                            }
                            return false;
                        });
                      
                                            
/****************************************************************************************************************************/
/*2DSC3DSC4DSC5DSC6DSC7DSC8DSC9DSC10DSC*/ 
                                              
                    var MaxInputs_dsc           = 9; //Número Maximo de Campos
                                    
                    var completar_ds3      = $("#completar_ds3");

                    var AddButton_dsc       = $("#agregarDiaSemana3"); //ID del Botón Agregar

                    var dsc = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsc = dsc-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem3_diasemana='';
                    var str2_dsem3_diasemana='';
                    var str3_dsem3_diasemana='';
                    
                    document.getElementById('Form_FieldCount_dsc').value = 1;
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dsc).click(function(e){
                            if(dsc <= MaxInputs_dsc) //max input box allowed
                            {
                            
                                FieldCount_dsc++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dsc').value = FieldCount_dsc;
if(FieldCount_dsc===2){
document.getElementById('delete3').style.display = 'none';    
document.getElementById('show3').style.display = 'block';
str_dsem3_diasemana='{{Input::old("diasemana2c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana2c")}}'; 
}
if(FieldCount_dsc===3){
document.getElementById('delete_dsc2').style.display = 'none';
str_dsem3_diasemana='{{Input::old("diasemana3c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana3c")}}'; 
}
else if(FieldCount_dsc===4){
document.getElementById('delete_dsc3').style.display = 'none';
str_dsem3_diasemana='{{Input::old("diasemana4c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana4c")}}'; 
}
else if(FieldCount_dsc===5){
document.getElementById('delete_dsc4').style.display = 'none';
str_dsem3_diasemana='{{Input::old("diasemana5c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana5c")}}'; 
}
else if(FieldCount_dsc===6){
document.getElementById('delete_dsc5').style.display = 'none';
str_dsem3_diasemana='{{Input::old("diasemana6c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana6c")}}'; 
}
else if(FieldCount_dsc===7){
document.getElementById('delete_dsc6').style.display = 'none';
document.getElementById('agregarDiaSemana3').style.display = 'none';
str_dsem3_diasemana='{{Input::old("diasemana7c")}}';
str2_dsem3_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7c") )->pluck("dis_nombre")}}';
str3_dsem3_diasemana='{{$errors->first("diasemana7c")}}'; 
}

                                        
$(completar_ds3).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsc+'c">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsc+'c" id="diasemana'+FieldCount_dsc+'c" class="form-control">'+
                                        '<option value="'+str_dsem3_diasemana+'">'+str2_dsem3_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem3_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsc'+FieldCount_dsc+'" style="display:block;" class="eliminar_dsc">&times;</a>'+
'</div>');
                                                                                  

dsc++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsc", function(e){ //click en eliminar campo
                            if( dsc > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsc--;
                                FieldCount_dsc=FieldCount_dsc-1;
                                 document.getElementById('Form_FieldCount_dsc').value = FieldCount_dsc;
                                
                                if(FieldCount_dsc===1&&FieldCount2c===1&&FieldCount===3){
                                document.getElementById('show3').style.display = 'none';    
                                document.getElementById('delete3').style.display = 'block';
                                }
                                else if(FieldCount_dsc===2){
                                document.getElementById('delete_dsc2').style.display = 'block';
                                }
                                else if(FieldCount_dsc===3){
                                document.getElementById('delete_dsc3').style.display = 'block';
                                }
                                else if(FieldCount_dsc===4){
                                document.getElementById('delete_dsc4').style.display = 'block';
                                }
                                else if(FieldCount_dsc===5){
                                document.getElementById('delete_dsc5').style.display = 'block';
                                }
                                else if(FieldCount_dsc===6){
                                document.getElementById('delete_dsc6').style.display = 'block';
                                document.getElementById('agregarDiaSemana3').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        

/****************************************************************************************************************************/
/*2DSD3DSD4DSD5DSD6DSD7DSD8DSD9DSD10DSD*/ 
                                              
                    var MaxInputs_dsd           = 9; //Número Maximo de Campos
                                    
                    var completar_ds4      = $("#completar_ds4");

                    var AddButton_dsd       = $("#agregarDiaSemana4"); //ID del Botón Agregar

                    var dsd = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsd = dsd-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem4_diasemana='';
                    var str2_dsem4_diasemana='';
                    var str3_dsem4_diasemana='';
                    
                     document.getElementById('Form_FieldCount_dsd').value = 1;
                
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dsd).click(function(e){
                            if(dsd <= MaxInputs_dsd) //max input box allowed
                            {
                            
                                FieldCount_dsd++; //primera vez es 2
                                 document.getElementById('Form_FieldCount_dsd').value = FieldCount_dsd;
if(FieldCount_dsd===2){
document.getElementById('delete4').style.display = 'none';    
document.getElementById('show4').style.display = 'block';
str_dsem4_diasemana='{{Input::old("diasemana2d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana2d")}}'; 
}
if(FieldCount_dsd===3){
document.getElementById('delete_dsd2').style.display = 'none';
str_dsem4_diasemana='{{Input::old("diasemana3d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana3d")}}'; 
}
else if(FieldCount_dsd===4){
document.getElementById('delete_dsd3').style.display = 'none';
str_dsem4_diasemana='{{Input::old("diasemana4d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana4d")}}'; 
}
else if(FieldCount_dsd===5){
document.getElementById('delete_dsd4').style.display = 'none';
str_dsem4_diasemana='{{Input::old("diasemana5d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana5d")}}'; 
}
else if(FieldCount_dsd===6){
document.getElementById('delete_dsd5').style.display = 'none';
str_dsem4_diasemana='{{Input::old("diasemana6d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana6d")}}'; 
}
else if(FieldCount_dsd===7){
document.getElementById('delete_dsd6').style.display = 'none';
document.getElementById('agregarDiaSemana4').style.display = 'none';
str_dsem4_diasemana='{{Input::old("diasemana7d")}}';
str2_dsem4_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7d") )->pluck("dis_nombre")}}';
str3_dsem4_diasemana='{{$errors->first("diasemana7d")}}'; 
}


                                        
$(completar_ds4).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsd+'d">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsd+'d" id="diasemana'+FieldCount_dsd+'d" class="form-control">'+
                                        '<option value="'+str_dsem4_diasemana+'">'+str2_dsem4_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem4_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsd'+FieldCount_dsd+'" style="display:block;" class="eliminar_dsd">&times;</a>'+
'</div>');
                                                                                  

dsd++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsd", function(e){ //click en eliminar campo
                            if( dsd > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsd--;
                                FieldCount_dsd=FieldCount_dsd-1;
                                document.getElementById('Form_FieldCount_dsd').value = FieldCount_dsd;
                                
                                if(FieldCount_dsd===1&&FieldCount2d===1&&FieldCount===4){
                                document.getElementById('show4').style.display = 'none';    
                                document.getElementById('delete4').style.display = 'block';
                                }
                                else if(FieldCount_dsd===2){
                                document.getElementById('delete_dsd2').style.display = 'block';
                                }
                                else if(FieldCount_dsd===3){
                                document.getElementById('delete_dsd3').style.display = 'block';
                                }
                                else if(FieldCount_dsd===4){
                                document.getElementById('delete_dsd4').style.display = 'block';
                                }
                                else if(FieldCount_dsd===5){
                                document.getElementById('delete_dsd5').style.display = 'block';
                                }
                                else if(FieldCount_dsd===6){
                                document.getElementById('delete_dsd6').style.display = 'block';
                                document.getElementById('agregarDiaSemana4').style.display = 'block';
                                }
                            }
                            return false;
                        });
                        
                        
/****************************************************************************************************************************/
/*2DSE3DSE4DSE5DSE6DSE7DSE8DSE9DSE10DSE*/ 
                                              
                    var MaxInputs_dse           = 9; //Número Maximo de Campos
                                    
                    var completar_ds5      = $("#completar_ds5");

                    var AddButton_dse       = $("#agregarDiaSemana5"); //ID del Botón Agregar

                    var dse = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dse = dse-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem5_diasemana='';
                    var str2_dsem5_diasemana='';
                    var str3_dsem5_diasemana='';
                    
                    document.getElementById('Form_FieldCount_dse').value = 1;
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dse).click(function(e){
                            if(dse <= MaxInputs_dse) //max input box allowed
                            {
                            
                                FieldCount_dse++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dse').value = FieldCount_dse;
if(FieldCount_dse===2){
document.getElementById('delete5').style.display = 'none';    
document.getElementById('show5').style.display = 'block';
str_dsem5_diasemana='{{Input::old("diasemana2e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana2e")}}'; 
}
if(FieldCount_dse===3){
document.getElementById('delete_dse2').style.display = 'none';
str_dsem5_diasemana='{{Input::old("diasemana3e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana3e")}}'; 
}
else if(FieldCount_dse===4){
document.getElementById('delete_dse3').style.display = 'none';
str_dsem5_diasemana='{{Input::old("diasemana4e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana4e")}}'; 
}
else if(FieldCount_dse===5){
document.getElementById('delete_dse4').style.display = 'none';
str_dsem5_diasemana='{{Input::old("diasemana5e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana5e")}}'; 
}
else if(FieldCount_dse===6){
document.getElementById('delete_dse5').style.display = 'none';
str_dsem5_diasemana='{{Input::old("diasemana6e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana6e")}}'; 
}
else if(FieldCount_dse===7){
document.getElementById('delete_dse6').style.display = 'none';
document.getElementById('agregarDiaSemana5').style.display = 'none';
str_dsem5_diasemana='{{Input::old("diasemana7e")}}';
str2_dsem5_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7e") )->pluck("dis_nombre")}}';
str3_dsem5_diasemana='{{$errors->first("diasemana7e")}}'; 
}

                                        
$(completar_ds5).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dse+'e">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dse+'e" id="diasemana'+FieldCount_dse+'e" class="form-control">'+
                                        '<option value="'+str_dsem5_diasemana+'">'+str2_dsem5_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem5_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dse'+FieldCount_dse+'" style="display:block;" class="eliminar_dse">&times;</a>'+
'</div>');
                                                                                  

dse++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dse", function(e){ //click en eliminar campo
                            if( dse > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dse--;
                                FieldCount_dse=FieldCount_dse-1;
                                document.getElementById('Form_FieldCount_dse').value = FieldCount_dse;
                                
                                if(FieldCount_dse===1&&FieldCount2e===1&&FieldCount===5){
                                document.getElementById('show5').style.display = 'none';    
                                document.getElementById('delete5').style.display = 'block';
                                }
                                else if(FieldCount_dse===2){
                                document.getElementById('delete_dse2').style.display = 'block';
                                }
                                else if(FieldCount_dse===3){
                                document.getElementById('delete_dse3').style.display = 'block';
                                }
                                else if(FieldCount_dse===4){
                                document.getElementById('delete_dse4').style.display = 'block';
                                }
                                else if(FieldCount_dse===5){
                                document.getElementById('delete_dse5').style.display = 'block';
                                }
                                else if(FieldCount_dse===6){
                                document.getElementById('delete_dse6').style.display = 'block';
                                document.getElementById('agregarDiaSemana5').style.display = 'block';
                                }
                            }
                            return false;
                        });


/****************************************************************************************************************************/
/*2DSF3DSF4DSF5DSF6DSF7DSF8DSF9DSF10DSF*/ 
                                              
                    var MaxInputs_dsf           = 9; //Número Maximo de Campos
                                    
                    var completar_ds6      = $("#completar_ds6");

                    var AddButton_dsf       = $("#agregarDiaSemana6"); //ID del Botón Agregar

                    var dsf = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsf = dsf-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem6_diasemana='';
                    var str2_dsem6_diasemana='';
                    var str3_dsem6_diasemana='';
                    
                    document.getElementById('Form_FieldCount_dsf').value = 1;
            
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dsf).click(function(e){
                            if(dsf <= MaxInputs_dsf) //max input box allowed
                            {
                            
                                FieldCount_dsf++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dsf').value = FieldCount_dsf;
if(FieldCount_dsf===2){
document.getElementById('delete6').style.display = 'none';    
document.getElementById('show6').style.display = 'block';
str_dsem6_diasemana='{{Input::old("diasemana2f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana2f")}}'; 
}
if(FieldCount_dsf===3){
document.getElementById('delete_dsf2').style.display = 'none';
str_dsem6_diasemana='{{Input::old("diasemana3f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana3f")}}'; 
}
else if(FieldCount_dsf===4){
document.getElementById('delete_dsf3').style.display = 'none';
str_dsem6_diasemana='{{Input::old("diasemana4f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana4f")}}'; 
}
else if(FieldCount_dsf===5){
document.getElementById('delete_dsf4').style.display = 'none';
str_dsem6_diasemana='{{Input::old("diasemana5f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana5f")}}'; 
}
else if(FieldCount_dsf===6){
document.getElementById('delete_dsf5').style.display = 'none';
str_dsem6_diasemana='{{Input::old("diasemana6f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana6f")}}'; 
}
else if(FieldCount_dsf===7){
document.getElementById('delete_dsf6').style.display = 'none';
document.getElementById('agregarDiaSemana6').style.display = 'none';
str_dsem6_diasemana='{{Input::old("diasemana7f")}}';
str2_dsem6_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7f") )->pluck("dis_nombre")}}';
str3_dsem6_diasemana='{{$errors->first("diasemana7f")}}'; 
}

                                        
$(completar_ds6).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsf+'f">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsf+'f" id="diasemana'+FieldCount_dsf+'f" class="form-control">'+
                                        '<option value="'+str_dsem6_diasemana+'">'+str2_dsem6_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem6_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsf'+FieldCount_dsf+'" style="display:block;" class="eliminar_dsf">&times;</a>'+
'</div>');
                                                                                  

dsf++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsf", function(e){ //click en eliminar campo
                            if( dsf > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsf--;
                                FieldCount_dsf=FieldCount_dsf-1;
                                document.getElementById('Form_FieldCount_dsf').value = FieldCount_dsf;
                                
                                if(FieldCount_dsf===1&&FieldCount2f===1&&FieldCount===6){
                                document.getElementById('show6').style.display = 'none';    
                                document.getElementById('delete6').style.display = 'block';
                                }
                                else if(FieldCount_dsf===2){
                                document.getElementById('delete_dsf2').style.display = 'block';
                                }
                                else if(FieldCount_dsf===3){
                                document.getElementById('delete_dsf3').style.display = 'block';
                                }
                                else if(FieldCount_dsf===4){
                                document.getElementById('delete_dsf4').style.display = 'block';
                                }
                                else if(FieldCount_dsf===5){
                                document.getElementById('delete_dsf5').style.display = 'block';
                                }
                                else if(FieldCount_dsf===6){
                                document.getElementById('delete_dsf6').style.display = 'block';
                                document.getElementById('agregarDiaSemana6').style.display = 'block';
                                }
                            }
                            return false;
                        });


/****************************************************************************************************************************/
/*2DSG3DSG4DSG5DSG6DSG7DSG8DSG9DSG10DSG*/ 
                                              
                    var MaxInputs_dsg           = 9; //Número Maximo de Campos
                                    
                    var completar_ds7      = $("#completar_ds7");

                    var AddButton_dsg       = $("#agregarDiaSemana7"); //ID del Botón Agregar

                    var dsg = $("#fase_entrenamiento div").length + 1;  //4
                   

                    var FieldCount_dsg = dsg-3; //para el seguimiento de los campos //SIEMPRE DEBE ESTAR EN 1
                    var str_dsem7_diasemana='';
                    var str2_dsem7_diasemana='';
                    var str3_dsem7_diasemana='';
                    
                    document.getElementById('Form_FieldCount_dsg').value = 1;
                
                    //document.write(FieldCount_dsb);//4
                    //document.write(FieldCount);//1

                        $(AddButton_dsg).click(function(e){
                            if(dsg <= MaxInputs_dsg) //max input box allowed
                            {
                            
                                FieldCount_dsg++; //primera vez es 2
                                document.getElementById('Form_FieldCount_dsg').value = FieldCount_dsg;
if(FieldCount_dsg===2){
document.getElementById('delete7').style.display = 'none';    
document.getElementById('show7').style.display = 'block';
str_dsem7_diasemana='{{Input::old("diasemana2g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana2g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana2g")}}'; 
}
if(FieldCount_dsg===3){
document.getElementById('delete_dsg2').style.display = 'none';
str_dsem7_diasemana='{{Input::old("diasemana3g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana3g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana3g")}}'; 
}
else if(FieldCount_dsg===4){
document.getElementById('delete_dsg3').style.display = 'none';
str_dsem7_diasemana='{{Input::old("diasemana4g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana4g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana4g")}}'; 
}
else if(FieldCount_dsg===5){
document.getElementById('delete_dsg4').style.display = 'none';
str_dsem7_diasemana='{{Input::old("diasemana5g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana5g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana5g")}}'; 
}
else if(FieldCount_dsg===6){
document.getElementById('delete_dsg5').style.display = 'none';
str_dsem7_diasemana='{{Input::old("diasemana6g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana6g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana6g")}}'; 
}
else if(FieldCount_dsg===7){
document.getElementById('delete_dsg6').style.display = 'none';
document.getElementById('agregarDiaSemana7').style.display = 'none';
str_dsem7_diasemana='{{Input::old("diasemana7g")}}';
str2_dsem7_diasemana='{{ DB::table("dsemanas")->where("id","=", Input::old("diasemana7g") )->pluck("dis_nombre")}}';
str3_dsem7_diasemana='{{$errors->first("diasemana7g")}}'; 
}

                                        
$(completar_ds7).append('<div class="aslas">'+
                        '<div class="col-md-2">'+
                            '<div class="form-group">'+
                                 '<label for="diasemana'+FieldCount_dsg+'g">*Día semana</label>'+
                                 '<div class="selectpicker">'+
                                    '<select name="diasemana'+FieldCount_dsg+'g" id="diasemana'+FieldCount_dsg+'g" class="form-control">'+
                                        '<option value="'+str_dsem7_diasemana+'">'+str2_dsem7_diasemana+'</option>'+
                                        '@foreach($diasemanas as $dsemana)'+
                                        '<option value="{{$dsemana->id}}">{{$dsemana->dis_nombre}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                 '</div>'+
                                 '<div class="bg-danger">'+str3_dsem7_diasemana+'</div>'+
                            '</div>'+
                        '</div>'+
                        '<a href="#" id="delete_dsg'+FieldCount_dsg+'" style="display:block;" class="eliminar_dsg">&times;</a>'+
'</div>');
                                                                                  

dsg++; //text box increment


               
                            }
                            return false;
                        });

                        $("body").on("click",".eliminar_dsg", function(e){ //click en eliminar campo
                            if( dsg > 1 ) {
                                $(this).parent('div').remove(); //eliminar el campo
                                dsg--;
                                FieldCount_dsg=FieldCount_dsg-1;
                                document.getElementById('Form_FieldCount_dsg').value = FieldCount_dsg;
                                
                                if(FieldCount_dsg===1&&FieldCount2g===1&&FieldCount===7){
                                document.getElementById('show7').style.display = 'none';    
                                document.getElementById('delete7').style.display = 'block';
                                }
                                else if(FieldCount_dsg===2){
                                document.getElementById('delete_dsg2').style.display = 'block';
                                }
                                else if(FieldCount_dsg===3){
                                document.getElementById('delete_dsg3').style.display = 'block';
                                }
                                else if(FieldCount_dsg===4){
                                document.getElementById('delete_dsg4').style.display = 'block';
                                }
                                else if(FieldCount_dsg===5){
                                document.getElementById('delete_dsg5').style.display = 'block';
                                }
                                else if(FieldCount_dsg===6){
                                document.getElementById('delete_dsg6').style.display = 'block';
                                document.getElementById('agregarDiaSemana7').style.display = 'block';
                                }
                            }
                            return false;
                        });

//document.write(FieldCount);
                        onEnviar(FieldCount);

                    });
                    
     
                    


                </script>
                    

                    
                    
                    
                  
                
       
            
        
                 
    @stop
    
@stop
