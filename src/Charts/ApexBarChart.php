<?php

namespace App\ApexChart\Charts;

use App\ApexChart\ApexChart;
use App\ApexChart\Concerns\HasAxis;
use App\ApexChart\Concerns\HasSeries;
use App\ApexChart\Concerns\HasStroke;
use App\ApexChart\Concerns\HasDataLabels;

class ApexBarChart extends ApexChart
{
    use HasAxis, HasStroke, HasSeries, HasDataLabels;
}
