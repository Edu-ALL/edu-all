<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use App\Models\Testimonials;
use App\Models\Tutors;
use Illuminate\Http\Request;

class ProgramPageController extends Controller
{

    public function index()
    {
        return view('user.programs.main');
    }

    public function admissions_mentoring($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring');

        return view('user.admission_mentoring.main', [
            'testimonies' => $testimonies,
        ]);
    }

    public function undergraduate_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring')->where('testi_subcategory', 'Undergraduate Program');

        return view(
            'user.undergraduate_program.main',
            [
                'testimonies' => $testimonies,
            ]
        );
    }

    public function graduate_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring')->where('testi_subcategory', 'Graduate Program');

        return view('user.graduate_program.main', [
            'testimonies' => $testimonies
        ]);
    }

    public function university_transfer_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring')->where('testi_subcategory', 'University Transfer Program');

        return view('user.univ_transfer_program.main', [
            'testimonies' => $testimonies
        ]);
    }

    public function passion_project_mentoring($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Experiential Learning');

        return view('user.passion_project_mentoring.main', [
            'testimonies' => $testimonies
        ]);
    }

    public function academic_test_preparation($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Academic Preparation');

        return view('user.academic_test_preparation.main', [
            'testimonies' => $testimonies
        ]);
    }

    public function academic_tutoring($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Academic Preparation')->where('testi_subcategory', "Academic Tutoring");

        $tutors = Tutors::all()->where('status', 'active');

        return view('user.academic_tutoring.main',  [
            'testimonies' => $testimonies,
            'tutors' => $tutors
        ]);
    }

    public function ib_ee_coaching_program()
    {
        return view('user.ib_ee_coaching_program.main');
    }

    public function sat_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Academic Preparation')->where('testi_subcategory', "SAT/ACT Preparation");

        return view('user.sat_program.main', [
            'testimonies' => $testimonies,
            'locale' => $locale
        ]);
    }

    public function skillset_tutoring_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Academic Preparation')->where('testi_subcategory', "SAT/ACT Preparation");

        return view('user.skillset_tutoring.main', [
            'testimonies' => $testimonies,
            'locale' => $locale
        ]);
    }

    public function global_innovators_project()
    {
        return view('user.global_innovators_projects.main');
    }

    public function thank_page()
    {
        return view('user.sign_me.thank');
    }
}
