<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
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
    
    protected $fillable = ['nombre_producto',
                        'denominacion',
                        'categoria',
                        'inox',
                        'imagen',
                        'imagen_matriz',
                        'material',
                        'acabado',
                        'rosca',
                        'resistencia',
                        'tratamiento',
                        'sae',
                        'zb',
                        'zam',
                    ];
}
