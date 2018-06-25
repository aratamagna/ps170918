@extends('layouts.bootstrap')

@section('head')
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
                    
 
			<div class="panel panel-success"> <!-- Permite crear paneles texto,formularios,videos-->
			  <div class="panel-heading"><center><h2>Reporte 1: Cantidad de usuarios</h2></center>   </div>
			  <div class="panel-body">
                                
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email"><h4>Fecha: </h4></label>
                                            {{$fecha}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email"><h4>Hora: </h4></label>
                                            {{$hora}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email"><h4>Cantidad de personas en el sistema: </h4></label>
                                            {{$cant_users}}
                                        </div>
                                    </div>
                                </div>
                              
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Personas</th>
                                            <th>N° entrenadores:</th>
                                            <th>N° clientes:</th>
                                            <th>N° administradores:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Activos</td>
                                            <td>{{$cant_users_ent_act}}</td>
                                            <td>{{$cant_users_cli_act}}</td>
                                            <td>{{$cant_users_adm_act}}</td>
                                        </tr>
                                        <tr>
                                            <td>Inactivos</td>
                                            <td>{{$cant_users_ent_des}}</td>
                                            <td>{{$cant_users_cli_des}}</td>
                                            <td>{{$cant_users_adm_des}}</td>

                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>{{$cant_users_ent}}</td>
                                            <td>{{$cant_users_cli}}</td>
                                            <td>{{$cant_users_adm}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
			  </div>
                      
			</div>
 
                    
		</div>
            </div>
                
                
              
       
    </div>
</div>
@stop
