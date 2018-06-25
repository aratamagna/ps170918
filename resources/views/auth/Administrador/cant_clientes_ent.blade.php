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
			  <div class="panel-heading"><center><h2>Reporte 2: Cantidad de clientes por entrenador</h2></center>   </div>
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
                              
                                <div class="row">
                                @foreach($users1 as $user1)
                                @foreach($users2 as $user2)
                                @foreach($users3 as $user3)
                                @foreach($users4 as $user4)
                                @foreach($users5 as $user5)
                                @foreach($users6 as $user6)
                                    <div class="col-md-6 col-md-offset-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Entrenadores</th>
                                                    <th>N° clientes:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{{$user1->per_nombre}}} {{{$user1->per_apellidop}}} {{{$user1->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{{$user2->per_nombre}}} {{{$user2->per_apellidop}}} {{{$user2->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{{$user3->per_nombre}}} {{{$user3->per_apellidop}}} {{{$user3->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{{$user4->per_nombre}}} {{{$user4->per_apellidop}}} {{{$user4->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{{$user5->per_nombre}}} {{{$user5->per_apellidop}}} {{{$user5->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{{$user6->per_nombre}}} {{{$user6->per_apellidop}}} {{{$user6->per_apellidom}}}</td>
                                                    <td>{{$cant_users_ent6}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach  
                                @endforeach  
                                @endforeach  
                                @endforeach  
                                @endforeach  
                                @endforeach  
                                </div>
                                
			  </div>
                      
			</div>
 
                    
		</div>
            </div>
                
                
              
       
    </div>
</div>
@stop
