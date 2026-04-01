<?php

// 1. Current Date
echo "Current Date: " . date("Y-m-d") . "\n";

// 2. Current Time
echo "Current Time: " . date("H:i:s") . "\n";

// 3. Full Date & Time
echo "Full DateTime: " . date("Y-m-d H:i:s") . "\n";


// 4. Different Date Formats
echo date("d-m-Y") . "\n";
echo date("l") . "\n"; // Day name
echo date("M") . "\n"; // Month short name


// 5. Timestamp
echo "Timestamp: " . time() . "\n";


// 6. Convert String to Date (strtotime)
$date = "2026-04-10";
echo "Converted Timestamp: " . strtotime($date) . "\n";


// 7. Add Days
echo "After 5 days: " . date("Y-m-d", strtotime("+5 days")) . "\n";

// 8. Subtract Days
echo "Before 5 days: " . date("Y-m-d", strtotime("-5 days")) . "\n";


// 9. Date Difference
$date1 = new DateTime("2026-01-01");
$date2 = new DateTime("2026-03-01");

$diff = $date1->diff($date2);
echo "Difference: " . $diff->days . " days\n";


// 10. Timezone
date_default_timezone_set("Asia/Kolkata");
echo "India Time: " . date("Y-m-d H:i:s") . "\n";


// 11. Get Specific Parts
echo "Year: " . date("Y") . "\n";
echo "Month: " . date("m") . "\n";
echo "Day: " . date("d") . "\n";


// 12. Check Date Validity
$valid = checkdate(2, 29, 2024); // leap year
if($valid){
    echo "Valid Date\n";
} else {
    echo "Invalid Date\n";
}


// 13. Create Custom Date
$customDate = mktime(0, 0, 0, 12, 25, 2025);
echo "Custom Date: " . date("Y-m-d", $customDate) . "\n";


// 14. Date Period Loop (Next 5 Days)
$start = new DateTime();
for($i = 0; $i < 5; $i++){
    echo $start->format("Y-m-d") . "\n";
    $start->modify("+1 day");
}

?>