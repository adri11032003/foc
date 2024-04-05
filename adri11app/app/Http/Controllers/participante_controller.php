<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\participante_model;

class participante_controller
{
    public function index(){
        $participante = participante_model::get();
        return $participante;
    }
}
