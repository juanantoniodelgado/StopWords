<?php

declare(strict_types=1);

namespace StopWords\Tests;

use PHPUnit\Framework\TestCase;
use StopWords\StopWords;

class StopWordsTest extends TestCase
{
    /** @test */
    public function basicTest()
    {
        $originalMessage = 'ante mi casa';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }

    /** @test */
    public function singleLetterWordTest()
    {
        $originalMessage = 'a ante mi casa';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }

    /** @test */
    public function reverseSingleLetterWordTest()
    {
        $originalMessage = 'ante a mi casa';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }

    /** @test */
    public function sanitizeSpecialCharactersEndTest()
    {
        $originalMessage = 'ante,a.mi-casa$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }

    /** @test */
    public function sanitizeSpecialCharactersMiddleTest()
    {
        $originalMessage = 'ante,a$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=mi-casa';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }

    /** @test */
    public function sanitizeSpecialCharactersStartTest()
    {
        $originalMessage = '$-_.+!*\'(),{}|\\^~[]`<>#%";/?:@&=ante,a.mi-casa';
        $cleanMessage = 'mi casa';

        $stopWords = new StopWords('es');
        $this->assertEquals($cleanMessage, $stopWords->clean($originalMessage));
    }
}