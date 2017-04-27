<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use SoftDeletes;

    protected $table = 'data';
    protected $fillable = ['user_id','tahun'];
    protected $dates = ['delete_at'];
    protected $cast = [
      'user_id' => 'json'
    ];

//    public $json;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
