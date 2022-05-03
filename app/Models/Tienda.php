<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\Hashidable;

class Tienda extends Model
{
    use HasFactory, Hashidable;
    protected $auditTimestamps = true;
    protected $auditStrict = true;
    protected $auditThreshold = 100;

    protected $auditEvents = [
        'created',
        'saved',
        'deleted',
        'restored',
        'updated'
    ];
    
    protected $fillable = ['nombre_tienda',
                        'telefono',
                        'celular',
                        'whatsapp',
                        'latitud',
                        'longitud',
                        'direccion',
                        'ciudad',
                        'correo_electronico',
                        'encargado',
                        'imagen',
                    ];
}
