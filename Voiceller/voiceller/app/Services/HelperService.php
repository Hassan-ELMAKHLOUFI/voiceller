<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use DB;


class HelperService 
{
    
    public static function getTotalChars()
    {   

        $payments = Payment::select(DB::raw("sum(characters) as data"))
                ->where('user_id', Auth::user()->id)
                ->get();

        foreach($payments as $payment) {
            $value = $payment['data'];
        };

        return $value;
    }


    public static function getTotalCharsFormatted()
    {   

        $payments = Payment::select(DB::raw("sum(characters) as data"))
                ->where('user_id', Auth::user()->id)
                ->get();

        foreach($payments as $payment) {
            $value = self::formatTotalChars($payment['data']);
        };

        return $value;
    }


    public static function formatTotalChars($total)
    {
        $units = ['', 'K', 'M', 'B', 'T'];
        for ($i = 0; $total >= 1000; $i++) {
            $total /= 1000;
        }
        return round($total, 1) . $units[$i];
    }


    public static function getPercentage($current, $total)
    {
        if ($total == 0) {
            return 0;
        }

        return (($current / $total) * 100);
    }





}