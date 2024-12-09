<?php

namespace App\Http\Controllers;

use App\Models\asessment_user_data;
use App\Http\Requests\Storeasessment_user_dataRequest;
use App\Http\Requests\Updateasessment_user_dataRequest;
use Illuminate\Http\Request;

class AsessmentUserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if(isset($request->id))
        {
            $id = decrypt($request->id);
            return view('asessment.asessment', compact('id'));
        }
        else
        {
            return redirect()->route('assessment-data');
        }
        
        return redirect()->route('assessment-data');
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
     * @param  \App\Http\Requests\Storeasessment_user_dataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeasessment_user_dataRequest $request)
    {
        $insertData = [];
        $insertData['nama_lengkap'] = $request->nama_lengkap;
        $insertData['nomor_wa'] = $request->nomor_wa;
        $insertData['kota'] = $request->kota;
        $insertData['umur'] = $request->umur;

        $result = asessment_user_data::create($insertData);

        return redirect()->route('test-assessment', ['id' => encrypt($result->id)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asessment_user_data  $asessment_user_data
     * @return \Illuminate\Http\Response
     */
    public function show(asessment_user_data $asessment_user_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asessment_user_data  $asessment_user_data
     * @return \Illuminate\Http\Response
     */
    public function edit(asessment_user_data $asessment_user_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateasessment_user_dataRequest  $request
     * @param  \App\Models\asessment_user_data  $asessment_user_data
     * @return \Illuminate\Http\Response
     */
    public function update(Updateasessment_user_dataRequest $request, asessment_user_data $asessment_user_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asessment_user_data  $asessment_user_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(asessment_user_data $asessment_user_data)
    {
        //
    }
}
