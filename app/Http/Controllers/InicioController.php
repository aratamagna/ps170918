<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use Auth;

class InicioController extends BaseController {

    public function Index()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.index');  //Nombre de la carpeta Inicio, retorna vista index
    }

    public function Contacto()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.contacto'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Quienessomos()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.quienes-somos'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Servicios()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.servicios'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Nutricion()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.nutricion'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Profesores()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.profesores'); //Nombre de la carpeta homecontroller, retorna vista index
    }
    public function Timetable()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.timetable'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Clases()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.clases'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Sportlife()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.sportlife'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function Horarios()  //Acción index conectada con la vista index.
    {
        return View::make('Inicio.horarios'); //Nombre de la carpeta homecontroller, retorna vista index
    }

    public function register()
    {
        return View::make('Inicio.register'); //nombre de la carpeta homecontroller
    }

    public function RegistrarCliente()
    {
           $rules = array
            (
            //'user' => 'required|regex:/^[a-záéóóúàèìòùäëïöüñ\s]+$/i|min:3|max:50',
            'email' => 'required|unique:users|between:11,12',
            'password' => 'required|regex:/^[a-z0-9]+$/i|min:4|max:16',
            'repetir_password' => 'required|same:password',
            //'terminos' => 'required',
            );

            $messages = array
            (
              //  'user.required' => 'El campo nombre es requerido',
              //  'user.regex' => 'Sólo se aceptan letras',
              //  'user.min' => 'El mínimo permitido son 3 caracteres',
              //  'user.max' => 'El máximo permitido son 50 caracteres',
                'email.required' => 'El campo rut es requerido',

             //   'email.email' => 'El formato de email es incorrecto',
                'email.unique' => 'El usuario ya se encuentra registrado',
                'email.between' => 'El usuario debe contener entre 11 y 12 caracteres',
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
                //Guardar los datos en la tabla users

                $rut = input::get('email');
                $password = Hash::make(input::get('password'));//modelo Hast y método make para incriptar password

                $conn = DB::connection('mysql');
        //funcionaba anttes
        // $sql = "INSERT INTO users(email, password,active,usu_com_id,usu_tpu_cod) VALUES (?, ?,?, ?,?)";
          //      $conn->insert($sql, array($rut,$password,'1','16301','CLI'));

                 $sql = "INSERT INTO users(email,password,comuna_id,tipousuario_id,persona_id) VALUES (?,?,?,?,?)";
                $conn->insert($sql, array($rut,$password,154,1,2));

                // Crear cookies para luego verificar el link de registro
                // String alfanumérico de 32 caracteres de longitud
                        //$key = Str::random(32);
                        //Cookie::queue('key', $key, 60*24); //estara disponible durante 24 horas
                // Almacenar el email
                        //Cookie::queue('email', $email, 60*24);//para almacenar el mail

                // Crear la url de confirmación para el mensaje del email
                        //$msg = "<a href='".URL::to("/confirmregister/$email/$key")."'>Confirmar cuenta</a>";

                //Enviar email para confirmar el registro
          /*      $data = array(
                    'user' => $user,
                    'msg' => $msg,
                  );

                $fromEmail = 'mdgproduccionesweb@gmail.com';
                $fromName = 'Administrador';

                 Mail::send('emails.register', $data, function($message) use ($fromName, $fromEmail, $user, $email)//enviamos el mail
                 {
                    $message->to($email, $user);
                    $message->from($fromEmail, $fromName);
                    $message->subject('Confirmar registro en Laravel');
                 });
       */
                 $message = '<hr><label class="label label-info">'.$rut.' le hemos enviado un email a su cuenta de correo electrónico para que confirme su registro</label><hr>';

                    return Redirect::route('register')->with("message", $message);
                }
                else
                {
                 return Redirect::back()->withInput()->withErrors($validator);
                //  return Redirect::back()->with_input()->with_errors($validation);
                }


    }



    public function indexgmail()  //Acción index conectada con la vista index.
    {
      //  $conn=DB::connection("oracle");

       //  $sql="Insert into REGION (REG_COD,REG_NOM)VALUES(?,?)";
        // $conn->insert($sql,array('III','LA SERENA'));
        return View::make('HomeController.indexgmail'); //Nombre de la carpeta homecontroller, retorna vista index
    }



      public function indeori()  //Acción index conectada con la vista index.
    {
//     $results = DB::select('select * from comuna where id = ?', array(1));
    //     $conn=DB::connection("mysql");
     //    $sql="Insert into REGION (REG_COD,REG_NOM) VALUES(?,?)";
     //    $conn->insert($sql,array('III','LA SERENA'));
        return View::make('HomeController.indeori'); //Nombre de la carpeta homecontroller, retorna vista index
    }



     public function base()
    {
        return View::make('Inicio.base'); //nombre de la carpeta homecontroller
    }
     public function salir()
    {
      //   Session::forget('cliente_id');
      //   Session::forget('fechaa');
      //   Auth::user()->logout();  //Permite eliminar la sesión

       \Auth::logout();
        //   return Redirect::to('/');  //redericcionamos
           //  return View::make('HomeController.index');
          // return Redirect::to('');  //redericcionamos
            return redirect('');
    }

}
