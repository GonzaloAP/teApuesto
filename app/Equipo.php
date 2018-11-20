<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table='equipo';
    
    protected $primaryKey="id";
    
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'foto', 'estado',
    ];

    public function scope_guardarEquipo($query,$datos){
        
        $data = explode(",", $datos); 
        
        $equipo = [
            'nombre' => $data[0],
            'foto' => $data[1],
            'estado' => '1',
            ];
        
        Equipo::create([
            'nombre' => $equipo['nombre'],
            'foto' => $equipo['foto'],
            'estado' => $equipo['estado'],
        ]);
        return "Correcto guardar equipo";
      
   }

    public function scope_listarEquipo($query,$id){
        
        $equipo =
               $query ->select('*')
               ->Where('id','=', $id)
               ->get()
               ->first();            
        return $equipo;       
   }

   public function scope_listarEquipos($query){
        
    $equipo =
           $query ->select('*')
           ->get();            
    return $equipo;       
    }
}
