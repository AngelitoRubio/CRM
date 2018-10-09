<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Company;
use Auth;

class CompanyRepositoryEloquent implements CompanyRepositoryInterface{

	protected $company;

	public function __construct(Company $company){

		$this->company = $company;
	}

	public function All(){

		return $this->company->all();
	}

	public function ById($id){

		return $this->company->find($id);
	}

	public function Save($payload){

		$this->company->fill($payload)->save();

		return $this->company->id;
	}

	public function Update($payload, $id){

		if($id){

			$this->ById($id)->fill($payload)->save();

			return $id;
		}
	}	

	public function getList(){

		return $this->company->pluck('company','code');
	}	
}