<?php 
namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\PeopleCountRepositoryInterface;
use Auth;

use App\PeopleCount;
use App\Branch;
use App\Company;
use DB;

class PeopleCountRepositoryEloquent implements PeopleCountRepositoryInterface
{

	protected $people_count;

	protected $branch;

	protected $company;

	public function __construct(PeopleCount $people_count, Branch $branch, Company $company)
	{
		$this->people_count = $people_count;
		$this->branch = $branch;
		$this->company = $company;
	}

	public function store($postdata)
	{
		$data = new $this->people_count();
		$data->company_code = $postdata['company_code'];
		$data->branch_code = $postdata['branch_code'];
		$data->date = $postdata['date'];
		$data->count = $postdata['count'];
		$data->stime = $postdata['stime'];
		$data->etime = $postdata['etime'];
		$data->save();

		return true;
	}

	public function countPeople($branches, $from, $to)
	{
		$date_from = date('Y-m-d',strtotime($from));
		$date_to = date('Y-m-d',strtotime($to));

		if(!empty($branches)){
			$datas = $this->people_count->select(DB::raw('sum(count) as count, branch_code'))
				->whereDate('created_at','>=',$date_from)
				->whereDate('created_at','<=',$date_to)
				->whereIn('branch_code',$branches)
				->groupBy('branch_code')
				->get();

			foreach ($datas as $key => $value) {
				$branch_name = $this->branch->where('branch_code',$value->branch_code)->first();
				$datas[$key]->branch_name = $branch_name->branch_name;
			}
			return $datas;

		}else{
			$datas = $this->people_count->select(DB::raw('sum(count) as count, branch_code'))
				->whereDate('created_at','>=',$date_from)
				->whereDate('created_at','<=',$date_to)
				->groupBy('branch_code')
				->get();

			foreach ($datas as $key => $value) {
				$branch_name = $this->branch->where('branch_code',$value->branch_code)->first();
				$datas[$key]->branch_name = $branch_name->branch_name;
			}
			return $datas;
		}
	}

	public function getDetails($from, $to, $branch)
	{
		$date_from = date('Y-m-d',strtotime($from));
		$date_to = date('Y-m-d',strtotime($to));

		$datas = $this->people_count->where('branch_code',$branch)
			->whereDate('created_at','>=',$date_from)
			->whereDate('created_at','<=',$date_to)
			->orderBy('created_at','DESC')
			->get();

		return $datas;
	}

	public function getBranch($branch)
	{
		return $this->branch->where('branch_code',$branch)->first();
	}
}