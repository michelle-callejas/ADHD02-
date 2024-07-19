<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\NivelesAcademicosModel; 

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo MunicipiosModel
        $nivel=new NivelesAcademicosModel();
        $datos ['datos']=$nivel-> findAll();
        
        //findAll()= select * from regiones
        return view('nivelesacademicos', $datos);
    }
}
