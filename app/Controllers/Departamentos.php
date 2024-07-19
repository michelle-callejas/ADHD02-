<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\DepartamentosModel; 

class Departamentos extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $departamento=new DepartamentosModel();
        $datos ['datos']=$departamento-> findAll();
        
        //findAll()= select * from regiones
        return view('departamentos', $datos);
    }
}
