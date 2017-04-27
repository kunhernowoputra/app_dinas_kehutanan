<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sebaran_kawasan extends Model
{
    use  SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sdh_sebaran_kawasan';
    protected $fillable =
        [
            'user_id','tahun','taman_nasional_jumlah','taman_nasional_luas','taman_wisata_jumlah',
            'taman_wisata_luas','taman_buru','cagar_alam_jumlah','cagar_alam_luas','suaka_margasatwa_jumlah',
            'suaka_margasatwa_luas','taman_hutan_jumlah','taman_hutan_luas','total_luas','keterangan'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
