<?php

namespace App\ApexChart\Concerns;


trait HasMultiSeries
{
    public function setSeries(string $type, $name = "Demo", array $data = [])
    {
        // Handle multi-line series
        $this->options['series'][] = [
            'type' => $type,
            'name' => $name,
            'data' => $data
        ];

        return $this;
    }
}
