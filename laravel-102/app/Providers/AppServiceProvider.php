<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use auth;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age',function($expression){
              $data=json_decode($expression);
              dd($data);
              $year=$data[0];
              $month=$data[1];
              $day=$data[2];
              $age=Carboon::createFromDate($year,$month,$day)->age;
            return "<?php echo $age;?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age =Carbon::createFromDate(1995,5,22)->age;
        View::share('age',$age);
        /*$myname=get;
        $name=Auth::user()->name;*/
        // View::share('myname','Ozzy');
        //View::share('auth',Auth::user());
        View::composer('*',function($view){
            $view->with('auth',Auth::user());
        });
    }
}
