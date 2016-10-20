In Framework - Range
====================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kpicaza/range/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/range/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/kpicaza/range/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/range/?branch=master)
[![Build Status](https://travis-ci.org/kpicaza/range.svg?branch=master)](https://travis-ci.org/kpicaza/range)

Range is a value object used as a dependency in various packages at "In Framework".
 
It can be very useful for
different tasks like validations or as part of more complex objects.

## Installation:

````
composer require infw/range
````

## Usage:

````php
<?php

use InFw\Range\BaseRange as Range;

$min = 25;
$max = 1000;

$range = new Range($min, $max);

$range->getMin();
$range->getMax();

````
