<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;

    protected $table = 'juegos';

    protected $fillable = ['nombre', 'descripcion', 'precio', 'status', 'stock', 'genero_id', 'imgNombreVirtual', 'imgNombreFisico'];

    public function getGenero()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Genero','genero_id','id');
    }
}