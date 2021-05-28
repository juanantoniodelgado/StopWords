<?php

declare(strict_types=1);

namespace StopWords\Tests;

use PHPUnit\Framework\TestCase;
use StopWords\Cache;
use StopWords\IrregularLanguageFileException;
use StopWords\LanguageNotFoundException;

class CacheTest extends TestCase
{
    /** @test */
    public function returnsWordsTest()
    {
        $cache = new Cache();
        $this->assertIsArray($cache->find('es'));
    }

    /** @test */
    public function languageNotFoundTest()
    {
        $cache = new Cache();

        $this->expectException(LanguageNotFoundException::class);
        $cache->find('ZZZ');
    }

    /** @test */
    public function irregularFileTest()
    {
        $filePath = Cache::WORDS_PATH . 'test.json';

        file_put_contents($filePath, '{"handlers": ["test"]}');
        $cache = new Cache();

        $this->expectException(IrregularLanguageFileException::class);
        $cache->find('test');
        unlink($filePath);
    }
}