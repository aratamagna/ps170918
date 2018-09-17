<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Models\Comuna;

use DB;

class ComunasController extends BaseController {


    public function Mb_comuna()
    {
        $comunas=Comuna::all();
        $region = DB::table('regiones')->orderBy('id', 'asc')->pluck('reg_nom','id');
        return View::make('Administrador.mb_comuna')->with('comunas',$comunas)->with('region',$region);

    }



    public function Registrar_com()
    {
        //validamos reglas inputs
        $rules = array(

            'com_nom' => 'required|unique:comunas|max:30',
            'reg' => 'required',
            );

         $messages = array
        (
            'com_nom.required' => 'El campo comuna es requerido',
            'com_nom.unique' => 'La comuna ya se encuentra registrada',
            'com_nom.max' => 'El máximo permitido son 30 caracteres',
            'reg.required' => 'El campo nombre es requerido',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            //si todo esta bien guardamos
            $comuna = new Comuna;
            $comuna->com_nom = Input::get('com_nom');
            $comuna->region_id = Input::get('reg');
            //guardamos
            $comuna->save();

            return Redirect::to("mb_comuna")->with('status', 'ok_create');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error1');
        }
    }



    public function Eliminar_com($comuna_id)
    {
        //buscamos el usuario en la base de datos segun la id enviada
        $comuna = Comuna::find($comuna_id);
        //eliminamos y redirigimos
        $comuna->delete();
        return Redirect::to('mb_comuna')->with('status', 'ok_delete');//variable status con el valor de ok_delete
    }



    public function Capturar_com()
    {
        $comuna_id=Input::get('comuna');
        $comuna=Comuna::find($comuna_id);

        $data = array(
            'success'=>true,
            'id'=>$comuna->id,
            'comuna'=>$comuna->com_nom,
            'region'=>$comuna->region->reg_nom,
        );

        return Response::json($data);
    }

    public function Editar_com()
    {
        $rules = array(

          //  'com_nom_edit' => 'required|unique:comunas|max:30',
            'com_nom_edit' => 'required|max:30',
            //'reg_edit' => 'required|max:30',
            );

        $messages = array
        (
            'com_nom_edit.required' => 'El campo comuna es requerido',
           // 'com_nom.unique' => 'El rut ya se encuentra registrado',
            'com_nom_edit.max' => 'El máximo permitido son 30 caracteres',
        );

      $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
             //si todo esta bien guardamos
            $comuna_id = Input::get('comuna_id');
            $comuna = Comuna::find($comuna_id);
            $comuna->com_nom = Input::get('com_nom_edit');
            //guardamos
            $comuna->save();
            return Redirect::to('mb_comuna')->with('status', 'ok_update'); //pide contraseña

        }
        else
        {
        return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error2');
        }
    }


}
