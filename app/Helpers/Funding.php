<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Date;

class Funding
{
    static function calculateDays($date_end)
    {
        $delta = $date_end - strtotime(date('Y-m-d H:i:s'));
        $oneDay = 24 * 60 * 60 * 1000;
        return round(abs($delta / $oneDay));
    }

    static function calculateFunded($target, $pledged)
    {
        return round((1 / $target * $pledged) * 100);
    }
}
