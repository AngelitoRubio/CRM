<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsApprover extends Model
{
    protected $table = 'ads_approvers';

    protected $fillable = [

    	'ads_id',
    	'user_id',
    	'status'
    ];

    public function ads(){

        return $this->hasOne('App\Ads','id','ads_id');
    }

    public function user(){

        return $this->hasOne('App\User','id','user_id');
    }
    
}
