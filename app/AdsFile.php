<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsFile extends Model
{
    protected $table = 'ads_files';

    protected $fillable = [

    	'ads_id',
		'filename',
		'encryptname',
		'download',
		'uploaded_by'
    ];

    
}
