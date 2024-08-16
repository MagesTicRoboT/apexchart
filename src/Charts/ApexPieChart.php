<?php

namespace App\ApexChart\Charts;

use App\ApexChart\ApexChart;
use App\ApexChart\Concerns\HasDataLabels;

class ApexPieChart extends ApexChart
{
    use HasDataLabels;

    public function setSeries(array $series)
    {
        // Handle single-line series
        $this->options['series'] = $series;

        return $this;
    }

    public function setLabels(array $labels)
    {
        $this->options['labels'] = $labels;
        return $this;
    }
}
