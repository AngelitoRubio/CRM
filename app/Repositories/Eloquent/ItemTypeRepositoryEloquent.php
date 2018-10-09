<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\itemTypeRepositoryInterface;
use App\ItemType;

class ItemTypeRepositoryEloquent implements ItemTypeRepositoryInterface{

	protected $itemType;

	public function __construct(ItemType $itemType)
	{

		$this->itemType = $itemType;
	}

	public function All(){

		return $this->itemType->all();
	}

	public function ById($id){

		return $this->itemType->find($id);
	}

	public function Save($attributes){

		$this->itemType->fill($attributes)->save();

		return $this->itemType->id;
	}

	public function Update($attributes, $id){

		if($id){

			$this->ById($id)->fill($attributes)->save();

			return $id;
		}
	}		

	public function getList(){

		return $this->itemType->pluck('itemType','id');
	}
}