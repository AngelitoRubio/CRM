<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


use App\Repositories\Interfaces\PeopleCountRepositoryInterface;
use App\Repositories\Interfaces\BranchRepositoryInterface;

class PeopleCountController extends Controller
{
    protected $people_count;

    protected $branch;

    public function __construct(PeopleCountRepositoryInterface $people_count,BranchRepositoryInterface $branch){

    	$this->people_count = $people_count;

        $this->branch = $branch;
    }

    public function index()
    {
        $bs = [];
        $date_from = date('m/d/Y');
        $date_to = date('m/d/Y');
        $branches = $this->branch->getCodes();
        $pcounts = $this->people_count->countPeople($bs, $date_from, $date_to);

        return view('people_count.index', compact('pcounts','branches','date_from','date_to'));
    }

    public function store(Request $request)
    {
        $date_from = date('m/d/Y',strtotime($request->date_from));
        $date_to = date('m/d/Y',strtotime($request->date_to));
        $bs = $request->branch;
        $branches = $this->branch->getCodes();
        $pcounts = $this->people_count->countPeople($bs, $date_from, $date_to);

        return view('people_count.index', compact('pcounts','branches','date_from','date_to'));
    }

    public function details(Request $request)
    {
        $date_from = date('m/d/Y',strtotime($request->date_from));
        $date_to = date('m/d/Y',strtotime($request->date_to));
        $branch = $request->branch;
        $total = 0;
        $details = $this->people_count->getDetails($date_from,$date_to,$branch);
        $branch = $this->people_count->getBranch($branch);
        foreach ($details as $detail) {
            $total = $total + $detail->count;
        }

        return view('people_count.details',compact('details','branch','date_from','date_to','total'));
    }

    public function sendtoweb(){
        $postdata['company_code'] = Input::get('sCCode');
        $postdata['branch_code'] = Input::get('sBRCode');
        $postdata['date'] = date('Y-m-d', strtotime(Input::get('countDate')));
        $postdata['count'] = Input::get('curCount');
        $postdata['stime'] = date('H:i', strtotime(Input::get('sTime')));
        $postdata['etime'] = date('H:i', strtotime(Input::get('eTime')));

    	$new_data = $this->people_count->store($postdata);
    	if($new_data){
    		return \Response::json(1);
    	}
    	return \Response::json(0);
    }
}
