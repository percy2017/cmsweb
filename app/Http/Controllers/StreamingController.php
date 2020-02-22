<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;
use App\Account;
use App\Profile;
use Illuminate\Support\Facades\Validator;
use Response;
use Carbon\Carbon;

class StreamingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $viewProfile = Profile::where('account_id', $id)->get();

        return view('vendor.streaming.table', [
            'viewProfile' => $viewProfile
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', 'profiles')->first();

        $dataRow = DB::table('data_rows')->where([
            ['data_type_id', '=', $dataType->id],
            ['field', '=', 'membership']
        ])->first();
        $membership = json_decode($dataRow->details, true);

        return view('vendor.streaming.create', [
            'membership' => $membership['options']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = Profile::create([
            'fullname'   => $request->fullname,
            'phone'      => $request->phone,
            'membership' => $request->membership,
            'statu'      => 'Vigente',
            'startdate'  => Carbon::now(),
            'account_id' => 1
        ]);
        return response()->json([
            'profile' => $profile
        ]);
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
       
        $dataType = Voyager::model('DataType')->where('slug', '=', 'profiles')->first();
         //status
        $dataRow = DB::table('data_rows')->where([
            ['data_type_id', '=', $dataType->id],
            ['field', '=', 'statu']
        ])->first();
        $statu = json_decode($dataRow->details, true);
        //membreship
        $dataRow2 = DB::table('data_rows')->where([
            ['data_type_id', '=', $dataType->id],
            ['field', '=', 'membership']
        ])->first();
        $membership = json_decode($dataRow2->details, true);

        $profile = Profile::where('id', $id)->first();
        return view('vendor.streaming.edit', [
            'profile'   => $profile,
            'datatype'  => $dataType,
            'statu'     => $statu['options'],
            'membership' => $membership['options'],
        ]);
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

        $profile = Profile::where('id', $id)->first();
        $profile->membership = $request->membership;
        $profile->statu = $request->statu;
        $profile->finaldate = $request->finaldate;
        $profile->save();
        return response()->json([
            'profile' => $profile
        ]);
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
