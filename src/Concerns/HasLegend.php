<?php

namespace App\ApexChart\Concerns;


trait HasLegend
{

    public function setLegendPosition($position)
    {
        $this->options['legend']['position'] = $position;
        return $this;
    }
    public function setLegendAlignment($alignment)
    {
        $this->options['legend']['horizontalAlign'] = $alignment;
        return $this;
    }
    public function enableLegendFloating($floating = true)
    {
        $this->options['legend']['floating'] = $floating;
        return $this;
    }
    public function setLegendOffsetX($offset)
    {
        $this->options['legend']['offsetX'] = $offset;
        return $this;
    }
    public function setLegendOffsetY($offset)
    {
        $this->options['legend']['offsetY'] = $offset;
        return $this;
    }
}
