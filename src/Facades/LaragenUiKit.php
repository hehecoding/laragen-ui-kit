<?php

namespace Hehecoding\LaragenUiKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hehecoding\LaragenUiKit\LaragenUiKit
 */
class LaragenUiKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hehecoding\LaragenUiKit\LaragenUiKit::class;
    }
}
