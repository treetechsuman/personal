<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //require_once('boot.php');
        $this->registerEducationRepository();  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

	public function registerEducationRepository() {
		return $this->app->bind(
			'App\\Repositories\\Education\\EducationRepository',
			'App\\Repositories\\Education\\EloquentEducation'
		);
	}
}