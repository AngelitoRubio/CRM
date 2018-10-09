<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
	protected $table = 'ads';

    protected $fillable = [

		'ads_title',
		'type',
		'status'
    ];

    public function maindetails(){

    	return $this->hasOne('App\Ads_details','ads_id','id');
    }

    public function maintype(){

        return $this->hasOne('App\AdsType','id','type');
    }

     public function mainfile(){

        return $this->hasOne('App\AdsFile','ads_id','id');
    }

    public function adtype(){

        return $this->hasOne('App\AdsType','type','id');
    }

}
