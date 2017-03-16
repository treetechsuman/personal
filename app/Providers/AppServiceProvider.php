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
        $this->registerExperienceRepository();
        $this->registerSkillRepository();
        $this->registerPortfolioRepository();
        $this->registerAboutRepository();
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

	public function registerExperienceRepository() {
		return $this->app->bind(
			'App\\Repositories\\Experience\\ExperienceRepository',
			'App\\Repositories\\Experience\\EloquentExperience'
		);
	}

	public function registerSkillRepository() {
		return $this->app->bind(
			'App\\Repositories\\Skill\\SkillRepository',
			'App\\Repositories\\Skill\\EloquentSkill'
		);
	}

	public function registerPortfolioRepository() {
		return $this->app->bind(
			'App\\Repositories\\Portfolio\\PortfolioRepository',
			'App\\Repositories\\Portfolio\\EloquentPortfolio'
		);
	}

	public function registerAboutRepository() {
		return $this->app->bind(
			'App\\Repositories\\About\\AboutRepository',
			'App\\Repositories\\About\\EloquentAbout'
		);
	}
}