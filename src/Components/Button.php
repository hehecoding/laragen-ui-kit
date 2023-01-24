<?php

namespace Hehecoding\LaragenUiKit\Components;

use Illuminate\View\Component;

class Button extends Component
{

    /**
     * The button theme.
     * Available sizes: primary
     */
    public string $theme = 'primary';

    /**
     * The button size.
     * Available sizes: default
     */
    public string $size = 'default';

    /**
     * Initialise the component.
     *
     * @param string $theme
     * @param string $size
     */
    public function __construct( string $theme = 'primary', string $size = 'default')
    {
        $this->theme = $theme;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.button');
    }
}
