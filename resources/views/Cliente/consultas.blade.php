@extends('layouts.bootstrap')

@section('head')
  
@stop

@section('content')

<div class="banner">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-8">
 			

                    <h1>Bienvenido {{Auth::user()->get()->email}}</h1>
                               

                        <?php
                              $users = DB::table('users')->get();

                                foreach ($users as $user)
                                {
                                    var_dump($user->email);
                                }
                                /***************************************/  
                    echo "<br>";
                                /***************************************/  
                                $user = DB::table('users')->where('email', '17.676.404-k')->first();

                                var_dump($user->email);
                                /***************************************/  
                    echo "<br>";
                                /***************************************/  
                                $name = DB::table('users')->where('email', '17.676.404-k')->pluck('email');
                                echo $name;
                                 /***************************************/  
                    echo "<br>";          
                                /***************************************/  
                                   $u = DB::table('users')->get();

                                    foreach ($u as $user)
                                    {
                                        var_dump($user->email);
                                    }
                                      echo "<br>";
                                       echo "<br>";
                                        echo "<br>";
                                        
                                        
                                        /*****************************************************************/
                                       //  $jorge = DB::table('users')->where('active','=',3)->get();
                                 /*        $jorge = DB::table('users')->select('email', 'active')->get();
                                            foreach ($jorge as $user)
                                            {
                                             $user->id;
                                            }*/
                                        
      
                             
                                          $users=User::where('id','=',1)->get();
                                            foreach ($users as &$user) {
                                              //  $user->persona->per_rut ;
                                                $sexol=$user->persona->sexo->sex_cod ;
                                            }
                                            
                                            echo $sexol;
                                             echo "<br>";
                                        echo "<br>";
                                            

                                      $comp_active = DB::table('users')->where('email','=','17.676.404-k')->pluck('active');
                                      echo $comp_active;
                                      
                                      echo "<br>";
                                      echo "<br>";
                                      echo "<br>";
                                      $users=User::all();
           foreach($users as $user){
                 if($user->email=='16.372.233-k'){
               echo $user->id;
                 echo "<br>";}
           }
// $sexo = DB::table('sexos')->orderBy('id', 'asc')->lists('sex_nombre','id');
                                           // echo $sexo;
                                         
                                         //   //   $users2=User::where('tipousuario_id','=','3')->get();
                                         //   echo $users2;
                                            
                                            
                                            
                                            //$ent_id = DB::table('entrenamientos')->where('ent_nombre','=', Input::get('fases_ent'))->orWhere('entrenamientonombre_id','=', $enn_id)->pluck('id');
                                           // $ent_id=5;
                                        //    $ent_id = DB::table('entrenamientos')->where('ent_nombre','=', 'entrenamiento 1')->where('entrenamientonombre_id','=',37 )->pluck('id');
                                          //  echo $ent_id;
                        ?>
                
            </div>
        </div>
    </div>
</div>

@stop
