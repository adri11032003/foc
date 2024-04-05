<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso_model extends Model
{
    use HasFactory;
    protected $table='curso';
    protected $primaryKey='id';
    protected $timestamp=false; 
}
