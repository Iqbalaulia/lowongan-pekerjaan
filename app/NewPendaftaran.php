<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPendaftaran extends Model
{
    protected $fillable=[
        'image',
        'divisi',
        'sebab_pengajuan',
        'jumlah',
        'pembukaan_rek',
        'penutupan_rek',
        'gaji',
        'pihak_bertanggungjwb',
        'status'
    ];
}
