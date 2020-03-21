<?php
echo "Please enter your hours worked this week: \n\n";
$hours = readline(">> ");
while(!is_numeric($hours)) {
    echo "\nInvalid input. Please enter your hours worked this week: \n\n";
    $hours = readline(">> ");
}

echo "\nThank you. Please enter your hourly pay rate.\n\n";
$payrate = readline(">> ");
while(!is_numeric($payrate)) {
    echo "\nInvalid input. Please enter your hourly pay rate: \n\n";
    $payrate = readline(">> ");
}

if($hours < 40){
    $income = $hours * $payrate;
} else {
    $income = (40 * $payrate) + ((($hours - 40)) * (($payrate + ($payrate 
    / 2))));
}

echo "\nYou worked " . $hours . " hours this week. \nWith an hourly rate of $" . $payrate . " per hour, this week's earnings before taxes will be $" . $income . ".\n\n";
if($hours > 40){
    echo "You worked " . ($hours - 40) . " hours of overtime! Thank you for your commitment to getting the job done! Don't forget to take some time for yourself!\n\n";
}
echo "Have a wonderful weekend!\n\n";

?>