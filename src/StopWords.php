<?php

declare(strict_types=1);

namespace StopWords;

class StopWords
{
    private $words;

    public function clean(string $message): string
    {
        $message = $this->sanitize($message);

        $iterable = mb_split("/\s+/", $message);

        foreach ($iterable as $pos => $item) {
            if (in_array(mb_strtolower($item), $this->words) || mb_strlen(trim($item)) === 0) {
                unset($iterable[$pos]);
            }
        }

        return implode(' ', $iterable);
    }

    private function sanitize(string $message): string
    {
        return mb_ereg_replace("/[^\p{L}\p{N}\_\s\-]/", " ", $message);
    }

    /**
     * @param string $language
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function __construct(string $language)
    {
        $cache = new Cache();
        $this->words = $cache->find($language);
    }
}
