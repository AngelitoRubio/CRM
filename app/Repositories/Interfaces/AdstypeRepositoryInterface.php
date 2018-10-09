<?php namespace App\Repositories\Interfaces;

interface AdstypeRepositoryInterface{

	public function All();

	public function ById($id);

	public function Save($payload);

	public function Update($payload, $id);		
}