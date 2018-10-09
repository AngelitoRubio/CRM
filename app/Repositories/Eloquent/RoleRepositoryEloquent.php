<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Role;

class RoleRepositoryEloquent implements RoleRepositoryInterface{

	protected $role;

	public function __construct(Role $role)
	{

		$this->role = $role;
	}

	public function All(){

		return $this->role->all();
	}

	public function ById($id){

		return $this->role->find($id);
	}

	public function Create($attributes){

		$this->role->fill($attributes)->save();

		return $this->role->id;
	}

	public function Update($attributes, $id){

		if($id){

			$this->ById($id)->fill($attributes)->save();

			return $id;
		}
	}		

	public function getList(){

		return $this->role->pluck('role','id');
	}
}