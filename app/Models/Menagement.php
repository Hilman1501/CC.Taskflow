<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menagement extends Model
{
    use HasFactory;

    protected $table = 'menagement'; 

  protected $fillable = [
    'judul',
    'deskripsi',
    'penanggung_jawab',
    'deadline',
    'file_tugas',
    'link_github',
    'link_drive',
];
    
}
