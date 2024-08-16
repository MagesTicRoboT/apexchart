<?php

namespace App\ApexChart\Concerns;


trait HasResponsive
{
    /**
     * enable zoom in your chart
     * @param  string $type
     * @return object
     */
    public function setResponsiveBreakpoint($enable = false, int $breakpoint)
    {
        if ($enable) {
            $this->options['responsive']['breakpoint'] = $breakpoint;
        } else {
            $breakpoints = [320, 375, 425, 768, 1024, 1440];
            if (!in_array($breakpoint, $breakpoints)) {
            }
            $this->options['responsive']['breakpoint'] = $breakpoint;
        }
        return $this;
    }

    /**
     * enable zoom in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setResponsiveTitle($title = 'Demo')
    {
        $this->options['responsive']['options'][] = [
            ''
        ];

        return $this;
    }

    /**
     * enable zoom in your chart
     * @param  bool  $enable
     * @return object
     */
    public function setResponsiveAlign($align = 'left')
    {
        $this->options['title']['align'] = $align;
        return $this;
    }
}
