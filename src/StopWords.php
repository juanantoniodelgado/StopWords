<?php

declare(strict_types=1);

namespace StopWords;

class StopWords
{
    private array $words;

    /**
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function __construct(string $language)
    {
        $cache = new Cache();
        $this->words = $cache->find($language);
    }

    public function clean(string $message) : string
    {
        $message = Sanitizer::sanitize($message);

        // mb_split does not use any delimiters - https://www.php.net/manual/de/function.mb-split.php#103470
        $iterable = mb_split("\s+", $message);

        foreach ($iterable as $pos => $item) {
            if (in_array(mb_strtolower($item), $this->words) || mb_strlen(trim($item)) === 0) {
                unset($iterable[$pos]);
            }
        }

        return implode(' ', $iterable);
    }
}
