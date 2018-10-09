<?php namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\AdsRepositoryInterface;
use App\Ads;
use App\Ads_details;
use App\AdsFile;
Use App\AdsApprover;
use Auth;

class AdsRepositoryEloquent implements AdsRepositoryInterface{

	protected $ads;
	protected $ads_details;
	protected $ads_files;

	public function __construct(Ads $ads,Ads_details $ads_details,AdsFile $ads_files){

		$this->ads = $ads;
		$this->ads_details = $ads_details;
		$this->ads_files = $ads_files;
	}

	public function All(){

		$alldata = $this->ads->all();
		return $alldata;
	}

	public function ById($id){

		return $this->ads->find($id);
	}

	public function Save($payload1){

		$this->ads->fill($payload1)->save();
		return $this->ads->id;
	}

    public function getList(){

        return $this->ads->pluck('ads_title','id');
    }
	public function savedetails($payload1){

		$this->ads_details->fill($payload1)->save();
		return $this->ads_details->id;
	}

	public function saveFiles($payload){

		$this->ads_files->fill($payload)->save();
		return $this->ads_files;
	}

	public function getNotUsed(){
		$adsApprover = AdsApprover::all();
		$ads_id = [];
		foreach ($adsApprover as $ad) {
			$ads_id[] = $ad->ads_id;
		}

		return $this->ads->whereNotIn('id',$ads_id)->pluck('ads_title','id');
	}			
}