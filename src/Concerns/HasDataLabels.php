<?php

namespace App\ApexChart\Concerns;


trait HasDataLabels
{
    /**
     * enable data labels for your chart
     * @param  bool  $enable
     * @return object
     */
    public function enableDataLabels($enable = true)
    {
        $this->options['dataLabels']['enabled'] = $enable;

        return $this;
    }
}
