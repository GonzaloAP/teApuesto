<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $table='prueba';
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable = [
        'ci', 'nombre',
    ];

    public function scope_store(){
         Prueba::create([
            'ci' => '123',
            'nombre' => 'gonzalo',            
        ]);
        return "s";
    }
}
