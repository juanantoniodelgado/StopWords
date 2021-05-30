<?php

declare(strict_types=1);

namespace StopWords\Tests;

use PHPUnit\Framework\TestCase;
use StopWords\IrregularLanguageFileException;
use StopWords\LanguageNotFoundException;
use StopWords\StopWords;

class StopWordsTest extends TestCase
{
    /**
     * @dataProvider provider
     *
     * @throws LanguageNotFoundException
     * @throws IrregularLanguageFileException
     */
    public function testFormat(string $language, string $original, string $clean): void
    {
        $stopWords = new StopWords($language);
        $this->assertEquals($clean, $stopWords->clean($original));
    }

    public function provider(): array
    {
        return [
            ['es', 'ante mi casa', 'mi casa'],
            ['es', 'a ante mi casa', 'mi casa'],
            ['es', 'ante a mi casa', 'mi casa'],
            ['es', 'ante,a.mi-casa$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=', 'mi casa'],
            ['es', 'ante,a$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=mi-casa', 'mi casa'],
            ['es', '$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=ante,a.mi-casa', 'mi casa']
        ];
    }
}
