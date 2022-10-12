<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cadastros extends Model
{
    use HasFactory;

    protected $table = 'cadastros';

    protected $fillable = [
        'matricula',
        'name',
        'senha',
    ];





    public static $conexao = 'mysql';

    public static function select(){

        
            $query = DB::connection(self::$conexao)->table('cadastros')
            ->select('*')
            // ->where('c.matricula','=', [$matricula])
            // ->where('c.senha','=',[$senha])
            ->get();


        return $query;


    }


    public static function presenca($matricula,$nome,$senha){

            $query = DB::connection(self::$conexao)->table('cadastros')
            ->insert([
                'matricula' => $matricula,
                'name' => $nome,
                'senha' => $senha,
                'created_at' => Date("d-m-y H:i:s")
            ]);
            // '->where('c.matricula','=', [$matricula])
            // ->where('c.senha','=',[$senha])'


        return $query;


    }
}