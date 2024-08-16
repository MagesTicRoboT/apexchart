<?php

namespace App\ApexChart\Concerns;


trait HasStroke
{

    /**
     * enable legends in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setStrokeCurve(string $curve = "straight")
    {
        $curves = ['straight', 'smooth', 'stepline'];
        if (!in_array($curve, $curves)) {
            // throwException()
        }
        $this->options['stroke']['curve'] = $curve;

        return $this;
    }
    public function setStrokeWidth(int $width)
    {
        $this->options['stroke']['width'] = $width;
        return $this;
    }
}
