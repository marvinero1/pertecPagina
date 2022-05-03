<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\Hashidable;
class Vendedor extends Model
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
    
    protected $fillable = ['nombre_vendedor',
                        'apellido',
                        'celular',
                        'whatsapp',
                        'ciudad',
                        'correo_electronico',
                        'imagen',
                    ];
}
