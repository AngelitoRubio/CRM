<?php 

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;
use Auth;

class UserRepositoryEloquent implements UserRepositoryInterface{

	protected $user;

	public function __construct(User $user){

		$this->user = $user;
	}

	public function All(){

		return $this->user->all();
	}

	public function ById($id){

		return $this->user->find($id);
	}

	public function Save($payload){

		$this->user->fill($payload)->save();

		return $this->user->id;
	}

	public function Update($payload, $id){

		if($id){

			$this->ById($id)->fill($payload)->save();

			return $id;
		}
	}	

	public function getList(){

		return $this->user->pluck('name','id');
	}	
}