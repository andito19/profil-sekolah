<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
        protected $fillable = [
        'id', 'judul', 'descripsi', 'created_at',
    ];
}		
