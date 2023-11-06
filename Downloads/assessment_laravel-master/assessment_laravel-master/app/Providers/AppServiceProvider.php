<?php

namespace App\Providers;

use App\Models\EmployeeModel;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
 
            // $this->app->bind('path.public', function() {
            //     return base_path('../../public_html');
            // });
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $session = EmployeeModel::select('department_id')
        // ->where('user_id', '=', session('id'))
        // ->get();

        // return View::share('dept_id', $session);
    }
}
