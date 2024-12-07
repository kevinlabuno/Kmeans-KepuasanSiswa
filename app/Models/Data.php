<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table ='data';
    protected $fillable = ['nama','kelas','jenis','guru','c1','c2','c3','c4','c5','c6','c7','c8','c9','c10','total','cluster','cluster2'];
    
    
        public static function getLatestData()
    {
        return self::orderBy('created_at', 'desc')->first(); // Mengambil data terbaru berdasarkan created_at
    }
}
