<?php

namespace DagaSmart\Support\Traits;

trait MakeTrait
{
    public static function make()
    {
        return new static(...func_get_args());
    }
}
