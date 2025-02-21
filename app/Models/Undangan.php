<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'undangan';
    protected $primaryKey = 'id_undangan';
    public $timestamps = true;

    protected $fillable = [
        'judul', 'tujuan', 'isi_undangan', 'tgl_dibuat', 'tgl_disahkan', 'status',
        'nomor_undangan', 'nama_bertandatangan', 'tanda_identitas', 'divisi_id_divisi', 'seri_surat'
    ];

    protected $casts = [
        'tgl_dibuat' => 'datetime',
        'tgl_disahkan' => 'datetime',
    ];

    /**
     * Get the division associated with the document.
     */
    public function division()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
