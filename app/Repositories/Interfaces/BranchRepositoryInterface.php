<?php namespace App\Repositories\Interfaces;

interface BranchRepositoryInterface{

	public function All();

	public function ById($id);

	public function Save($payload);

	public function Update($payload, $id);	

	public function getList();	
	
	public function getCodes();	
}