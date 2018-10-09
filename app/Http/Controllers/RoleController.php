<?php

namespace App\Http\Controllers;

use App\Role;
use App\Http\Requests\RoleRequest;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        protected $request;
        protected $role;

    public function __construct(Request $request,
        RoleRepositoryInterface $role){

        $this->request = $request;
        $this->role = $role;
    }

    public function index()
    {
        $roles = $this->role->All();
        // dd($roles);die;
        return view('roles.lists',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create',compact('roles'));
    }

    public function store(RoleRequest $request)
    {
        $this->role->Create($this->request->all());
        return redirect('roles')->with('is_success','Record Created!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->role->ById($id);

        return view('roles.edit',compact('role'));
    }    

    public function update(Request $request, $id)
    {
        $this->role->Update($this->request->all(),$id);
        return redirect('roles')->with('is_update','Record Updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Role $role)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
