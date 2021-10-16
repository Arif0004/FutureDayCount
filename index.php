<?php
date_default_timezone_set("Asia/Dhaka");
function takeFutureDate($date)
{
    $futureDate = strtotime($date);
    $currentDate = strtotime(date('d-m-Y'));
    $diff = $futureDate - $currentDate;
    $day = floor($diff / (60 * 60 * 24));
    return $day;
}
echo takeFutureDate('16-10-2022');
