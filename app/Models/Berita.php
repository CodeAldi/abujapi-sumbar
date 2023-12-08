<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $guard = ['id'];
    
    public function kategori_berita(): BelongsTo
    {
        return $this->belongsTo(KategoriBerita::class);
    }
}
