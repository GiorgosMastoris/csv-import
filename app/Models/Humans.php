<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Humans extends Model
{
    use HasFactory;

    protected $table = 'humans';
    public $timestamps = true;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'town'
    ];

    public static function getHumans(){
        $records = DB::table('humans')->select('id','first_name','last_name','email','phone','address','town');
        return $records ;
    }
}
