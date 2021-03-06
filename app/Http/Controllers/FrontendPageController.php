<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Portfolio\PortfolioRepository;
use App\Repositories\About\AboutRepository;
use App\Repositories\Education\EducationRepository;
use App\Repositories\Skill\SkillRepository;
use App\Repositories\Experience\ExperienceRepository;
use App\Repositories\Slide\SlideRepository;
use App\Repositories\Social\SocialRepository;

class FrontendPageController extends Controller
{
    private $portfolioRepo;
    private $aboutRepo;
    private $educationRepo;
    private $experienceRepo;
    private $skillRepo;
    private $socialRepo;
    private $slideRepo;
    

    public function __construct(
        PortfolioRepository $portfolioRepo,
        AboutRepository $aboutRepo,
        EducationRepository $educationRepo,
        ExperienceRepository $experienceRepo,
        SlideRepository $slideRepo,
        SocialRepository $socialRepo,
        SkillRepository $skillRepo
    ){
        $this->portfolioRepo = $portfolioRepo;
        $this->aboutRepo = $aboutRepo;
        $this->educationRepo = $educationRepo;
        $this->experienceRepo = $experienceRepo;
        $this->slideRepo = $slideRepo;
        $this->socialRepo = $socialRepo;
        $this->skillRepo = $skillRepo;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = $this->portfolioRepo->getAllPortfolio();
        $about = $this->aboutRepo->getAbout();
        $educations = $this->educationRepo->getAllEducation();
        $experiences = $this->experienceRepo->getAllExperience();
        $slides = $this->slideRepo->getAllSlide();
        $socials = $this->socialRepo->getAllSocial();
        $skills = $this->skillRepo->getSkillByType('skill');
        $moreSkills = $this->skillRepo->getSkillByType('moreSkill');
        return view('frontend.layouts.app',compact(
            'portfolios',
            'educations',
            'experiences',
            'skills',
            'moreSkills',
            'slides',
            'socials',
            'about'
            ));
    }
    public function blog(){
        return 'this is blog';
    }

}
