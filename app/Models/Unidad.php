<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, softDeletes};
use App\Models\Municipio;

class Unidad extends Model
{
    use HasFactory, softDeletes;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'unidades';

    protected $primaryKey = 'unidad_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'telefono',
        'municipio_id',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }
}
