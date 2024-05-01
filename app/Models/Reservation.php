<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\table;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'tel_number',
        'res_date',
        'res_heure',
        'table_id',
        'menu_id',
        'user_id',
        'nombre_de_personnes ',
        'demandes_speciales '
    ];
    public function table()
    {
        return $this->belongsTo(table::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
