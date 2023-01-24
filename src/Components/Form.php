<?php

namespace Hehecoding\LaragenUiKit\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public string $method = 'GET';

    public string $action = '';

    /**
     * Initialise the component.
     *
     * @param  string  $method
     * @param  string  $action
     */
    public function __construct(string $method = 'POST', string $action = '')
    {
        $this->method = $method;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('laragen::components.form');
    }
}
