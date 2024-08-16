<?php

namespace App\ApexChart\Charts;

use App\ApexChart\ApexChart;
use App\ApexChart\Concerns\HasAxis;
use App\ApexChart\Contracts\HasOptions;
use App\ApexChart\Concerns\ApexChartOptions;
use App\ApexChart\Concerns\HasMultiSeries;

class ApexMultiColumnChart extends ApexChart
{
    use HasAxis, HasMultiSeries;

    public function setSeries(string $name = "Demo", array $data)
    {
        // Handle single-line series
        $this->options['series'][] = [
            'name' => $name,
            'data' => $data
        ];

        return $this;
    }
}
