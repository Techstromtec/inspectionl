<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    
    function getStatusBasedOnDueDate($dueDate)
    {
        $now = now();
        $dueDate = Carbon\Carbon::parse($dueDate);

        if ($dueDate < $now) {
            return 'Overdue';
        } elseif ($dueDate->isToday()) {
            return 'Due Today';
        } elseif ($dueDate->isTomorrow()) {
            return 'Due Tomorrow';
        } else {
            return 'Pending';
        }
    }
}