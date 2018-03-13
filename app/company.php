<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = ['name','industry_sigment','address1','address1','city','state','country','zipcode','lead_source','connection','order_frequancy','avg_order_value'];
    //
    public function contacts(){
        return $this->hasMany('App\contact');
    }
}
