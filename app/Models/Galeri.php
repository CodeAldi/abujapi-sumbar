<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;
    
    protected $table = 'galeri';
    protected $guarded = ['id'];

    /**
     * Get the kategori_galeri that owns the Galeri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori_galeri(): BelongsTo
    {
        return $this->belongsTo(KategoriGaleri::class);
    }
}
