<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\RegularTalks;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegularTalkPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 30 next day 
        $today = Carbon::now()->format('Y-m-d');
        $next30Day = Carbon::now()->addDays(30)->format('Y-m-d');
        $prev30Day = Carbon::now()->subDays(30)->format('Y-m-d');

        $default = RegularTalks::whereBetween('date', [$today, $next30Day])->orderBy('date','asc')->first();
        $prevRegular = RegularTalks::whereBetween('date', [$prev30Day, $today])->orderBy('date','desc')->first();

        if($default) {
            $slug = $default->topic_slug;
            return redirect('/id-en/webinar-workshop/'.$slug);
        } else if ($prevRegular) {
            $slug = $prevRegular->topic_slug;
            return redirect('/id-en/webinar-workshop/'.$slug);
        } else {
            return redirect()->back()->withErrors('Webinar & Workshop Not Found!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $slug)
    {
        $regular_talk = RegularTalks::where('topic_slug',$slug)->first();
        $regtalk_date = $regular_talk->date;
        $prev_regtalk = RegularTalks::where('date', '<', $regtalk_date)->orderBy('date','desc')->first();
        $next_regtalk = RegularTalks::where('date', '>', $regtalk_date)->orderBy('date','asc')->first();

        return view('user.regular_talk.event', compact('regular_talk','prev_regtalk','next_regtalk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
