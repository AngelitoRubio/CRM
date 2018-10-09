<?php namespace App\Repositories\Interfaces;

interface RoleRepositoryInterface{

	public function All();

	public function ById($id);

	public function Create($attributes);

	public function Update($attributes, $id);	

	public function getList();

	//public function getListWithOutMe($id);
}