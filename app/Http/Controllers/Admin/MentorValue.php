<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MentorValues;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;

class MentorValue extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        DB::beginTransaction();
        try {
            $group = date('YmdHis');
            $date = date('Y-m-d H:i:s');
            $data = [
                [
                    'mentor_id' => $request->mentor_id,
                    'lang' => 'id',
                    'group' => $group,
                    'value' => $request->value_id,
                    'created_at' => $date,
                ],
                [
                    'mentor_id' => $request->mentor_id,
                    'lang' => 'en',
                    'group' => $group,
                    'value' => $request->value_en,
                    'created_at' => $date,
                ]
            ];

            foreach ($data as $value) {
                MentorValues::create($value);
            }

            DB::commit();
            Log::notice('Mentor Value : ' . $request->mentor_id . ' has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Mentor Video failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/' . $request->mentor_id . '/view')->withSuccess('Mentor Value Was Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    public function delete($group, $id)
    {
        DB::beginTransaction();
        try {
            $mentor_value = MentorValues::where('group',$id);
            $mentor_value->delete();
            DB::commit();
            Log::notice('Mentor Value : ' . $id . ' has been successfully Deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Mentor Value failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/' . $group . '/view')->withSuccess('Mentor Value Was Successfully Deleted');
    }
}
