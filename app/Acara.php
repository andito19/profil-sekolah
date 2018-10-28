<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $fillable = [
        'Id', 'Judul', 'Deskripsi', 'created_at',
    ];
}
