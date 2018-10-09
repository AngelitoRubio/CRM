<?php

namespace App\Http\Controllers;

use App\AdsType;
use App\Http\Requests\AdtypesRequest;
use App\Repositories\Interfaces\AdstypeRepositoryInterface;
use Illuminate\Http\Request;

class AdsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $request;
    protected $ads_type;

    public function __construct(Request $request,
    AdstypeRepositoryInterface $ads_type){

    $this->request = $request;
    $this->ads_type = $ads_type;
    }

    public function index()
    {
        $ads_types = $this->ads_type->All();
        return view('adstype.index',compact('ads_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adstype.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdtypesRequest $request)
    {
        $this->ads_type->Save($this->request->all());
        return redirect('adstype')->with('is_success','Record Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdsType  $adsType
     * @return \Illuminate\Http\Response
     */
    public function show(AdsType $adsType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdsType  $adsType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads_type = $this->ads_type->ById($id);

        return view('adstype.edit',compact('ads_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdsType  $adsType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->ads_type->Update($this->request->all(),$id);
        return redirect('adstype')->with('is_update','Record Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdsType  $adsType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdsType $adsType)
    {
        //
    }
}
