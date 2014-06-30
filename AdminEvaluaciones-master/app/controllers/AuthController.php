<?php

class AuthController extends BaseController {
 
    /**
     * Attempt user login
     */
    public function doLogin()
    {  //obtenemos el rut
        $rut = Input::get('rut');
        // Obtenemos la contraseña enviada
        $contrasena = Input::get('contrasena');
        //compruebo que el rut, es numerico
        if ( is_numeric($rut) )
        {
            //si los datos son correctos y existe un usuario con los mismos se inicia sesión
            // Realizamos la autenticación
                 if (Auth::attempt(['rut'=> $rut, 'contrasena'=> $contrasena]))
                 {            // login éxito!
                     if ( Input::get('rol') == 'academico')
                         return Redirect::to('academicos');
                     else{
                         return Redirect::to('alumnos');
                     }
                 }
                else{
                // La autenticación ha fallado re-direccionamos
                // con un mensaje de error
                return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
            }
        }
        else{
        return Redirect::back()->with('msg', 'El rut ingresado no es valido');
        }
    }
 
    public function doLogout(){

    Auth::logout();

    return Redirect::to('/')->with('msg', 'Has cerrado tu sesión.');
    }
 
}