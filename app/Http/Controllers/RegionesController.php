<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Models\Region;

class RegionesController extends BaseController {


    public function Mb_region()
    {
        $regiones=Region::all();
        //$users=User::where('tipousuario_id','=','3')->get();
        //$sexo = DB::table('sexos')->orderBy('id', 'asc')->lists('sex_nombre','id');
        //$region = DB::table('regiones')->orderBy('id', 'asc')->lists('reg_nom','id');
        return View::make('Administrador.mb_region')->with('regiones',$regiones);

    }



    public function Registrar_reg()
    {
        //validamos reglas inputs
        $rules = array(

            'reg_cod' => 'required|unique:regiones|max:4',
            'nombre' => 'required|max:30',
            );

         $messages = array
        (
            'reg_cod.required' => 'El campo codigo es requerido',
            'reg_cod.unique' => 'El codigo ya se encuentra registrado',
            'reg_cod.max' => 'El máximo permitido son 4 caracteres',
            //'codigo.regex' => 'Sólo se aceptan letras',
            'nombre.required' => 'El campo nombre es requerido',
            'nombre.max' => 'El máximo permitido son 30 caracteres',
        );

        $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
            //si todo esta bien guardamos
            $region = new Region;
            $region->reg_cod = Input::get('reg_cod');
            $region->reg_nom = Input::get('nombre');
            //guardamos
            $region->save();

            return Redirect::to("mb_region")->with('status', 'ok_create');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error1');
        }
    }



    public function Eliminar_reg($user_id)
    {
        //buscamos el usuario en la base de datos segun la id enviada
        $region = Region::find($user_id);
        //eliminamos y redirigimos
        $region->delete();
        return Redirect::to('mb_region')->with('status', 'ok_delete');//variable status con el valor de ok_delete
    }



    public function Capturar_reg()
    {
        $region_id=Input::get('region');
        $region=Region::find($region_id);

        $data = array(
            'success'=>true,
            'id'=>$region->id,
            'codigo'=>$region->reg_cod,
            'nombre'=>$region->reg_nom,
        );

        return Response::json($data);
    }

    public function Editar_reg()
    {
        $rules = array(

           // 'reg_cod' => 'required|unique:regiones|max:4',
            'nombre_edit' => 'required|max:30',
            );

        $messages = array
        (
            'nombre_edit.required' => 'El campo nombre es requerido',
            'nombre_edit.max' => 'El máximo permitido son 30 caracteres',
        );

      $validator = Validator::make(Input::All(), $rules, $messages);

        if ($validator->passes())  //si la validacion es correcta registraremos al usuario y le enviaremos un mail para confirmar
        {
             //si todo esta bien guardamos
            $region_id = Input::get('region_id');
            $region = Region::find($region_id);
            $region->reg_nom = Input::get('nombre_edit');
            //guardamos
            $region->save();
            return Redirect::to('mb_region')->with('status', 'ok_update'); //pide contraseña

        }
        else
        {
        return Redirect::back()->withInput()->withErrors($validator)->with('status', 'error2');
        }
    }


}
