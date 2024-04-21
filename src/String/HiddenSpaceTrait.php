<?php

declare(strict_types=1);

namespace Salsan\Utils\String;

trait HiddenSpaceTrait
{
    public function replaceWithStandardSpace(string $str)
    {
        /*
            No-Break Space              \x{00a0}    https://www.compart.com/en/unicode/U+00a0
            ZERO WIDTH SPACE            \x{200b}    https://www.compart.com/en/unicode/U+200b
            RIGHT-TO-LEFT MARK          \x{200f}    https://www.compart.com/en/unicode/U+200f
            LEFT-TO-RIGHT EMBEDDING     \x{202a}    https://www.compart.com/en/unicode/U+202a
            RIGHT-TO-LEFT OVERRIDE      \x{202e}    https://www.compart.com/en/unicode/U+202e
            Zero Width No-Break Space   \x{feff}    https://www.compart.com/en/unicode/U+feff
            Thin Space                  \x{2009}    https://www.compart.com/en/unicode/U+2009
        */
        return preg_replace('/[\x{00a0}\x{200b}-\x{200f}\x{202a}-\x{202e}\x{feff}\x{2009}]/u', ' ', $str);
    }

    public function trimmer(string $str)
    {
        return preg_replace('/^\s+|\s+$/u', '', $str);
    }
}
