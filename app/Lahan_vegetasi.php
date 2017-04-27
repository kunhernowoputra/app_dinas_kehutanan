<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lahan_vegetasi extends Model
{
    use  SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sdh_lahan_vegetasi';
    protected $fillable =
        [
            'user_id','tahun','lahan_kering_primer','lahan_kering_sekunder','hutan_rawa_primer','hutan_rawa_sekunder',
            'hutan_mangrove_primer','hutan_mangrove_sekunder','semak_belukar','semak_belukar_rawa','savana',
            'hti','perkebunan','pertanian'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
