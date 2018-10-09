<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\AdstypeRepositoryInterface;
use App\AdsType;
use Auth;

class AdstypeRepositoryEloquent implements AdstypeRepositoryInterface{

	protected $ads_type;

	public function __construct(AdsType $ads_type){

		$this->ads_type = $ads_type;
	}

	public function All(){

		return $this->ads_type->all();
	}

	public function ById($id){

		return $this->ads_type->find($id);
	}

	public function Save($payload){

		$this->ads_type->fill($payload)->save();

		return $this->ads_type->id;
	}

	public function Update($payload, $id){

		if($id){

			$this->ById($id)->fill($payload)->save();

			return $id;
		}
	}	

	public function getList(){

		return $this->ads_type->pluck('type','id');
	}	
}