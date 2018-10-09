<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    protected $fillable = [

    	'company_id',
    	'branch_code',
    	'branch_name'
    ];

    public function comp(){

    	return $this->hasOne('App\Company','id','company_id');
    }
}
