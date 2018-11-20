<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table='partido';
    
    protected $primaryKey="id";
    
    public $timestamps = false;

    protected $fillable = [
        'descripcion', 'fecha_hora', 'lugar', 'score_local', 'score_visitante', 'id_local', 'id_visitante', 'estado',
    ];

    public function scope_guardarPartido($query,$datos){
        
        $data = explode(",", $datos); 
        
        $partido = [
            'descripcion' => $data[0],
            'fecha_hora' => $data[1],
            'lugar' => $data[2],
            'score_local' => 0,
            'score_visitante' => 0,
            'id_local' => $data[3],
            'id_visitante' => $data[4],
            'estado' => '1',
            ];
        
        Partido::create([
            'descripcion' => $partido['descripcion'],
            'fecha_hora' => $partido['fecha_hora'],
            'lugar' => $partido['lugar'],
            'score_local' => $partido['score_visitante'],
            'score_visitante' => $partido['score_local'],
            'id_local' => $partido['id_local'],
            'id_visitante' => $partido['id_visitante'],
            'estado' => $partido['estado'],
        ]);
        return "Correcto guardar partido";
      
   }

   public function scope_listarPartido($query,$id){
        
    $partido =
           $query ->select('*')
           ->Where('id','=', $id)
           ->get()
           ->first();            
    return $partido;       
    }

    public function scope_listarPartidos($query){
        
        $partidos =
        $query ->select('*')->get();          
        return $partidos;       
    }
}
