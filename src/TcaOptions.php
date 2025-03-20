<?php

declare(strict_types=1);

namespace Brosua\Enums;

trait TcaOptions
{
    use Translation;

    public static function getTcaOptions(): array
    {
        $items = [];
        foreach (self::cases() as $case) {
            $items[] = [$case->getTranslationString(), $case->name];
        }
        return $items;
    }
}
