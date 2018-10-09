<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\AdsApproverRepositoryInterface;
use App\AdsApprover;
use Auth;

class AdsApproverRepositoryEloquent implements AdsApproverRepositoryInterface{

	protected $ads_approver;

	public function __construct(AdsApprover $ads_approver){

		$this->ads_approver = $ads_approver;
	}

	public function All(){

		return $this->ads_approver->all();
	}

	public function ById($id){

		return $this->ads_approver->find($id);
	}

	public function Save($payload){

		$this->ads_approver->fill($payload)->save();

		return $this->ads_approver->id;
	}

	public function Update($payload, $id){

		if($id){

			$this->ById($id)->fill($payload)->save();

			return $id;
		}
	}

	public function getList(){

		return $this->ads_approver->pluck('name','id');
	}

	public function getNotUsed(){

		
		return $this->ads_approver->pluck('name','id');
	}	

	public function forApprove($uid){

		return $this->ads_approver->where('user_id',$uid)->where('status',0)->get();
	}

	public function updateStat($adsID,$status){

		$ads_app = $this->ads_approver->where('ads_id',$adsID)->first();
		$ads_app->status = $status;
		$ads_app->update();

		$ads = Ads::where('id',$adsID)->first();
		$ads->status = $status;
		$ads->update();

		return $ads;
	}
}