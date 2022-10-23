<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ["AdresseEvenement", "DateDebut", "DateFin", "Capacite", "TypeAnimaux","local_id"];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }
}
