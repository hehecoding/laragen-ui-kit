<?php

namespace Hehecoding\LaragenUiKit\Traits;

trait WithConfirmation
{
    public string $eventName = 'confirm';

    public function confirm($callback, ...$argv)
    {
        $this->emit($this->eventName, [
            'callback' => $callback,
            'argv' => $argv,
        ]);
    }
}
