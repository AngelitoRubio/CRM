<?php namespace App\Repositories\Interfaces;

interface AdsRepositoryInterface{

	public function All();

	public function ById($id);

	public function Save($payload1);

	public function savedetails($payload1);
	
	public function saveFiles($payload1);

}