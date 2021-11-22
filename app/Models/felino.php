<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class felino extends Model
{
    protected $fillable = ['especie','clase','orden','familia','genero','longevidad','longitud','peso','informacion','url'];
    public function getRouteKeyName()
    {
        return 'especie';
    }
    
}
