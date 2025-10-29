<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ApplicantMail;
use App\Mail\ContactMail;
use App\Models\Applicants;
use App\Models\Careers;
use App\Models\Mentors;
use App\Models\MentorVideos;
use App\Rules\ReCaptcha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AboutPageController extends Controller
{
    public function about($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $all_mentor = Mentors::where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active')->get();

        $region = substr(app()->getLocale(), 0, 2);

        return view('user.about.region.' . $region, [
            'all_mentor' => $all_mentor,
        ]);
    }

    public function our_contribution()
    {
        return view('user.our_contribution.main');
    }

    public function partnership()
    {
        return view('user.partnership.main');
    }

    public function partnership_careers(Request $request)
    {
        $query = Careers::query();

        if ($request->has('department')) {
            $query->where('department', $request->department);
        }

        if ($request->has('status')) {
            $query->where('work_type', $request->status);
        }

        if ($request->has('search')) {
            $query->where('job_position', 'like', '%' . $request->search . '%');
        }

        $careers = $query->where('status', 'active')
            ->orderBy('job_position', 'asc')
            ->paginate(3);

        return view('user.partnership_carrier.main', [
            'careers' => $careers
        ]);
    }

    public function detail_careers($locale, $slug)
    {
        $career = Careers::where('slug', $slug)->firstOrFail();
        return view('user.detail_career.main', [
            'career' => $career,
        ]);
    }

    public function submit_job_applicant(Request $request, $locale, $slug)
    {
        // Find the related career/job by slug
        $career = Careers::where('slug', $slug)->firstOrFail();

        // ✅ Validate incoming form data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'cv_path' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'], // max 2MB
            'screen_answer_1' => ['nullable', 'string'],
            'screen_answer_2' => ['nullable', 'string'],
            'screen_answer_3' => ['nullable', 'string'],
            'g-recaptcha-response' => [new ReCaptcha()],
        ]);

        DB::beginTransaction(); // start transaction

        try {
            // ✅ Handle CV file upload
            $fileName = null;
            if ($request->hasFile('cv_path')) {
                $file = $request->file('cv_path');
                $file_format = $request->file('cv_path')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/applicants/';
                $time = date('YmdHis');
                $fileName = 'cv - ' . $validated['name'] . ' - ' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
            }

            // ✅ Save applicant data
            Applicants::create([
                'job_id' => $career->id,
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'cv_path' => $fileName,
                'screen_question_1' => $career->screen_question_1,
                'screen_answer_1' => $validated['screen_answer_1'] ?? null,
                'screen_question_2' => $career->screen_question_2,
                'screen_answer_2' => $validated['screen_answer_2'] ?? null,
                'screen_question_3' => $career->screen_question_3,
                'screen_answer_3' => $validated['screen_answer_3'] ?? null,
            ]);

            $data = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'cv_path' => env('AWS_URL') . 'applicants/' . $fileName,
                'position' => $career->job_position,
            ];

            Mail::to(['willie.romansyah@edu-all.com', 'lawrence.benning@edu-all.com'])
                ->send(new ApplicantMail($data));

            DB::commit(); // commit transaction

            Log::notice("successfully submitted job application for {$validated['name']} to position {$career->job_position}");

            return redirect($locale . '/thanks/career');
        } catch (\Exception $e) {
            DB::rollBack(); // rollback if anything fails

            Log::error('Job application submission failed: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to submit application. Please try again.']);
        }
    }

    public function thanks_career()
    {
        return view('user.sign_me.thank_applicant');
    }

    public function contact_us()
    {
        return view('user.contact_us.main');
    }

    public function submit_contact_us(Request $request, $locale)
    {
        try {
            $data = [
                'data' => $request->all(),
            ];

            Mail::to('info@edu-all.com')->send(new ContactMail($data));

            return redirect($locale . '/contact-us/thank');
        } catch (Exception $e) {
            Log::error('Send contact email failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
    }

    public function thank_contact_us()
    {
        return view('user.sign_me.thank');
    }


    public function mentor($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $allin_mentor = Mentors::all()->where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active');
        $building_mentor = Mentors::all()->where('mentor_category', 'Profile Building Mentor')->where('lang', $lang)->where('mentor_status', 'active');
        return view('user.mentor.main', [
            'locale' => $locale,
            'allin_mentor' => $allin_mentor,
            'building_mentor' => $building_mentor,
        ]);
    }

    public function detail_mentor($locale, $slug)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $mentor = Mentors::with('mentor_video')->with('blog')->where('mentor_slug', $slug)->where('lang', $lang)->where('mentor_status', 'active')->first();

        if (!$mentor) {
            return redirect()->route('mentor', ['locale' => $locale]);
        }

        return view('user.detail_mentor.main', [
            'mentor' => $mentor,
            'mentor_slug' => $slug
        ]);
    }
}
