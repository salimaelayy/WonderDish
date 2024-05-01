<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'capacité',
        'emplacement',
    ];
    public function reservation()
    {
        return $this->belongsTo(reservation::class);
    }
	
}
