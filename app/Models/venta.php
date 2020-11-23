<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $table = 'venta';
    protected $fillable = ['total', 'status', 'user_id'];

     public function getJuegos()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Juegos','juegos_id','id');
    }

     public function getVenta()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Venta','venta_id','id');
    }

}
