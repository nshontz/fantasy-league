<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchup extends Model
{
    use HasFactory;

    protected $fillable = ['week','home_team_id'];

    protected $with = ['away_team_score', 'home_team_score','home_team', 'away_team'];

    public function home_team()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function away_team()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function away_team_score()
    {
        return $this->hasOne(Score::class, 'team_id', 'away_team_id')->where('week', $this->week);
    }

    public function home_team_score()
    {
        return $this->hasOne(Score::class, 'team_id', 'home_team_id')->where('week', $this->week);
    }
}
