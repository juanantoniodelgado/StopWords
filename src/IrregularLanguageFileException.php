<?php

declare(strict_types=1);

namespace StopWords;

use Exception;

class IrregularLanguageFileException extends Exception
{
    public static function fromFile(string $filePath) : self
    {
        return new self(sprintf('Malformed language file on %d', $filePath));
    }
}
