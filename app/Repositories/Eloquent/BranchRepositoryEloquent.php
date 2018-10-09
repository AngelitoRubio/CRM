<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\BranchRepositoryInterface;
use App\Branch;
use Auth;

class BranchRepositoryEloquent implements BranchRepositoryInterface{

	protected $branch;

	public function __construct(Branch $branch){

		$this->branch = $branch;
	}

	public function All(){

		return $this->branch->all();
	}

	public function ById($id){

		return $this->branch->find($id);
	}

	public function Save($payload){

		$this->branch->fill($payload)->save();

		return $this->branch->id;
	}

	public function Update($payload, $id){

		if($id){

			$this->ById($id)->fill($payload)->save();

			return $id;
		}
	}	

	public function getList(){

		return $this->branch->pluck('branch_name','id');
	}	

	public function getCodes(){

		return $this->branch->pluck('branch_name','branch_code');
	}	
}