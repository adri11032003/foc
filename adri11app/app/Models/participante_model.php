<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participante_model extends Model
{
    use HasFactory;
    protected $table='participante';
    protected $primaryKey='id';
    protected $timestamp=false; 
}
