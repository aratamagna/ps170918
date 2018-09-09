<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;

use App\Models\TipoUsuario;

use Auth;

class LoginController extends Controller
{

  public function __construct()
  {
    //  $this->middleware('guest')->except('logout');
    $this->middleware('guest',['only' => 'showLoginForm']);
  }

  public function showloginform()
  {
    return view('auth.login');
  }


  public function login()
  {
    //Log::info('Login '.date("Y-m-d H:i:s").request('name', $default = null));
    Log::info('Login '.date("Y-m-d H:i:s").' rut: '.request('email', $default = null));
    $credentials = $this->validate(request(), [
      //$this->username()=> 'required|string',
      //'email' => 'email|required|string',
      'email' => 'required|string',
      'password' => 'required|string'
    ]);

Log::info('Credentials',$credentials);

    if(Auth::attempt($credentials))
    {
      $tip_user=Auth::user()->tipousuario_id;
    //  Log::info('Tipo Usuario: ',$tip_user);
      switch($tip_user){
        case 3:
        {
          return redirect()->route('gestion_cliente');
          break;
        }
        case 2:
        {
          return redirect()->route('gestion_entrenador');
          break;
        }
        default:
        {
          return redirect()->route('administrador');
          break;
        }
      }
    } else {
      return redirect('')->with('login_errors', true);
    }
    return back()->withErrors([$this->username() => trans('auth.failed')])->withInput(request([$this->username()]));
  }

  public function logout()
  {
    Auth::logout();

    return redirect('/');
  }

  //para poder logearse con otro campo distinto del correo se crea nuevo método username

  public function username()
  {
    return 'name'; //TIENE QUE SER UNICO
  }


}
