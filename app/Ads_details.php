<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads_details extends Model
{
    //

    protected $table = 'ads_details';

    protected $fillable = [
    	'ads_id',
		'ads_type_id',
		'ads_month',
		'target_sex',
		'target_age',
		'target_date',
		'product_name',
		'price_point',
		'area',
		'product_info',
		'color',
		'material','description'
    ];

}
