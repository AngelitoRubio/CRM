<?php

namespace App\Http\Controllers;

use App\ItemType;
use App\Http\Requests\ItemTypeRequest;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ItemTypeRepositoryInterface;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;
    protected $itemType;

    public function __construct(Request $request,
        ItemTypeRepositoryInterface $itemType){

        $this->request = $request;
        $this->itemType = $itemType;
    }
    public function index()
    {       
        $item_types = $this->itemType->All();
        // dd($roles);die;
        return view('itemtype.lists',compact('item_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('itemtype.create',compact('item_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemTypeRequest $request)
    {
        $this->itemType->Save($this->request->all());
        return redirect('itemtype')->with('is_success','Record Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function show(ItemType $itemType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemtype = $this->itemType->ById($id);

        return view('itemtype.edit',compact('itemtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->itemType->Update($this->request->all(),$id);
        return redirect('itemtype')->with('is_update','Record Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemType $itemType)
    {
        //
    }
}
