<?php

namespace Hehecoding\LaragenUiKit\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.modal');
    }
}
