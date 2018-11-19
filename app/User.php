<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='usuario';
    protected $primaryKey="id";
    
    protected $fillable = [
        'ci', 'nombre', 'apellido', 'correo', 'alias', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scope_guardarUsuario($query,$datos){
        
        //   $encrypted = 'eyJpdiI6ImZqZGJVUUpwMWoxbVNNZGF0Nkl0ZXc9PSIsInZhbHVlIjoibnhtdmh6MnVNaGdRNzV3Sm5LVW9IZz09IiwibWFjIjoiZTRjOGQ5MGU5Y2E1ZjI1M2IzNDRkODE2Y2ZkYWJlYWRlNDlkYjc1MTM2YjE2M2I0ZTdkM2NiYWYzZjk3NzgxYiJ9'; 
        //   $decrypted = Crypt::decryptString($encrypted);
        //   return $decrypted;
        
        $data = explode(",", $datos);
        $usuario = [
        'ci' => $data[0],
        'nombre' => $data[1],
        'apellido' => $data[2],
        'correo' => $data[3],
        'alias' => $data[4],
        'password' => bcrypt($data[5]),
        'estado' => '1',
        ];
    
        User::create([
            'ci' => $usuario['ci'],
            'nombre' => $usuario['nombre'],
            'apellido' => $usuario['apellido'],
            'correo' => $usuario['correo'],
            'alias' => $usuario['alias'],
            'password' => $usuario['password'],
            'estado' => $usuario['estado'],
        ]);
        return "Correcto guardar usuario";
    }

    public function scope_validarUsuario($query, $datos){
        $data = explode(",", $datos);
        $contra =
            $query
                ->select(DB::raw('password as contra'))
                ->Where('correo','=', $data[0])
                ->get()
                ->first();
                
       // $encrypted = "eyJpdiI6Iml5dmdLd3hUczZuK0hCc3VJSTB2Q3c9PSIsInZhbHVlIjoiTkpJelZPTlJ1RUVWWkNUMmlrejhUdz09IiwibWFjIjoiZWY4ZTQyNWFmNGU4MDk3ZmRmZmM0NThhZGFhNjk3YjgzNTI0MDRjZWI0YWRhMTMzNjcyOTQ3NDhmYTZkYmVkYiJ9"; 
      // $decrypted = Crypt::decryptString($contra['contra']);
      // return $decrypted;   
      
        if (Hash::check($data[1], $contra['contra'])) {
        return "true";
        }else{
         return "false";   
        }

        // return "Correcto validar usuario";    

    }
}
