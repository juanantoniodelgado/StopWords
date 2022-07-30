<?php

declare(strict_types=1);

namespace StopWords;

use Exception;

class LanguageNotFoundException extends Exception
{
    public static function fromLanguage(string $language) : self
    {
        return new self(sprintf('Language %s is not supported', $language));
    }
}
