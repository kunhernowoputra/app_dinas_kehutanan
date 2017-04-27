<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penataan_batas extends Model
{
    use  SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sdh_penataan_batas';
    protected $fillable =
        [
            'user_id','tahun','fungsi','luar','jumlah',
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
