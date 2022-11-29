<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Matchup;
use App\Models\Score;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen(database_path("seeders/schedule.csv"), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $matchupData = collect(['week', 'away', 'home'])->combine($data);
                $matchup = new Matchup();
                $matchup->week = $matchupData['week'];
                $matchup->home_team_id = Team::where('name',$matchupData['home'])->first()->id;
                $matchup->away_team_id = Team::where('name',$matchupData['away'])->first()->id;
                $matchup->save();
            }
            fclose($handle);
        }
        $matchups = Matchup::get();
        foreach($matchups as $matchup) {
            $home_score = new Score();
            $home_score->team_id = $matchup->home_team_id;
            $home_score->week = $matchup->week;
            $home_score->save();

            $away_score = new Score();
            $away_score->team_id = $matchup->away_team_id;
            $away_score->week = $matchup->week;
            $away_score->save();
        }
    }
}
