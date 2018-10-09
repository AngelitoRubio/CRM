<?php 

namespace App\Repositories\Interfaces;

interface PeopleCountRepositoryInterface
{
	public function store($postdata);

	public function countPeople($branches, $date_from, $date_to);

	public function getDetails($date_from, $date_to, $branch);

	public function getBranch($branch);
}