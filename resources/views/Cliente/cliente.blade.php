@extends('layouts.bootstrap')

@section('head')
  
@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12">
 			

                 <!--  <h1>Bienvenido {{Auth::user()->get()->email}}</h1> -->
                   
                    <div class="row">
                                <div class="col-sm-6">
					<div class="panel panel-default">
                                      
					  <div class="panel-body">
                                           <!--   <img src="images/entrenadores.png" height="300" alt="..." class="img-rounded">
                                              <img src="images/entrenadores.png" height="300" alt="..." class="img-circle">-->
                                              <a href="{{URL::route('evaluacion_personal')}}"><img src="images/mievaluacion3.png"  alt="..." class="img-thumbnail"></a>
					  </div>
                                            <div class="panel-footer"><h4><center>MIS EVALUACIONES</center></h4></div>
					</div>
				</div>
                                <div class="col-sm-6">
					<div class="panel panel-default">
					  <div class="panel-body">
                                              <a href="{{URL::route('rutina_personal')}}"><img src="images/mirutina1.png" alt="..." class="img-thumbnail"></a>
                                            
					  </div>
					  <div class="panel-footer"><h4><center>MIS RUTINAS</center></h4></div>
					</div>
				</div>
                    </div>
			
                
            </div>
        </div>
    </div>
</div>

@stop
