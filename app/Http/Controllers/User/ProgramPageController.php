<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use App\Models\Mentors;
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

        // Mentor
        $all_mentor = Mentors::all()
            ->where('mentor_category', 'ALL-In Mentor')
            ->where('mentor_status', 'active')
            ->where('lang', $lang);

        return view(
            'user.undergraduate_program.main',
            [
                'testimonies' => $testimonies,
                'all_mentor' => $all_mentor,
            ]
        );
    }

    public function graduate_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring')->where('testi_subcategory', 'Graduate Program');

        // Mentor
        $all_mentor = Mentors::all()
            ->where('mentor_category', 'ALL-In Mentor')
            ->where('mentor_status', 'active')
            ->where('lang', $lang);

        return view('user.graduate_program.main', [
            'testimonies' => $testimonies,
            'all_mentor' => $all_mentor,
        ]);
    }

    public function university_transfer_program($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Admissions Mentoring')->where('testi_subcategory', 'University Transfer Program');

        // Mentor
        $all_mentor = Mentors::all()
            ->where('mentor_category', 'ALL-In Mentor')
            ->where('mentor_status', 'active')
            ->where('lang', $lang);

        return view('user.univ_transfer_program.main', [
            'testimonies' => $testimonies,
            'all_mentor' => $all_mentor,
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

    public function exclusive_program_school($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $testimonies = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active')->where('testi_category', 'Exclusive Program School');

        return view('user.exclusive_program_school.main', [
            'testimonies' => $testimonies,
            'locale' => $locale
        ]);
    }

    public function admission_accelerator()
    {
        return view('user.admission_accelerator.main');
    }

    public function experiential_learning()
    {
        return view('user.experiential_learning.main');
    }

    public function teacher_focused()
    {
        return view('user.teacher_focused.main');
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
