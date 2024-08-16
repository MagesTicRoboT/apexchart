<?php

namespace App\ApexChart\Concerns;


trait HasAxis
{

    public function setXTitle($title)
    {
        $this->options['xaxis']['title'] = [
            'text' => $title
        ];

        return $this;
    }
    public function setXSeries(array $series)
    {
        $this->options['xaxis']['categories'] = $series;

        return $this;
    }
    public function setYTitle($title)
    {
        $this->options['yaxis']['title'] = [
            'text' => $title
        ];

        return $this;
    }
}
