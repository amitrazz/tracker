<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = ['user_id','profile_pic','about','youtube_url','facebook_url','linkedin_url'];
    public function user(){
        return $this->belongsTo('App\user');
    }
}
