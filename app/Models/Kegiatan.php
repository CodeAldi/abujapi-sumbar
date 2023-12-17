<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $guarded = ['id'];

    public function kategori_kegiatan(): BelongsTo
    {
        return $this->belongsTo(KategoriKegiatan::class);
    }
}
