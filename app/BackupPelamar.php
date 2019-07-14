<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackupPelamar extends Model
{
    protected $fillable = [
        'image',
        'nama_lengkap',
        'keahlian',
        'linkedin',
        'github',
        'gitlab',
        'divisi_lamaran',
        'email',
        'files'  
      ];
}
