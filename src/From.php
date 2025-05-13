<?php

declare(strict_types=1);

namespace Brosua\Enums;

trait From
{
    public static function fromName(string $name): ?static
    {
        foreach (self::cases() as $enum) {
            if ($enum->name === $name) {
                return $enum;
            }
        }
        return null;
    }

    public static function fromValue(string|int $value): ?static
    {
        foreach (self::cases() as $enum) {
            if ($enum->value === $value) {
                return $enum;
            }
        }
        return null;
    }
}
