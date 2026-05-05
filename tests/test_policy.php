<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(78, 84, 16, 24, 12);
assert(Policy::score($signal_case_1) === 120);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(83, 97, 10, 21, 7);
assert(Policy::score($signal_case_2) === 156);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(92, 102, 24, 10, 8);
assert(Policy::score($signal_case_3) === 196);
assert(Policy::classify($signal_case_3) === "accept");
