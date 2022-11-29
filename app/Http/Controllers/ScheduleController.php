<?php

namespace App\Http\Controllers;

use App\Models\Matchup;
use App\Models\Score;
use App\Models\Team;
use Illuminate\Http\Request;

class ScheduleController extends Controller
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
        return view('schedule/input');
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
            'data' => 'required',
        ]);

        $data = collect(explode("\n", trim($request->get('data'))))->map(function ($line) {
            return trim($line);
        })->slice(7)->values()->chunk(8);

        foreach ($data as $game) {
            $gameData = collect([
                'away_team_name',
                'away_team_record',
                'away_team_manager',
                'away_team_score',
                'home_team_score',
                'home_team_manager',
                'home_team_name',
                'home_team_record',
            ])->combine($game);

            if (isset($gameData['away_team_score']) && isset($gameData['home_team_score'])) {
                $away_team = Team::where('name', str_replace("'", "", $gameData['away_team_name']))->first();
                $home_team = Team::where('name', str_replace("'", "", $gameData['home_team_name']))->first();
            }
            if (!$away_team || !$home_team) {
                dd([$gameData, $away_team, $home_team]);
            }

            $matchup = Matchup::firstOrNew([
                'week' => $validated['week'],
                'home_team_id' => $home_team->id,
            ]);
            $matchup->away_team_id = $away_team->id;
            $matchup->save();
            if (!empty($gameData['away_team_score'])) {
                $away_team_score = Score::firstOrNew([
                    'week' => $validated['week'],
                    'team_id' => $away_team->id
                ]);
                $away_team_score->played_score = $gameData['away_team_score'];
                $away_team_score->save();
            }

            if (!empty($gameData['home_team_score'])) {
                $home_team_score = Score::firstOrNew([
                    'week' => $validated['week'],
                    'team_id' => $home_team->id
                ]);
                $home_team_score->played_score = $gameData['home_team_score'];
                $home_team_score->save();
            }

        }
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
