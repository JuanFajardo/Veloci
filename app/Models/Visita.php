<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;
    protected $table = 'visitas';
    protected $fillable = ['id', 'ip', 'url', 'titulo', 'agente' ];

    public static function insertarVisita($ip, $url, $titulo, $agente) {
        self::create([
            'ip' => $ip,
            'url' => $url,
            'titulo' => $titulo,
            'agente' => $agente,
        ]);
    }
}
