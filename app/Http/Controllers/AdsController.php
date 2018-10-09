<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AdsRepositoryInterface;
use App\Http\Requests\AdsRequest;
use App\Http\Requests\AdsRequestUpdate;
use App\Repositories\Interfaces\AdstypeRepositoryInterface;
use Illuminate\Support\Facades\Input;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $ads;
    protected $request;
    protected $type;
    

    public function __construct(Request $request,
        AdsRepositoryInterface $ads,AdstypeRepositoryInterface $type){

        $this->request = $request;
        $this->ads = $ads;
        $this->type = $type;
    }


    public function index()
    {
        //
          $adss = $this->ads->All();

          //dd($adss); die;

          return view('ads.lists',compact('adss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = $this->type->All();

        $typedata = [];
        foreach ($types as $key => $value) {
            $typedata[$value->id] = $value->type;
        }
        //dd($typedata); die;
        return view('ads.create',compact('types','typedata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsRequest $request)
    {
        //
       

        $payload = ['ads_title'=>$request->ads_title,
        'type'=>$request->type,
        'status'=>0
        ];

        $target_sx = "";    
        if($request->has('target_sex1')){
            $target_sx .= $request->target_sex1;
        }
        if($request->has('target_sex2')){

            if($target_sx == ""){

                $target_sx .= $request->target_sex2; 
            }
            else{
                 $target_sx .= ",".$request->target_sex2; 
            }
              
        }
        // dd($target_sx); die;

        $ads_id = $this->ads->Save($payload);

        $payload1 = [
        'ads_id'=>$ads_id,
        'ads_type_id'=>$request->type,
        'ads_month' => $request->ads_month,
        'target_sex' => $target_sx,
        'target_age' =>  $request->target_age,
        'target_date' =>  $request->target_date,
        'area' =>  $request->area,
        'product_name' =>  $request->product_name,
        'price_point' =>  $request->price_point,
        'product_info' =>  nl2br($request->product_info),
        'material' =>  $request->material,
        'color' =>  $request->color,
        'description'=>$request->description
        ];

        $this->ads->savedetails($payload1);

        if($request->hasFile('attached')){

            $files = Input::file('attached');

            foreach ($files as $file) {
                
                $filename = $file->getClientOriginalName();
                $destinationpath = public_path().'/uploads/'.$ads_id;
                $file->move($destinationpath,$filename);
                
                $payload2 = [
                'ads_id'=>$ads_id,
                'filename'=>$filename,
                'encryptname'=>\Hash::make($filename),
                'download'=>0,
                'uploaded_by'=>\Auth::id()
                ];

                $this->ads->saveFiles($payload2);

            }


        }

        return redirect('ads')->with('is_success','Record Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $adss = $this->ads->ById($id);      
        $types = $this->type->All();
        $target_sex = $adss->maindetails->target_sex;

       
        $myArray = explode(',', $target_sex);
        //     dd($myArray); die;
        $typedata = [];
        foreach ($types as $key => $value) {
            $typedata[$value->id] = $value->type;
        }


         return view('ads.edit',compact('types','typedata','adss','myArray','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(AdsRequestUpdate $request, $id)
    {
        //

        dd($request); die;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }

    public function view($id){

        $adss = $this->ads->ById($id);      
        $types = $this->type->All();
        $target_sex = $adss->maindetails->target_sex;

       
        $myArray = explode(',', $target_sex);
        //     dd($myArray); die;
        $typedata = [];
        foreach ($types as $key => $value) {
            $typedata[$value->id] = $value->type;
        }

         return view('ads.view',compact('types','typedata','adss','myArray'));
    }
}
