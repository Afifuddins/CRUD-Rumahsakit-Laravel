<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'penyakit',
        'umur',
        'alamat',
        'description',
    ];

    public $timestamps = true;
}
