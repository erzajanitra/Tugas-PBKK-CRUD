<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $table= 'penulis';
    protected $guarded=[];
    protected $fillable = 
     [
        'nama',
        'jenis kelamin',
        'tanggal lahir',
        'about'
     ];
    public function artikel()
    {
        // menghubungkan category dgn article
        // 1 kategori bisa dimiliki banyak post
         return $this->hasMany(Artikel::class);
    }
}
