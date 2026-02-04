<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Empresa;
use Illuminate\Support\Facades\app;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    public function empresa(){
        $datos["nombre"]="Jordan Pinto Chuc";
        $datos["fecha"]="2026-02-03";
        $datos["actividad"]="Desarrollo de Software";
        $datos["descripcion_about"]="Empresa dedidacada al desarrollo de software a la medida de sus clientes";
        $datos["texto_ejemplo"]="Aquí va la descripción del texto de ejemplo";

        $usuarios=new Pagina();
        $datis["listadousuarios"]=$usuarios->ObtenerListado();
        return view('empresa', $datos);
        }
}

//mesaje de comitt se agrega la vista empresa y se agrega un metodo a home controller