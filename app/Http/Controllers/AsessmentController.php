<?php

namespace App\Http\Controllers;

use App\Models\asessment;
use App\Http\Requests\StoreasessmentRequest;
use App\Http\Requests\UpdateasessmentRequest;
use App\Models\kota;
use Illuminate\Http\Request;

class AsessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = kota::all();

        return view('asessment.index', compact('kota'));
    }

    public function index_result(Request $request)
    {        
        if(isset($request->result))
        {
            $result = decrypt($request->result);
            return view('asessment.result', compact('result'));
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
     * @param  \App\Http\Requests\StoreasessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreasessmentRequest $request)
    {
        $nilaiasessment = 0;
        for($i = 1; $i <= 5; $i++)
        {
            $variable = 'question'.$i;
            $nilaiasessment += $request->$variable;
        }
        $insertData = [];
        $insertData['id_user'] = $request->id_user;
        $insertData['nilai_asessment'] = $nilaiasessment;

        $result = asessment::create($insertData);

        return redirect()->route('test-result', ['result' => encrypt($result->nilai_asessment)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asessment  $asessment
     * @return \Illuminate\Http\Response
     */
    public function show(asessment $asessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asessment  $asessment
     * @return \Illuminate\Http\Response
     */
    public function edit(asessment $asessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateasessmentRequest  $request
     * @param  \App\Models\asessment  $asessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateasessmentRequest $request, asessment $asessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asessment  $asessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(asessment $asessment)
    {
        //
    }
}
