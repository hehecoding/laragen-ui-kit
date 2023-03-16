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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function render()
    {
        return view('laragen::components.input.multi-select');
    }
}
