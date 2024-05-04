<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'slug',
        'nama_latin',
        'images',
        'taksanomi',
        'deskripsi',
        'asalsebaran',
        'habitat',
        'morfologi',
        'manfaat',
        'sumber',
    ];
}
