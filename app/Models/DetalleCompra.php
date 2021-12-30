<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentarios',
        'orden_compra_id',
        'producto_id',
        'cantidad',
        'total',
    ];


    public function orden(){
        return $this->belongsTo(OrdenCompra::class, 'orden_compra_id');
    }
}
