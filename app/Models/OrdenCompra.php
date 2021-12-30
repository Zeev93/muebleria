<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio',
        'fecha_compra',
        'fecha_entrega',
        'user_id',
    ];

    public function detalle(){
        return $this->hasMany(DetalleCompra::class);
    }
}
