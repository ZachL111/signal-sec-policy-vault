<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(80, 22, 32, 46);
assert(DomainReviewLens::score($item) === 132);
assert(DomainReviewLens::lane($item) === "watch");
