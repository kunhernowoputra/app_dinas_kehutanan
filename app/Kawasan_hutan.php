<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kawasan_hutan extends Model
{
    use  SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sdh_kawasan_hutan';
    protected $fillable =
        [
            'user_id','tahun','luas','suaka_alam','lindung',
            'produksi_terbatas','produksi_tetap','produksi_konservasi','jumlah_luas','persentase',
        ];

    public function setTahunAttribute($value)
    {
        $this->attributes['tahun'] = Carbon::now()->year;
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
