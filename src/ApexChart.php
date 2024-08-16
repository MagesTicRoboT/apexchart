<?php

namespace App\ApexChart;

use App\ApexChart\Concerns\HasGeneralOptions;
use App\ApexChart\Concerns\HasResponsive;

class ApexChart
{
    use HasGeneralOptions, HasResponsive;
    public $options;

    public function __construct()
    {
        $this->options = [];
    }

    public static function make()
    {
        return new static();
    }
    /**
     * set entire javascript options object
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * get options object
     */
    public function getOptions()
    {
        return $this->options;
    }
}
