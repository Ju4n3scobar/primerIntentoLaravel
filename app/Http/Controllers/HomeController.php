<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // O, si el controlador solo contendra un metodo. A ese metodo se le asigna el nombre de "__invoke"
    // ...(seguir leyendo en la clase web.php)
        public function bienvenido()
            {
                return 'Bienvenido usuario';
            }
    // Para pasar variables por medio de las rutas (metodo get)
        public function pasarVariable($nombre)
        {
            //En caso de tener los mismos nombre tanto en la url, como la quiero llamar en la vista se escribe de la siguiente manera compact('nombreDeLaVariable')
            return view('bienvenido', [ /* Nombre que le voy a dar en la vista */'nombre' => /* Variable que viene de la URL */$nombre]);
        }
        
}
