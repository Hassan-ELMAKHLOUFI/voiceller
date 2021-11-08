<?php

namespace App\Services\Statistics;

use Illuminate\Support\Facades\Auth;
use App\Models\Result;
use DB;

class UserUsageMonthlyService 
{
    private $month;

    public function __construct(int $month)
    {
        $this->month = $month;
    }


    public function getTotalStandardCharsUsage()
    {        
        $standard_chars = Result::select(DB::raw("sum(characters) as data"))
                ->whereMonth('created_at', $this->month)
                ->where('user_id', Auth::user()->id)
                ->where('voice_type', 'Standard')
                ->get();  
        
        return $standard_chars;
    }


    public function getTotalNeuralCharsUsage()
    {
        $neural_chars = Result::select(DB::raw("sum(characters) as data"))
                ->whereMonth('created_at', $this->month)
                ->where('user_id', Auth::user()->id)
                ->where('voice_type', 'Neural')
                ->get();  
        
        return $neural_chars;
    }


    public function getTotalAudioFiles()
    {
        $audio_files = Result::select(DB::raw("count(result_url) as data"))
                ->whereMonth('created_at', $this->month)
                ->where('user_id', Auth::user()->id)
                ->get();  
        
        return $audio_files;
    }



}