<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;

class UserController extends Controller
{
    protected $request;
    protected $user;

    public function __construct(Request $request,
        UserRepositoryInterface $user,
    	CompanyRepositoryInterface $company,
    	RoleRepositoryInterface $role){

        $this->request =  $request;
        $this->user = $user;
        $this->company = $company;
        $this->role = $role;        
    }


    public function index()
    {
        $users = $this->user->All();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$roles = $this->role->getList();
    	$companies = $this->company->getList();

        return view('users.create',compact('roles','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $postdata = $this->request->all();
        $postdata['password'] = \Hash::make($this->request->get('password'));

        $this->user->Save($postdata);

        return redirect('users')->with('is_success','Saved');
    }

     public function edit(User $user)
    {
        $roles = $this->role->getList();
        $companies = $this->company->getList();

        return view('users.edit',compact('user','roles','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postdata = $this->request->all();
        $postdata['password'] = \Hash::make($this->request->get('password'));

        $this->user->Update($postdata,$id);

        return redirect('users')->with('is_update','Updated!');
    }
}
