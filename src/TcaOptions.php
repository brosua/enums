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
            if ($case instanceof \BackedEnum) {
                $items[] = [$case->getTranslationString(), $case->name];
            } else {
                $items[] = [$case->getTranslationString(), $case->value];
            }
        }
        return $items;
    }
}
