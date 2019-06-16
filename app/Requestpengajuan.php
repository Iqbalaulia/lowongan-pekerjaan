<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestpengajuan extends Model
{
    protected $fillable=[
        'divisi',
        'sebab_pengajuan',
        'jumlah',
        'pembukaan_rek',
        'penutupan_rek',
        'pihak_bertanggungjwb'
    ];
}
