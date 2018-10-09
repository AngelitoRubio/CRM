<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleCount extends Model
{
    protected $table = 'people_counts';

    protected $fillable = [
    	'company_code',
    	'branch_code',
		'date',
		'count',
		'stime',
		'etime'
    ];
}
