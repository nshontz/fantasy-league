<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;
use Illuminate\Http\Request;

class ScoreController extends Controller
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
        return view('scores/input', [
            'teams' => Team::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'week' => 'required|numeric',
            'team_id' => 'required',
            'played_data' => 'required',
            'benched_data' => 'required',
        ]);

        $score = Score::firstOrNew([
            'week' => $validated['week'],
            'team_id' => $validated['team_id']
        ]);

        $played =  collect(explode("\n", trim($validated['played_data'])))->map(function ($value) {
            return trim($value);
        });
        $benched =  collect(explode("\n", trim($validated['benched_data'])))->map(function ($value) {
            return trim($value);
        });


        $score->played_projected = $played[1];
        $score->played_score = $played[2];
        $score->benched_projected =$benched[1];
        $score->benched_score = $benched[2];
        $score->save();


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Score $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Score $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Score $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Score $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
