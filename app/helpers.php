<?php

function getStatusPromo($promo){
    $currentDate = date('Y-m-d');
    if(!$promo['status'] || $currentDate >= $promo['end_date']){
        return "Not active";
    }else{
        if ($currentDate >= $promo['start_date'] && $currentDate <= $promo['end_date']) {
            return 'Active';
        } else {
            return 'On scheduling';
        }
    }
}

function getStatusClaim($claim){
    $currentDate = date('Y-m-d');
    if(!$claim['status'] || $currentDate >= $claim['end_date']){
        return "Not active";
    }else{
        if ($currentDate >= $claim['start_date'] && $currentDate <= $claim['end_date']) {
            return 'Active';
        } else {
            return 'On scheduling';
        }
    }
}

function getStatusProduct($product){
    $currentDate = date('Y-m-d');
    if(!$product['status'] || $currentDate >= $product['end_date']){
        return "Not active";
    }else{
        return 'Active';
    }
}

function changeDateFormat($date){
    $dateTime = new DateTime($date);
    $formattedDate = $dateTime->format('d M Y');

    return $formattedDate;
}

function changeDateFormat2($date){
    $dateTime = new DateTime($date);
    $formattedDate = $dateTime->format('d F Y');

    return $formattedDate;
}

function generateInitials($name) {
    $words = explode(' ', $name);
    $initials = '';

    foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
        if (strlen($initials) >= 2) {
            break;
        }
    }

    return $initials;
}

function generateRandomHexColor() {
    do {
        $length = 3;
        $randomBytes = random_bytes($length);
        $hexCode = bin2hex($randomBytes);
    } while ($hexCode === 'ffffff');

    return $hexCode;
}

function readableDaysLeft($endDate)
{
    $now = now();
    $target = \Carbon\Carbon::parse($endDate);
    $daysRemaining = $target->diffInDays($now);

    if ($daysRemaining > 0) {
        $daysText = $daysRemaining === 1 ? 'day' : 'days';
        $remainingText = "{$daysRemaining} {$daysText} left";
    } elseif ($daysRemaining === 0) {
        $remainingText = "today";
    } else {
        $remainingText = "has passed";
    }

    return $remainingText;
}

function readableDaysLeftActive($endDate)
{
    $now = now();
    $target = \Carbon\Carbon::parse($endDate);
    $daysRemaining = $target->diffInDays($now);

    if ($daysRemaining > 0) {
        $daysText = $daysRemaining === 1 ? 'day' : 'days';
        $remainingText = "{$daysRemaining} {$daysText}";
    } elseif ($daysRemaining === 0) {
        $remainingText = "today";
    } else {
        $remainingText = "has passed";
    }

    return $remainingText;
}

function changeLastChangePassword($date){
    // Tanggal yang diberikan
    $givenDate = new DateTime($date);

    // Tanggal saat ini
    $currentDate = new DateTime();

    // Menghitung selisih dalam bulan dan tahun
    $interval = $givenDate->diff($currentDate);
    $monthsDiff = $interval->y * 12 + $interval->m;

    if ($monthsDiff == 0) {
        return "this month";
    } elseif ($monthsDiff == 1) {
        return "1 month ago";
    } elseif ($monthsDiff > 1 && $monthsDiff <= 12) {
        return "$monthsDiff months ago";
    } elseif ($interval->y == 1) {
        return "1 year ago";
    } else {
        return $interval->y . " years ago";
    }
}
?>
