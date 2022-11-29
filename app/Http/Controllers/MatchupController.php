<?php

namespace App\Http\Controllers;

use App\Models\Matchup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatchupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->apiResponse(
            DB::table('matchup_results')->get()
        );
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Matchup $matchup
     * @return \Illuminate\Http\Response
     */
    public function show(Matchup $matchup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Matchup $matchup
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchup $matchup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Matchup $matchup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matchup $matchup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Matchup $matchup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matchup $matchup)
    {
        //
    }
}
