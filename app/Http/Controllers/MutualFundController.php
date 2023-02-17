<?php

namespace App\Http\Controllers;

use App\Models\MutualFund;
use Illuminate\Http\Request;

class MutualFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.MutualFund.mutualFund_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.MutualFund.AddMutualFund');
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
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function show(MutualFund $mutualFund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function edit(MutualFund $mutualFund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MutualFund $mutualFund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function destroy(MutualFund $mutualFund)
    {
        //
    }
}
