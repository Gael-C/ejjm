<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judokas extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }

    public function getFullNameAttribute()
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
