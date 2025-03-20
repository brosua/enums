<?php

declare(strict_types=1);

namespace Brosua\Enums;

trait Options
{
    use Translation;

    public static function getOptions(): \Generator
    {
        foreach (self::cases() as $case) {
            if ($case instanceof \BackedEnum) {
                yield $case->value => $case->getLabel();
            } else {
                yield $case->name => $case->getLabel();
            }
        }
    }
}
