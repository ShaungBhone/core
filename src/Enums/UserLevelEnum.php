<?php

namespace Cachet\Enums;

enum UserLevelEnum: int
{
    case admin = 1;
    case user = 2;

    public function getLabel(): string
    {
        return match ($this->value) {
            self::admin->value => __('Admin'),
            self::user->value => __('User'),
        };
    }
}
