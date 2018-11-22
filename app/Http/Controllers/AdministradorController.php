<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Models\Sexo;
use App\Models\Comuna;
use App\Models\Persona;
use DB;
use Response;
use Validator;
use Redirect;
use Hash;

class AdministradorController extends BaseController {

    /*public function __construct() {
        $this->beforeFilter('auth');
    }*/
    public function Tabladinamica2()
    {
          return View::make('Administrador.tabladinamica2');
    }
    public function Formsinpas()
    {
          return View::make('Administrador.formsinpas');
    }

/*************************************************************************************/
    public function Administrador()
    {
        return View::make('Administrador.administrador');
    }



    public function Gestion_cliente()
    {
        //$users=User::all();
        $users=User::where('tipousuario_id','=','3')->get();
        $sexo = DB::table('sexos')->orderBy('id', 'asc')->pluck('sex_nombre','id');
        $region = DB::table('regiones')->orderBy('id', 'asc')->pluck('reg_nom','id');
        return View::make('Administrador.gestion_cliente')->with('users',$users)->with('sexo',$sexo)->with('region',$region);

    }

    public function Gestion_entrenador()
    {

        //$rut="17.676.404-K";
        //$id_persona = DB::table('personas')->where('per_rut','=', $rut)->pluck('id');
        // $users=User::all();
        $users=User::where('tipousuario_id','=','2')->get();
        $sexo = DB::table('sexos')->orderBy('id', 'asc')->pluck('sex_nombre','id')->all();
        //$sexo = $sexo->all();
        //  $sexo = DB::table('sexos')->orderBy('id', 'asc')->value('sex_nombre','id');
      //  $sexo = DB::table('sexos')->orderBy('id', 'asc')->get();
    //  $sexo=Sexo::all();
//Log::info('sexo=');
//Log::info('sexo= ',$users);

        $region = DB::table('regiones')->orderBy('id', 'asc')->pluck('reg_nom','id')->all();
        return View::make('Administrador.gestion_entrenador')->with('users',$users)->with('sexo',$sexo)->with('region',$region);
        //  return View::make('Administrador.gestion_entrenador')->with('users',$users)->with('sexo',$sexo)->with('region',$region)->with('id_persona',$id_persona);
    }



    // metodo para agregar al usuario
    public function Registrar_ent()
    {
        //validamos reglas inputs
        $rules = array(

            'email' => 'required|unique:users|between:11,12',
            'nombre' => 'required|max:25',
            'apellidop' => 'required|max:25',
            'apellidom' => 'required|max:25',
            'fec' => 'required',
            'genero' => 'required',
            'reg' => 'required',
            'com' => 'required',
            'direccion' => 'required|max:40',
            'ndomicilio' => 'required|max:8',
            'npiso' => 'max:8',
            'fono' => 'max:10',
            'celu' => 'max:10',
            'correo' => 'required|email|max:50',
            'usuario' => 'required|between:11,12',
            'password' => 'required|regex:/^[a-z0-9]+$/i|min:4|max:16',
            'repetir_password' => 'required|same:password',
            );

         $messages = array
        (
            //'user.regex' => 'Sólo se aceptan letras',
            //'user.min' => 'El mínimo permitido son 3 caracteres',
            'email.required' => 'El campo rut es requerido',
            'email.unique' => 'El rut ya se encuentra registrado',
            'email.between' => 'El rut debe contener entre 11 y 12 caracteres',
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.max' => 'El máximo permitido son 25 caracteres',
            'apellidop.required' => 'El campo apellido paterno es requerido',
            'apellidop.max' => 'El máximo permitido son 25 caracteres',
            'apellidom.required' => 'El campo apellido materno es requerido',
            'apellidom.max' => 'El máximo permitido son 25 caracteres',
            'fec.required' => 'El campo fecha es requerido',
            'genero.required' => 'El campo sexo es requerido',
            'reg.required' => 'El campo región es requerido',
            'com.required' => 'El campo comuna es requerido',
            'direccion.required' => 'El campo dirección es requerido',
            'direccion.max' => 'El máximo permitido son 40 caracteres',
            'ndomicilio.required' => 'El campo n° de domicilio es requerido',
            'ndomicilio.max' => 'El máximo permitido son 8 caracteres',
            'npiso.max' => 'El máximo permitido son 8 caracteres',
            'fono.max' => 'El máximo permitido son 4 caracteres',
            'celu.max' => 'El máximo permitido son 4 caracteres',
            'correo.required' => 'El campo correo es requerido',
            'correo.email' => 'El formato de email es incorrecto',
            'correo.max' => 'El máximo permitido son 50 caracteres',
            'usuario.required' => 'El campo usuario es requerido',
            'usuario.between' => 'El usuario debe contener entre 11 y 12 caracteres',
            'password.required' => 'El campo password es requerido',
            'password.regex' => 'El campo password sólo acepta letras y números',
            'password.min' => 'El mínimo permitido son 4 caracteres',
            'password.max' => 'El máximo permitido son 16 caracteres',
            'repetir_password.required' => 'El campo repetir password es requerido',
            'repetir_password.same' => 'Los passwords no coinciden',
          //  'terminos.required' => 'Tienes que aceptar los términos',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            $fono=Input::get('fono');
            $celu=Input::get('celu');

            if ($fono == 0){
            $fono =null;
            }
            if ($celu == 0){
            $celu = null;
            }

            //si todo esta bien guardamos
            $persona = new Persona;
            $persona->per_rut = Input::get('email');
            $persona->per_nombre = Input::get('nombre');
            $persona->per_apellidop = Input::get('apellidop');
            $persona->per_apellidom = Input::get('apellidom');
            $persona->per_nac = Input::get('fec');
            $persona->per_fono1 = $fono;
            $persona->per_fono2 = $celu;
            $persona->per_direccion = Input::get('direccion');
            $persona->per_numdirec = Input::get('ndomicilio');
            $persona->per_numpiso = Input::get('npiso');
            $persona->per_correo = Input::get('correo');
            $persona->sexo_id = Input::get('genero');
            //guardamos
            $persona->save();


            $rut=Input::get('email');
            $id_persona = DB::table('personas')->where('per_rut','=', $rut)->pluck('id')->first();

            $password = Input::get('password');
            $user = new User;
            $user->email = Input::get('usuario');
            $user->password = Hash::make($password);
            $user->comuna_id = Input::get('com');
            $user->tipousuario_id = 2;
            $user->persona_id = $id_persona;

            // guardamos
            $user->save();
            //redirigimos a usurios
            //return Redirect::route("gestion_entrenador");//devuelve rut
            //return Redirect::route('gestion_entrenador');//devuelve rut
            //return Redirect::to('gestion_entrenador')->with('status', 'ok_create');//devuelve rut
            //return Redirect::to("gestion_entrenador")->with('status', 'ok_create');//devuelve rut
              return Redirect::to("gestion_entrenador")->with('status', 'ok_create');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error1');
        }
    }

    public function Registrar_cli()
    {
        //validamos reglas inputs
        $rules = array(

            'email' => 'required|unique:users|between:11,12',
            'nombre' => 'required|max:25',
            'apellidop' => 'required|max:25',
            'apellidom' => 'required|max:25',
            'fec' => 'required',
            'genero' => 'required',
            'reg' => 'required',
            'com' => 'required',
            'direccion' => 'required|max:40',
            'ndomicilio' => 'required|max:8',
            'npiso' => 'max:8',
            'fono' => 'max:10',
            'celu' => 'max:10',
            'correo' => 'required|email|max:50',
            'usuario' => 'required|between:11,12',
            'password' => 'required|regex:/^[a-z0-9]+$/i|min:4|max:16',
            'repetir_password' => 'required|same:password',
            );

         $messages = array
        (
            'email.required' => 'El campo rut es requerido',
            'email.unique' => 'El rut ya se encuentra registrado',
            'email.between' => 'El rut debe contener entre 11 y 12 caracteres',
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.max' => 'El máximo permitido son 25 caracteres',
            'apellidop.required' => 'El campo apellido paterno es requerido',
            'apellidop.max' => 'El máximo permitido son 25 caracteres',
            'apellidom.required' => 'El campo apellido materno es requerido',
            'apellidom.max' => 'El máximo permitido son 25 caracteres',
            'fec.required' => 'El campo fecha es requerido',
            'genero.required' => 'El campo sexo es requerido',
            'reg.required' => 'El campo región es requerido',
            'com.required' => 'El campo comuna es requerido',
            'direccion.required' => 'El campo dirección es requerido',
            'direccion.max' => 'El máximo permitido son 40 caracteres',
            'ndomicilio.required' => 'El campo n° de domicilio es requerido',
            'ndomicilio.max' => 'El máximo permitido son 8 caracteres',
            'npiso.max' => 'El máximo permitido son 8 caracteres',
            'fono.max' => 'El máximo permitido son 4 caracteres',
            'celu.max' => 'El máximo permitido son 4 caracteres',
            'correo.required' => 'El campo correo es requerido',
            'correo.email' => 'El formato de email es incorrecto',
            'correo.max' => 'El máximo permitido son 50 caracteres',
            'usuario.required' => 'El campo usuario es requerido',
            'usuario.between' => 'El usuario debe contener entre 11 y 12 caracteres',
            'password.required' => 'El campo password es requerido',
            'password.regex' => 'El campo password sólo acepta letras y números',
            'password.min' => 'El mínimo permitido son 4 caracteres',
            'password.max' => 'El máximo permitido son 16 caracteres',
            'repetir_password.required' => 'El campo repetir password es requerido',
            'repetir_password.same' => 'Los passwords no coinciden',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            $fono=Input::get('fono');
            $celu=Input::get('celu');

            if ($fono == 0){
            $fono =null;
            }
            if ($celu == 0){
            $celu = null;
            }

            //si todo esta bien guardamos
            $persona = new Persona;
            $persona->per_rut = Input::get('email');
            $persona->per_nombre = Input::get('nombre');
            $persona->per_apellidop = Input::get('apellidop');
            $persona->per_apellidom = Input::get('apellidom');
            $persona->per_nac = Input::get('fec');
            $persona->per_fono1 = $fono;
            $persona->per_fono2 = $celu;
            $persona->per_direccion = Input::get('direccion');
            $persona->per_numdirec = Input::get('ndomicilio');
            $persona->per_numpiso = Input::get('npiso');
            $persona->per_correo = Input::get('correo');
            $persona->sexo_id = Input::get('genero');
            //guardamos
            $persona->save();


            $rut=Input::get('email');
            $id_persona = DB::table('personas')->where('per_rut','=', $rut)->pluck('id');

            $password = Input::get('password');
            $user = new User;
            $user->email = Input::get('usuario');
            $user->password = Hash::make($password);
            $user->comuna_id = Input::get('com');
            $user->tipousuario_id = 3;
            $user->persona_id = $id_persona;

            // guardamos
            $user->save();
            //redirigimos a usurios

              return Redirect::to("gestion_cliente")->with('status', 'ok_create');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error1');
        }
    }



    public function Eliminar_ent($user_id)
    {
        //buscamos el usuario en la base de datos segun la id enviada
        $persona = Persona::find($user_id);
        //eliminamos y redirigimos
        $persona->delete();
        return Redirect::to('gestion_entrenador')->with('status', 'ok_delete');//variable status con el valor de ok_delete
    }

    public function Eliminar_cli($user_id)
    {
        //buscamos el usuario en la base de datos segun la id enviada
        $persona = Persona::find($user_id);
        //eliminamos y redirigimos
        $persona->delete();
        return Redirect::to('gestion_cliente')->with('status', 'ok_delete');//variable status con el valor de ok_delete
    }



    //método que se utiliza en clientes y entrenadores
    public function Ajaxsubcat($id)
    {
  //    Log::info('ajax pruebaaaa',$id);
    //    $comunas=Comuna::where('region_id','=',$id)->orderBy('com_nom', 'asc')->get()->all();
        $comunas=Comuna::where('region_id','=',$id)->orderBy('com_nom', 'asc')->get();
        return Response::json($comunas);
    }
    public function Data()
    {
      Log::info('Inicio Data');
        $user_id=Input::get('user');
        Log::info('user_id=',$user_id);

        $user=User::find($user_id);


        $data = array(
            'success'=>true,
            'id'=>$user->id,
            'email'=>$user->persona->per_rut,
            'activo'=>$user->active,
            'nombre'=>$user->persona->per_nombre,
            'apellidop'=>$user->persona->per_apellidop,
            'apellidom'=>$user->persona->per_apellidom,
            'fec'=>$user->persona->per_nac,
            'genero_id'=>$user->persona->sexo->id,
            'genero'=>$user->persona->sexo->sex_nombre,
            'reg_id'=>$user->comuna->region->id,
            'reg'=>$user->comuna->region->reg_nom,
            'com_id'=>$user->comuna->id,
            'com'=>$user->comuna->com_nom,
            'direccion'=>$user->persona->per_direccion,
            'ndomicilio'=> $user->persona->per_numdirec,
            'npiso'=>$user->persona->per_numpiso,
            'fono'=>$user->persona->per_fono1,
            'celu'=>$user->persona->per_fono2,
            'correo'=>$user->persona->per_correo,
            'usuario'=>$user->email,
            'password'=>$user->password,
            'repetir_password'=>$user->password

        );

        return Response::json($data);
    }


    public function Editar_ent()
    {
        //validamos reglas inputs
        $rules = array(

            //'email_edit' => 'required|unique:users|between:11,12',
            'nombre_edit' => 'required|max:25',
            'activo_edit' => 'required',
            'apellidop_edit' => 'required|max:25',
            'apellidom_edit' => 'required|max:25',
            'fec_edit' => 'required',
            'genero_edit' => 'required',
            'reg_edit' => 'required',
            'com_edit' => 'required',
            'direccion_edit' => 'required|max:40',
            'ndomicilio_edit' => 'required|max:8',
            'npiso_edit' => 'max:8',
            'fono_edit' => 'max:10',
            'celu_edit' => 'max:10',
            'correo_edit' => 'required|email|max:50',
            'usuario_edit' => 'required|between:11,12',
            //'password_edit' => 'required|regex:/^[a-z0-9]+$/i|min:4|max:16',
            //'repetir_password_edit' => 'required|same:password',
        );

        $messages = array(

            /*'email_edit.required' => 'El campo rut es requerido',
            'email_edit.unique' => 'El rut ya se encuentra registrado',
            'email_edit.between' => 'El rut debe contener entre 11 y 12 caracteres',*/
            'activo_edit.required' => 'El campo activo es requerido',
            'nombre_edit.required' => 'El campo nombre es requerido',
            'nombre_edit.max' => 'El máximo permitido son 25 caracteres',
            'apellidop_edit.required' => 'El campo apellido paterno es requerido',
            'apellidop_edit.max' => 'El máximo permitido son 25 caracteres',
            'apellidom_edit.required' => 'El campo apellido materno es requerido',
            'apellidom_edit.max' => 'El máximo permitido son 25 caracteres',
            'fec_edit.required' => 'El campo fecha es requerido',
            'genero_edit.required' => 'El campo sexo es requerido',
            'reg_edit.required' => 'El campo región es requerido',
            'com_edit.required' => 'El campo comuna es requerido',
            'direccion_edit.required' => 'El campo dirección es requerido',
            'direccion_edit.max' => 'El máximo permitido son 40 caracteres',
            'ndomicilio.required' => 'El campo n° de domicilio es requerido',
            'ndomicilio_edit.max' => 'El máximo permitido son 8 caracteres',
            'npiso_edit.max' => 'El máximo permitido son 8 caracteres',
            'fono_edit.max' => 'El máximo permitido son 4 caracteres',
            'celu_edit.max' => 'El máximo permitido son 4 caracteres',
            'correo_edit.required' => 'El campo correo es requerido',
            'correo_edit.email' => 'El formato de email es incorrecto',
            'correo_edit.max' => 'El máximo permitido son 50 caracteres',
            'usuario_edit.required' => 'El campo usuario es requerido',
            'usuario_edit.between' => 'El usuario debe contener entre 11 y 12 caracteres',
            /*'password_edit.required' => 'El campo password es requerido',
            'password_edit.regex' => 'El campo password sólo acepta letras y números',
            'password_edit.min' => 'El mínimo permitido son 4 caracteres',
            'password_edit.max' => 'El máximo permitido son 16 caracteres',
            'repetir_password_edit.required' => 'El campo repetir password es requerido',
            'repetir_password_edit.same' => 'Los passwords no coinciden',*/
            //'terminos.required' => 'Tienes que aceptar los términos',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            $fono=Input::get('fono_edit');
            $celu=Input::get('celu_edit');

            if ($fono == 0){
            $fono =null;
            }
            if ($celu == 0){
            $celu = null;
            }

            //si todo esta bien guardamos
            //$persona = new Persona;
            $persona_id = Input::get('user_id');
            //buscamos el usuario en la base de datos segun la id enviada
            $persona = Persona::find($persona_id);

            //$persona->per_rut = Input::get('email_edit');

            $persona->per_nombre = Input::get('nombre_edit');
            $persona->per_apellidop = Input::get('apellidop_edit');
            $persona->per_apellidom = Input::get('apellidom_edit');
            $persona->per_nac = Input::get('fec_edit');
            $persona->per_fono1 = $fono;
            $persona->per_fono2 = $celu;
            $persona->per_direccion = Input::get('direccion_edit');
            $persona->per_numdirec = Input::get('ndomicilio_edit');
            $persona->per_numpiso = Input::get('npiso_edit');
            $persona->per_correo = Input::get('correo_edit');
            $persona->sexo_id = Input::get('genero_edit');
            //guardamos
            $persona->save();


            //$rut=Input::get('email_edit');
            //$id_persona = DB::table('personas')->where('per_rut','=', $rut)->pluck('id');

            //$password = Input::get('password_edit');
            // $user = new User;
            $user_id = Input::get('user_id');
            //buscamos el usuario en la base de datos segun la id enviada
            $user = User::find($user_id);
            $user->email = Input::get('usuario_edit');
            $user->active = Input::get('activo_edit');
            //$user->password = Hash::make($password);
            $user->comuna_id = Input::get('com_edit');
            //$user->tipousuario_id = 2;
            //$user->persona_id = $id_persona;

            // guardamos
            $user->save();
            //redirigimos a usurios

            return Redirect::to('gestion_entrenador')->with('status', 'ok_update'); //pide contraseña
            //  return View::make('Administrador.gestion_entrenador')->with('status', 'ok_update');

            }
            else
            {
            //return Redirect::back()->withInput()->withErrors($validator);
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error2');
            //return Redirect::to('gestion_entrenador')->with('status', 'error2');
            }
    }

    public function Editar_cli()
    {
        //validamos reglas inputs
        $rules = array(

            'activo_edit' => 'required',
            'nombre_edit' => 'required|max:25',
            'apellidop_edit' => 'required|max:25',
            'apellidom_edit' => 'required|max:25',
            'fec_edit' => 'required',
            'genero_edit' => 'required',
            'reg_edit' => 'required',
            'com_edit' => 'required',
            'direccion_edit' => 'required|max:40',
            'ndomicilio_edit' => 'required|max:8',
            'npiso_edit' => 'max:8',
            'fono_edit' => 'max:10',
            'celu_edit' => 'max:10',
            'correo_edit' => 'required|email|max:50',
            'usuario_edit' => 'required|between:11,12',
        );

        $messages = array(

            'activo_edit.required' => 'El campo activo es requerido',
            'nombre_edit.required' => 'El campo nombre es requerido',
            'nombre_edit.max' => 'El máximo permitido son 25 caracteres',
            'apellidop_edit.required' => 'El campo apellido paterno es requerido',
            'apellidop_edit.max' => 'El máximo permitido son 25 caracteres',
            'apellidom_edit.required' => 'El campo apellido materno es requerido',
            'apellidom_edit.max' => 'El máximo permitido son 25 caracteres',
            'fec_edit.required' => 'El campo fecha es requerido',
            'genero_edit.required' => 'El campo sexo es requerido',
            'reg_edit.required' => 'El campo región es requerido',
            'com_edit.required' => 'El campo comuna es requerido',
            'direccion_edit.required' => 'El campo dirección es requerido',
            'direccion_edit.max' => 'El máximo permitido son 40 caracteres',
            'ndomicilio.required' => 'El campo n° de domicilio es requerido',
            'ndomicilio_edit.max' => 'El máximo permitido son 8 caracteres',
            'npiso_edit.max' => 'El máximo permitido son 8 caracteres',
            'fono_edit.max' => 'El máximo permitido son 4 caracteres',
            'celu_edit.max' => 'El máximo permitido son 4 caracteres',
            'correo_edit.required' => 'El campo correo es requerido',
            'correo_edit.email' => 'El formato de email es incorrecto',
            'correo_edit.max' => 'El máximo permitido son 50 caracteres',
            'usuario_edit.required' => 'El campo usuario es requerido',
            'usuario_edit.between' => 'El usuario debe contener entre 11 y 12 caracteres',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            $fono=Input::get('fono_edit');
            $celu=Input::get('celu_edit');

            if ($fono == 0){
            $fono =null;
            }
            if ($celu == 0){
            $celu = null;
            }

            //si todo esta bien guardamos
            $persona_id = Input::get('user_id');
            //buscamos el usuario en la base de datos segun la id enviada
            $persona = Persona::find($persona_id);

            $persona->per_nombre = Input::get('nombre_edit');
            $persona->per_apellidop = Input::get('apellidop_edit');
            $persona->per_apellidom = Input::get('apellidom_edit');
            $persona->per_nac = Input::get('fec_edit');
            $persona->per_fono1 = $fono;
            $persona->per_fono2 = $celu;
            $persona->per_direccion = Input::get('direccion_edit');
            $persona->per_numdirec = Input::get('ndomicilio_edit');
            $persona->per_numpiso = Input::get('npiso_edit');
            $persona->per_correo = Input::get('correo_edit');
            $persona->sexo_id = Input::get('genero_edit');
            //guardamos
            $persona->save();


            $user_id = Input::get('user_id');
            //buscamos el usuario en la base de datos segun la id enviada
            $user = User::find($user_id);
           // $user->email = Input::get('usuario_edit');
            $user->active = Input::get('activo_edit');
            $user->comuna_id = Input::get('com_edit');

            // guardamos
            $user->save();

            return Redirect::to('gestion_cliente')->with('status', 'ok_update'); //pide contraseña

            }
            else
            {
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error2');
            }
    }

    public function Mbasico_administrador()
    {
        return View::make('Administrador.mbasico_administrador');
    }

    public function Reportes()
    {
        return View::make('Administrador.reportes');
    }

    public function Cant_personas()
    {
        date_default_timezone_set("America/Santiago");
        $fecha=date('Y-m-d');
        $hora=date('H:i:s');
        $cant_users = DB::table('users')->count();
        $cant_users_ent_act = DB::table('users')->where('tipousuario_id','=',2)->where('active','=',1)->count();
        $cant_users_cli_act = DB::table('users')->where('tipousuario_id','=',3)->where('active','=',1)->count();
        $cant_users_adm_act = DB::table('users')->where('tipousuario_id','=',1)->where('active','=',1)->count();
        $cant_users_ent_des = DB::table('users')->where('tipousuario_id','=',2)->where('active','=',0)->count();
        $cant_users_cli_des = DB::table('users')->where('tipousuario_id','=',3)->where('active','=',0)->count();
        $cant_users_adm_des = DB::table('users')->where('tipousuario_id','=',1)->where('active','=',0)->count();
        $cant_users_ent = DB::table('users')->where('tipousuario_id','=',2)->count();
        $cant_users_cli = DB::table('users')->where('tipousuario_id','=',3)->count();
        $cant_users_adm = DB::table('users')->where('tipousuario_id','=',1)->count();
        return View::make('Administrador.cant_personas')->with('fecha',$fecha)->with('hora',$hora)->with('cant_users',$cant_users)->with('cant_users_ent_act',$cant_users_ent_act)
        ->with('cant_users_cli_act',$cant_users_cli_act)->with('cant_users_adm_act',$cant_users_adm_act)->with('cant_users_ent_des',$cant_users_ent_des)
        ->with('cant_users_cli_des',$cant_users_cli_des)->with('cant_users_adm_des',$cant_users_adm_des)->with('cant_users_ent',$cant_users_ent)
        ->with('cant_users_cli',$cant_users_cli)->with('cant_users_adm',$cant_users_adm);
    }

    public function Cant_clientes_ent()
    {
        date_default_timezone_set("America/Santiago");
        $fecha=date('Y-m-d');
        $hora=date('H:i:s');
        $cant_users = DB::table('users')->count();
        $cant_users_ent1 = DB::table('evaluacionbasicas')->where('user_id','=',22)->distinct('persona_id')->count('persona_id');
        $cant_users_ent2 = DB::table('evaluacionbasicas')->where('user_id','=',23)->distinct('persona_id')->count('persona_id');
        $cant_users_ent3 = DB::table('evaluacionbasicas')->where('user_id','=',24)->distinct('persona_id')->count('persona_id');
        $cant_users_ent4 = DB::table('evaluacionbasicas')->where('user_id','=',40)->distinct('persona_id')->count('persona_id');
        $cant_users_ent5 = DB::table('evaluacionbasicas')->where('user_id','=',44)->distinct('persona_id')->count('persona_id');
        $cant_users_ent6 = DB::table('evaluacionbasicas')->where('user_id','=',45)->distinct('persona_id')->count('persona_id');
        $users1=Persona::where('id','=',22)->get();
        $users2=Persona::where('id','=',23)->get();
        $users3=Persona::where('id','=',24)->get();
        $users4=Persona::where('id','=',40)->get();
        $users5=Persona::where('id','=',44)->get();
        $users6=Persona::where('id','=',45)->get();
        return View::make('Administrador.cant_clientes_ent')->with('fecha',$fecha)->with('hora',$hora)->with('cant_users',$cant_users)->with('cant_users_ent1',$cant_users_ent1)
        ->with('cant_users_ent2',$cant_users_ent2)->with('cant_users_ent3',$cant_users_ent3)->with('cant_users_ent4',$cant_users_ent4)->with('cant_users_ent5',$cant_users_ent5)
        ->with('cant_users_ent6',$cant_users_ent6)->with('users1',$users1)->with('users2',$users2)->with('users3',$users3)->with('users4',$users4)->with('users5',$users5)->with('users6',$users6);
    }





}
