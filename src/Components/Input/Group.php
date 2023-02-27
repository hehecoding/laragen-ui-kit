<?php

namespace Hehecoding\LaragenUiKit\Components\Input;

use Illuminate\View\Component;

class Group extends Component
{
    /**
     * The label for the group.
     */
    public string $label;

    /**
     * Specify what input this label is bound to.
     */
    public string $for;

    /**
     * An array of validation errors.
     */
    public array $errors = [];

    /**
     * Any instructions which should be rendered.
     */
    public ?string $instructions;

    /**
     * Whether this input group is required.
     */
    public bool $required = false;

    /**
     * Create the component instance.
     */
    public function __construct(string $label, string $for, bool $required = false, array $errors = [], ?string $instructions = null)
    {
        $this->label = $label;
        $this->for = $for;
        $this->instructions = $instructions;
        $this->required = $required;
        $this->errors = $errors;
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
        return view('laragen::components.input.group');
    }
}
