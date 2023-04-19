<?php

namespace Hehecoding\LaragenUiKit\Traits;

trait WithToasts
{
    public function toastSuccess($message): void
    {
        $this->dispatchBrowserEvent('show-toast', ['type' => 'success', 'text' => $message]);
    }

    public function toastError($message): void
    {
        $this->dispatchBrowserEvent('show-toast', ['type' => 'error', 'text' => $message]);
    }

    public function toastInformational($message): void
    {
        $this->dispatchBrowserEvent('show-toast', ['type' => 'info', 'text' => $message]);
    }

    public function toastWarning($message): void
    {
        $this->dispatchBrowserEvent('show-toast', ['type' => 'warning', 'text' => $message]);
    }

}
