<?php

namespace Hehecoding\LaragenUiKit\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * The button theme.
     * Available sizes: primary
     */
    public string $color = 'primary';

    /**
     * The button size.
     * Available sizes: xs, sm, md, lg, xl
     */
    public string $size = 'default';

    /**
     * The button outline.
     * Available sizes: true, false
     */
    public bool $outline = false;

    /**
     * Initialise the component.
     *
     * @param  string  $color
     * @param  string  $size
     * @param  bool  $outline
     */
    public function __construct(string $color = 'primary', string $size = 'md', bool $outline = false)
    {
        $this->color = $color;
        $this->size = $size;
        $this->outline = $outline;
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
