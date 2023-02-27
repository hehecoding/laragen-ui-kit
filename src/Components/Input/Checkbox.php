<?php

namespace Hehecoding\LaragenUiKit\Components\Input;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Whether the toggle should be in an on state.
     */
    public bool $on = false;

    /**
     * Whether the toggle should be disabled.
     */
    public bool $disabled = false;

    /**
     * Create the component instance.
     */
    public function __construct(bool $on = false, bool $disabled = false)
    {
        $this->on = $on;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.input.checkbox');
    }
}
