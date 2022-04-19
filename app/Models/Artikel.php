<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table= 'artikels';
    protected $guarded=[];
    protected $fillable = 
     [
        'judul',
        'tahun',
        'penulis',
        'genre',
     ];
     public function penulis()
    {
        // menghubungkan category dgn article
        // 1 kategori bisa dimiliki banyak post
         return $this->belongsTo(Penulis::class);
    }

}
