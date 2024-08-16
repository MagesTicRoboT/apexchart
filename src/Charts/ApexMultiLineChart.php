<?php

namespace App\ApexChart\Charts;

use App\ApexChart\ApexChart;
use App\ApexChart\Concerns\HasAxis;
use App\ApexChart\Concerns\HasMultiSeries;

class ApexMultiLineChart extends ApexChart
{
    use HasAxis, HasMultiSeries;
}
