<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\RoleRepositoryInterface',
            'App\Repositories\Eloquent\RoleRepositoryEloquent'
        );  
        
        $this->app->bind(
            'App\Repositories\Interfaces\CompanyRepositoryInterface',
            'App\Repositories\Eloquent\CompanyRepositoryEloquent'
        ); 

         $this->app->bind(
            'App\Repositories\Interfaces\UserRepositoryInterface',
            'App\Repositories\Eloquent\UserRepositoryEloquent'
        );        
        
        
        $this->app->bind(
            'App\Repositories\Interfaces\AdstypeRepositoryInterface',
            'App\Repositories\Eloquent\AdstypeRepositoryEloquent'
        ); 

         $this->app->bind(
            'App\Repositories\Interfaces\AdsRepositoryInterface',
            'App\Repositories\Eloquent\AdsRepositoryEloquent'
        );           
    

        $this->app->bind(
            'App\Repositories\Interfaces\ItemTypeRepositoryInterface',
            'App\Repositories\Eloquent\ItemTypeRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\AdsApproverRepositoryInterface',
            'App\Repositories\Eloquent\AdsApproverRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\PeopleCountRepositoryInterface',
            'App\Repositories\Eloquent\PeopleCountRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\BranchRepositoryInterface',
            'App\Repositories\Eloquent\BranchRepositoryEloquent'
        );

    }


}
    