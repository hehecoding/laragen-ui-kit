<?php

namespace Hehecoding\LaragenUiKit\Components\Input;

use Illuminate\View\Component;

class MultiSelect extends Component
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

    public $selected = [];

    public $options = [];

    public function toggleSelected($option)
    {
        if (in_array($option, $this->selected)) {
            $this->selected = array_diff($this->selected, [$option]);
        } else {
            $this->selected[] = $option;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.input.multi-select');
    }
}
