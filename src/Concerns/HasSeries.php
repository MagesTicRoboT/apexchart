<?php

namespace App\ApexChart\Concerns;


trait HasSeries
{
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
