<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function awards()
    {
        return $this->apiResponse(DB::table('awards')->get());
    }

    public function threshold_awards()
    {
        return $this->apiResponse(DB::table('threshold_winners')->get());
    }

    public function weekly_statistics()
    {
        return $this->apiResponse(DB::table('weekly_stats')->get());
    }

    public function manager_statistics()
    {
        return $this->apiResponse(DB::table('manager_stats')->get());
    }
}
