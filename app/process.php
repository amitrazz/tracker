<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class process extends Model
{
    protected $fillable = ['company_id','user_id','priority','status'];
    //
    public function users(){
        return $this->belongsTo('App\user');
    }
}
