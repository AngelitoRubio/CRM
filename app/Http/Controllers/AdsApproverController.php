<?php

namespace App\Http\Controllers;

use App\AdsApprover;
use App\Http\Requests\AdsApproverRequest;
use App\Repositories\Interfaces\AdsApproverRepositoryInterface;
use App\Repositories\Interfaces\AdsRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\AdstypeRepositoryInterface;
use Illuminate\Http\Request;
use Auth;

class AdsApproverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;
    protected $adsapprover;

    public function __construct(Request $request,
        AdsApproverRepositoryInterface $adsapprover,
        AdsRepositoryInterface $ads,
        UserRepositoryInterface $user,
        AdstypeRepositoryInterface $adstype){

        $this->request = $request;
        $this->adsapprover = $adsapprover;
        $this->ads = $ads;
        $this->user = $user;
        $this->adstype = $adstype;
    }

    public function index()
    {
        $ads_approvers = $this->adsapprover->All();
        return view('adsapprover.index',compact('ads_approvers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adss = $this->ads->getNotUsed();
        $users = $this->user->getList();

        $adstypes = $this->adstype->getList();

        return view('adsapprover.create',compact('adss','users','adstypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsApproverRequest $request)
    {
        $postdata = $this->request->all();
        $postdata["status"] = 0;        
        $this->adsapprover->Save($postdata);

        return redirect('adsapprover')->with('','is_success','Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdsApprover  $adsApprover
     * @return \Illuminate\Http\Response
     */
    public function show(AdsApprover $adsApprover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdsApprover  $adsApprover
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adsapprover = $this->adsapprover->ById($id);
        $adss = $this->ads->getList();
        $users = $this->user->getList();

        return view('adsapprover.edit',compact('adsapprover','adss','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdsApprover  $adsApprover
     * @return \Illuminate\Http\Response
     */
    public function update(AdsApproverRequest $request, $id)
    {
        $this->adsapprover->Update($this->request->all(),$id);
        return redirect('adsapprover')->with('is_update','Record Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdsApprover  $adsApprover
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdsApprover $adsApprover)
    {
        //
    }

    public function forapproval(){
        
        $uid = Auth::id();

        $ads = $this->adsapprover->forApprove($uid);        
        return view('adsapprover.forapproval',compact('ads'));
    }

    public function stat_update(Request $request){

        $adsID = $this->request->get('ads_id');
        $status = $this->request->get('status');

        $app = $this->adsapprover->updateStat($adsID,$status);

        return response()->json($app);
    }
}
