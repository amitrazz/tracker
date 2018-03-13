<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = ['name','phone1','phone2','email1','email2','company_id','designation'];
    //contact have min one company 
    public function company(){
        return $this->belongsTo('App\company');
    }
}
