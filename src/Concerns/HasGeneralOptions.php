<?php

namespace App\ApexChart\Concerns;

trait HasGeneralOptions
{
    /**
     * enable zoom in your chart
     * @param  string $type
     * @return object
     */
    public function setType($type = 'line')
    {
        $this->options['chart']['type'] = $type;
        return $this;
    }

    /**
     * enable zoom in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setTitle($title = 'Demo')
    {
        $this->options['title']['text'] = $title;

        return $this;
    }

    /**
     * enable zoom in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setAlign($align = 'left')
    {
        $this->options['title']['align'] = $align;
        return $this;
    }

    /**
     * enable zoom in your chart
     * @param  bool  $enable
     * @return object
     */
    public function enableZoom($enable = true)
    {
        $this->options['chart']['zoom'] = [
            'enabled' => $enable
        ];

        return $this;
    }

    /**
     * enable legends in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setColors(array $colors)
    {
        $this->options['colors'] = $colors;

        return $this;
    }

    /**
     * enable legends in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setWidth(int $width = 380)
    {
        $this->options['chart']['width'] = $width;
        return $this;
    }

    /**
     * enable legends in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setHeight(int $height = 500)
    {
        $this->options['chart']['height'] = $height;
        return $this;
    }
}
