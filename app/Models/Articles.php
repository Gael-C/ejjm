<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Articles extends Model
{
    use HasFactory;
    use HasSEO;

    protected $fillable = ['titre','slug', 'contenu', 'image'];
}
