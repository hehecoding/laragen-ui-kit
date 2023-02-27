<?php

namespace Hehecoding\LaragenUiKit\Components\Input;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * Whether the input has an error to show.
     */
    public bool $error = false;

    /**
     * Initialise the component.
     */
    public function __construct(bool $error = false)
    {
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.input.text');
    }
}
